$(document).ready(function () {
    $(function () {
        let validator = $('form.needs-validation').jbvalidator({
            language: '', //json file url
            errorMessage: true,
            successClass: true,
            html5BrowserDefault: false,
            validFeedBackClass: 'valid-feedback',
            invalidFeedBackClass: 'invalid-feedback',
            validClass: 'is-valid',
            invalidClass: 'is-invalid'
        });

        //custom validate method
        validator.validator.custom = function (el, event) {
            var isValid = iti.isValidNumber();
            if ($(el).is('[name=phone]') && $('.iti--separate-dial-code').next().is(
                '.invalid-feedback')) {
                $('.iti--separate-dial-code').next().removeClass('d-inline');
            }
            if ($(el).is('[name=phone]') && !isValid) {
                $('.iti__flag-container').css('height', '65%');
                return 'Enter a valid phone number.';
            }
            if ($(el).is('[name=phone]') && isValid) {
                $('.iti__flag-container').css('height', '100%');
            }
            if ($(el).is('[name=g-recaptcha-response]') && $(el).val() == '') {
                $('#captcha-error').removeClass('d-none');
            }
        };
    });
});
$('.page-button').on('click', function () {
    setTimeout(() => {
        if ($('.iti--separate-dial-code').find('.invalid-feedback').length == 1) {
            $('.iti__flag-container').css('height', '65%');
        }else {
            $('.iti__flag-container').css('height', '100%');
        }
    }, 10);
});