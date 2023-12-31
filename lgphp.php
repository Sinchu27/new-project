<html>
    <head>
        <title>log form</title>
        <link rel="stylesheet"href="style(1).css">
        <style>
            error{
                color:red;
            }
            </style>
            <script src="loginjs.js"></script>
        </head>
        <body>
            <div class="b">
                <h2>login form</h2>
                <form mathod="post" action="login.php"pnsubmit="return validateForm()">
                    <div id="a">
                        <label for="username"name="username"required>
                            <input type="text" id="username" name="username" required>
        </div>
        <br>
    <div id="a">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
        </div>
        <br>
        <div id="button">
            <input type="submit" value="login">
        </div>
        </form>
        <div id="error-msg" class="error">
        </div>
        </body>
        </html>

            
</head>
