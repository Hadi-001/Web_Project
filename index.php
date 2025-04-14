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
            <form class="login-form"  action="Home.php" >  <!-- Add method="post" later when connecting backend-->
                <h1>Sign in</h1>
                <div class="input-feild">
                <label for="username">Username</label>
                <input class="login-input" placeholder="Username" type="text" id="username" name="username" required>
                </div>
            
                <div class="input-feild">
                <label for="password">Password</label>
                <input class="login-input" placeholder="Password" type="password" id="password" name="passwrod" required >
                </div>
                <button class="login-button" type="submit">Sign in </button>
            </form>
            
        </div>   
    </main>

    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
      integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
      crossorigin="anonymous"
    ></script>
</body>
</html>