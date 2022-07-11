<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>PHP Login System</title>
    <link rel="stylesheet" type="text/css" href="resources/style.css">
</head>

<body>
    
    <section class="index-login">
        <div class="wrapper">
            <div class="index-login-signup">
                <h4>SIGN UP</h4>
                <p>Don't have an account yet? Sign up here!</p>
                <form action="includes/signup.inc.php" method="post">
                    <input type="text" name="usr" value="Username">
                    <input type="password" name="pwd" value="Password">
                    <input type="password" name="pwd-repeat" value="Repeat password">
                    <input type="text" name="email" value="E-mail">
                    <br>
                    <button type="submit" name="submit">SIGN UP</button>
                </form>
            </div>
        </div>
        <div class="index-login-login">
            <h4>LOGIN</h4>
            <p>Don't have an account yet? Sign up here!</p>
                <form action="includes/login.inc.php" method="post">
                    <input type="text" name="usr" value="Username">
                    <input type="password" name="pwd" value="Password">
                    <br>
                    <button type="submit" name="submit">LOGIN</button>
                </form>
        </div>
    </section>

</body>
</html>