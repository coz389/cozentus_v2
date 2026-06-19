// assets/js/webinar-form.js

function formVal() {
    var $form = $(".webinar");

    $.validator.addMethod("letters", function (value, element) {
        return this.optional(element) || value == value.match(/^[a-zA-Z\s]*$/);
    });

    $.validator.addMethod("eml", function (value, element) {
        var formId = $(element).closest("form").attr("id");
        var disallowedDomains;
        if (formId == "career_form_apply") {
            disallowedDomains = [
                "google.com",
                "yahoo.com",
                "outlook.com",
                "aol.com",
                "icloud.com",
                "zoho.com",
                "protonmail.com",
                "mail.com",
                "gmx.com",
                "yandex.com",
            ];
        } else {
            disallowedDomains = [
                "google.com",
                "yahoo.com",
                "outlook.com",
                "aol.com",
                "icloud.com",
                "zoho.com",
                "protonmail.com",
                "mail.com",
                "gmx.com",
                "yandex.com",
                "gmail.com",
            ];
        }
        var pattern = /^[a-zA-Z0-9._%+-]+@([a-zA-Z0-9.-]+\.[a-zA-Z]{2,})$/;
        var match = value.match(pattern);
        return this.optional(element) || (match && disallowedDomains.indexOf(match[1]) === -1);
    });

    $form.each(function () {
        var Mainform = $(this);
        var submitbtn = Mainform.find("button[type=submit]");

        Mainform.validate({
            rules: {
                name: { required: true, minlength: 3, letters: true },
                email: { required: true, email: true, eml: true },
                phone: { required: true, digits: true },
                employees: { required: true },
                service: { required: true },
                organisation: { required: true },
                privacy_policy: { required: true },
            },
            messages: {
                name: "Please specify your name (only letters and spaces are allowed)",
                email: "Please specify a valid email address",
                eml: "Please enter only work email address",
            },
            submitHandler: function (form) {
                var formData = new FormData(form);

                // ✅ Attach fresh CSRF token for CI
                formData.append(csrf_token_name, csrf_hash);

                $.ajax({
                    type: "POST",
                    url: site_url + Mainform.data("form"),
                    data: formData,
                    dataType: "json",
                    processData: false,
                    contentType: false,
                    beforeSend: function () {
                        submitbtn.addClass("loading").prop("disabled", true);
                    },
                    success: function (res) {
                        submitbtn.removeClass("loading").prop("disabled", false);
                        renderSuccess(submitbtn, res, "success");

                        if (Mainform.data("download")) {
                            downloadURI(Mainform.data("download"), Mainform.data("file-name"));
                        }

                        if (res.status) {
                            Mainform[0].reset();
                            window.location.href = site_url + "thankyouforregistering";
                        }
                    },
                    error: function () {
                        submitbtn.removeClass("loading").prop("disabled", false);
                        renderSuccess(submitbtn, { msg: "Server error. Please try again." }, "error");
                    },
                });
            },
        });
    });
}

formVal();

function downloadURI(uri, name) {
    var link = document.createElement("a");
    link.setAttribute("download", name);
    link.href = uri;
    document.body.appendChild(link);
    link.click();
    link.remove();
}

function renderSuccess(btn, res, type) {
    var st = `<div class="${type === "success" ? "success-bar" : "error-bar"} state-bar">${res.msg}</div>`;
    btn.parent().append(st);
    setTimeout(function () {
        btn.parent()
            .find(".state-bar")
            .fadeOut("slow", function () {
                $(this).remove();
            });
    }, 1500);
}
