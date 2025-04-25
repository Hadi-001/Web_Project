<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mindful Journey</title>
    <meta name="description" content="Log in to access your personalized mental health resources, tests, and progress tracking">
    <meta name="keywords" content="login, mental health, mindfulness, user authentication, self-care">
    <link rel="stylesheet" href="style.css">
    <title>Mindful Journaling - Login</title>
</head>

<!-- Used .login-body class to apply flexbox and center page content -->
<body class="login-body">

    <!-- used .login-main class to apply flexbox and easily manipulate content -->
    <main class="login-main">      
        <div class="login-container"> 
            <div class="login-left-container">
                <h1>Welcome to login</h1>
                <h3>Don't have an account?</h3>
                <a class="signup-button" href="signup.php">Sign up</a>
            </div>
            <form class="login-form form" id = "login-form" method="POST" action="login_action.php" > 
                <h1>Sign in</h1>
                <div class="input-feild">
                <label for="username">Username</label>
                <input class="login-input" id="login-username" placeholder="Username" type="text" name="username" required>
                </div>
            
                <div class="input-feild">
                <label for="password">Password</label>
                <input class="login-input" id="login-password" placeholder="Password" type="password" name="password" required >
                </div>

                <div id="login-error" class="login-error-message" style="color:red;font-size: 0.9rem;margin-top: 10px;text-align: center;"></div> 
                <button class="login-button" type="submit">Sign in </button>
            </form>
            
        </div>   
    </main>
    <!-- JQuery Dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script src="javascript.js"></script>
</body>
</html>