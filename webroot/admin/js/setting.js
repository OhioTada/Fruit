$('.js-submit').on('click', function () {
    $.validator.addMethod("validateLoginId", function (value, element) {
        return /^[a-zA-Z0-9!@#~\$%\^\&*\)\(+=._-]+$/g.test(value);
    });

    $.validator.addMethod('validatePassword', function (value, element) {
        return /^(?=.*?[A-Z])(?=(.*[a-z]){1,})(?=(.*[\d]){1,})(?=(.*[\W]){1,})(?!.*\s).{8,16}$/.test(value);
    });

    $('#form-login').validate({
        rules: {
            "loginId": {
                required: true,
                maxlength: 128,
                // validateLoginId: true
            },
            "password": {
                required: true,
                minlength: 8,
                maxlength: 36,
                // validatePassword: true
            },
        },
        messages: {
            "loginId": {
                required: "ログインIDをご入力ください。",
                maxlength: "半角128文字以内で入力して下さい。",
                validateLoginId: "形式が異なります。"
            },
            "password": {
                required: "パスワードをご入力ください",
                minlength: "パスワードは8文字以上36文字以内にして下さい",
                maxlength: "パスワードは8文字以上36文字以内にして下さい",
                validatePassword: "形式が異なります。"
            }
        },
        // submitHandler: function(form) { form.summit() }
    })

})