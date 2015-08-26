<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>Verify Your Email Address</h2>

        <div>
            <h3>Спасибо за регистрацию на сайте</h3>
            Подтвердите свой аккаунт, перейдя по ссылке ниже
            {{ URL::to('register/verify/' . $confirm_code ) }}.<br/>

        </div>

    </body>
</html>