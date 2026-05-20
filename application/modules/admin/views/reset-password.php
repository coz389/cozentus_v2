<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/melody/template/pages/samples/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Sep 2018 06:08:53 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cozentus</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?= base_url() ?>backend/assets/vendors/iconfonts/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>backend/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="<?= base_url() ?>backend/assets/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?= base_url() ?>backend/assets/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="<?= base_url() ?>backend/assets/images/cropped-favicon-180x180.png" />


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth">
                <div class="row w-100">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left p-5">
                            <div class="brand-logo">
                                <img src="<?= base_url('assets/images/logo-black.png') ?>" style="" alt="logo">
                            </div>

                            <h4>Set New Password</h4>
                            <h6 class="font-weight-light">Choose a strong password for your account.</h6>

                            <div id="response-msg"></div>
                            <div id="form-area">
                                <!-- New Password -->
                                <div class="form-group">
                                    <label for="password">New Password</label>
                                    <div class="input-group">
                                        <input type="password"
                                            id="password"
                                            name="password"
                                            class="form-control"
                                            placeholder="Min. 8 chars, 1 uppercase, 1 number"
                                            autocomplete="new-password">
                                        <div class="input-group-append">
                                            <span class="input-group-text toggle-pw" data-target="password">👁</span>
                                        </div>
                                    </div>
                                    <!-- Strength bar -->
                                    <div class="mt-1 bg-light rounded">
                                        <div id="strength-bar" class="strength-bar" style="width:0%; background:#e74c3c;"></div>
                                    </div>
                                    <small id="strength-label" class="text-muted"></small>
                                </div>

                                <!-- Confirm Password -->
                                <div class="form-group">
                                    <label for="confirm_password">Confirm Password</label>
                                    <div class="input-group">
                                        <input type="password"
                                            id="confirm_password"
                                            name="confirm_password"
                                            class="form-control"
                                            placeholder="Re-enter new password"
                                            autocomplete="new-password">
                                        <div class="input-group-append">
                                            <span class="input-group-text toggle-pw" data-target="confirm_password">👁</span>
                                        </div>
                                    </div>
                                    <small id="match-label" class="text-muted"></small>
                                </div>

                                <!-- Hidden token -->
                                <input type="hidden" id="token" value="<?= htmlspecialchars($token) ?>">

                                <button id="submit-btn" type="button" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
                                    <span id="btn-text">Update Password</span>
                                    <span id="btn-spinner" class="spinner-border text-light ml-2 d-none" role="status"></span>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?= base_url() ?>backend/assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="<?= base_url() ?>backend/assets/vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="<?= base_url() ?>backend/assets/js/off-canvas.js"></script>
    <script src="<?= base_url() ?>backend/assets/js/hoverable-collapse.js"></script>
    <script src="<?= base_url() ?>backend/assets/js/misc.js"></script>
    <script src="<?= base_url() ?>backend/assets/js/settings.js"></script>
    <script src="<?= base_url() ?>backend/assets/js/todolist.js"></script>
    <!-- endinject -->

    <script>
        $(function() {

            // ── Password strength meter ──────────────────────────────
            $('#password').on('input', function() {
                var pw = $(this).val();
                var score = 0;
                if (pw.length >= 8) score++;
                if (/[A-Z]/.test(pw)) score++;
                if (/[0-9]/.test(pw)) score++;
                if (/[^A-Za-z0-9]/.test(pw)) score++;

                var labels = ['', 'Weak', 'Fair', 'Good', 'Strong'];
                var colors = ['#e74c3c', '#e74c3c', '#f39c12', '#27ae60', '#1a7a45'];
                var widths = ['0%', '25%', '50%', '75%', '100%'];

                $('#strength-bar').css({
                    width: widths[score],
                    background: colors[score]
                });
                $('#strength-label').text(score > 0 ? labels[score] : '').css('color', colors[score]);

                checkMatch();
            });

            // ── Match indicator ──────────────────────────────────────
            $('#confirm_password').on('input', checkMatch);

            function checkMatch() {
                var pw = $('#password').val();
                var cpw = $('#confirm_password').val();
                if (!cpw) {
                    $('#match-label').text('');
                    return;
                }
                if (pw === cpw) {
                    $('#match-label').text('✔ Passwords match').css('color', '#27ae60');
                } else {
                    $('#match-label').text('✖ Passwords do not match').css('color', '#e74c3c');
                }
            }

            // ── Toggle password visibility ───────────────────────────
            $('.toggle-pw').on('click', function() {
                var target = $(this).data('target');
                var $input = $('#' + target);
                $input.attr('type', $input.attr('type') === 'password' ? 'text' : 'password');
            });

            // ── Submit ───────────────────────────────────────────────
            $('#submit-btn').on('click', function() {
                var password = $('#password').val();
                var confirm_password = $('#confirm_password').val();
                var token = $('#token').val();
                var $btn = $(this);

                if (!password || !confirm_password) {
                    $('#response-msg').html('<p class="alert alert-warning">Both password fields are required.</p>');
                    return;
                }
                if (password !== confirm_password) {
                    $('#response-msg').html('<p class="alert alert-warning">Passwords do not match.</p>');
                    return;
                }
                if (password.length < 8) {
                    $('#response-msg').html('<p class="alert alert-warning">Password must be at least 8 characters.</p>');
                    return;
                }

                // UI: loading
                $btn.prop('disabled', true);
                $('#btn-text').text('Updating...');
                $('#btn-spinner').removeClass('d-none');
                $('#response-msg').html('');

                $.ajax({
                    url: '<?= base_url('admin/login/resetpassword/') ?>' + token,
                    method: 'POST',
                    data: {
                        password: password,
                        confirm_password: confirm_password
                    },
                    dataType: 'json',
                    success: function(res) {
                        $('#response-msg').html(res.msg);

                        if (res.status && res.redirect) {
                            $('#form-area').fadeOut(300);
                            // Redirect to login after 2 seconds
                            setTimeout(function() {
                                window.location.href = res.redirect;
                            }, 2000);
                        }
                    },
                    error: function() {
                        $('#response-msg').html('<p class="alert alert-danger">Network error. Please try again.</p>');
                    },
                    complete: function() {
                        $btn.prop('disabled', false);
                        $('#btn-text').text('Update Password');
                        $('#btn-spinner').addClass('d-none');
                    }
                });
            });

            // Allow Enter key
            $('input').on('keydown', function(e) {
                if (e.key === 'Enter') $('#submit-btn').trigger('click');
            });

        });
    </script>
</body>

</html>