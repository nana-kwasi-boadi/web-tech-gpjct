<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <meta http-equiv = "X-UA-Compatible" content="IE=edge">
        <meta name = "viewport" content="width=device-width, initial-scale=1.0">
        <link rel = "stylesheet" href = "./login.css">
        <link href = "https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@1,9..144,500&family=Montserrat:wght@200&display=swap" rel="stylesheet"> 
        <script src = "myAccount.js" defer></script>
        <title>my Account</title>
        <style>
            .login-form {color: gray;}
            .return-to-index {color: black; text-decoration: none; margin-left: 6rem;}
            .forgot-password {margin-bottom: 3rem;}
            #open-modal {text-decoration: underline;}
            #open-modal:hover {cursor: pointer;}
        </style>
    </head>

    <!-- Change password-->
    <body>
        <div>
            <form id = "view-acc-form" action = "" method = "">
                <label id = "label-role">User role</label>
                <br />
                <input readonly id = "user-role" class = "login-form" type = "email" value = "Supervisor" />
                <br />
                <label id = "label-name">Full name</label>
                <br />
                <input readonly id = "full-name" class = "login-form" type = "email" value = "Bernd" />
                <br />
                <label id = "label-email">Email</label>
                <br />
                <input readonly id = "email" class = "login-form" type = "email"  value = "bernd@gmail.com" />
                <br />
                <div class = "forgot-password">
                    <a id = "open-modal">Change password</a> 
                </div>
                <div>
                    <a class = "return-to-index" href = "./dashboard.php">Return to dashboard</a> 
                </div>
            </form>
        </div>

        <!--Modal-->
        <div id = "chane-pass-modal" class = "modal">
            <!-- Modal content-->
            <div class = "modal-content">
                <span class="close">&times;</span>
                <form id = "change-pass-form" action = "" method = "">
                    <ul id = "password-details">
                        <span id = "weak-password">Weak password</span>
                        <li>Password must be 8-10 characters long</li>
                        <li>Must contain upper and lower cases</li>
                        <li>Must contain numbers and special characters</li>
                    </ul>
                    <label id = "label-new-password">Enter new password</label>
                    <br />
                    <input id = "new-password" class = "login-form" name = "newpass" type = "password" value = ""  />
                    <br />
                    <label id = "label-repeat-new-password">Repeat new password</label>
                    <br />
                    <input id = "repeat-new-password" class = "login-form" name = "repeatednewpass" type = "password" value = "" />
                    <br />
                    <input id = "change-password" class = "submit-form" type = "submit" value = "Change"/>
                <form></form>
            </div>
        </div>
    </body>
</html>