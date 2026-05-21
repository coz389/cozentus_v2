var input = document.querySelector("#phone");
//console.log("phone", input)

var iti = window.intlTelInput(input, {
    //   initialCountry:"in",
    utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.0/build/js/utils.js",
});

window.iti = iti;
