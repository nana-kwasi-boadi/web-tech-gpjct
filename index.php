<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel = "stylesheet" href = "./login.css">
        <link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@1,9..144,500&family=Montserrat:wght@200&display=swap" rel="stylesheet"> 
        <title>Login</title>
    </head>

    <body>
        <form id = "login-form" action = "./dashboard.php" method = "post">
            <p class = "logo" style = "font-family: 'Fraunces', serif; margin-left: 5rem;">Dzagli & Co</h1style></p>
            <label id = "label-email">Email</label>
            <br />
            <input id = "email" class = "login-form" type = "email" name = "admin-email" value = "" />
            <br />
            <label id = "label-password">Password</label>
            <br />
            <input id = "password" class = "login-form" type = "password" name = "admin-password" value = "" />
            <div class = "forgot-password">
                <a class = "" onclick = "clickHandler()">Forgot Password?</a> 
            </div>
            <br />
            <input class = "submit-form" type = "submit" value = "Login" />
        </form>
        </div>

        <script type="text/javascript">
            const clickHandler = () => {
                alert("Please contact your system administrator");
            };
        </script>
    </body>
</html>