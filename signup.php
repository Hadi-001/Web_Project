<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mindful Journey: Sign Up</title>
    <meta name="description" content="Create your Mindful Journey account and begin your path to better mental health">
    <meta name="keywords" content="signup, create account, mental health, wellness">
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous"
    >
    <link rel="stylesheet" href="style.css">
    <title>Mindful Journaling - Signup</title>
</head>



<!-- Used .signup-body class to apply flex box and easily center the form inside -->
    <body class="signup-body">
          <br><br>
        <h1 class="mt-5">Sign up</h1>

        <br><br>

      <!-- Bootstrap form -->
            <!-- Used bootstrap classes to make the form compatible with different screen sizes -->
             
            <form class="form row g-4 col-xl-3 col-md-4 col-10" id="signup-form" method="POST" action="signup_form_action.php">
                <div class="col-md-12">
                  <label for="signup-first-name" class="form-label" >First name</label>
              <input type="text" class="form-control" id="signup-first-name" name="firstname" required>
              <div class="invalid-feedback">
                First name can only contain alphabetic characters
              </div>

            </div>
            <div class="col-md-12">
              <label for="signup-last-name" class="form-label" >Last name</label>
              <input type="text" class="form-control" id="signup-last-name" name="lastname" required>
              <div class="invalid-feedback">
                Last name can only contain alphabetic characters
              </div>

            </div>
            <div class="col-md-12">
              <label for="signup-username" class="form-label" >Username</label>
              <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend3">@</span>
                <input type="text" class="form-control" id="signup-username" name="username" required>
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                  Feild cannot be empty
                </div>
              </div>

            </div>
            <div class="col-md-12">
              <label for="signup-email" class="form-label" >Email</label>
              <input type="text" class="form-control" id="signup-email" name="email" required>
              <div class="invalid-feedback">
                Invalid email format
              </div>
            </div>

            <div class="col-md-12">
                <label for="password-input" class="form-label" >Password</label>
                <input type="password" class="form-control" id="password-input" name="password" required>
                <div class="invalid-feedback">
                Weak password Should contain at least 8 characters, one uppercase, one lowercase, one number, and one special character
                </div>
            </div>

            <div class="col-md-12">
              <label for="confirm-password-input" class="form-label">Confirm password</label>
              <input type="password" class="form-control" id="confirm-password-input" required>
              <div class="invalid-feedback" id="invalid-confirm-password">
                  Password does not match
              </div>

            </div>
            
            <div class="col-12">
              <div class="form-check">
                <input class="form-check-input " type="checkbox" value="" id="signup-privacy-checkbox" aria-describedby="invalidCheck3Feedback" required>
                <label class="form-check-label" for="signup-privacy-checkbox">
                  Agree to <a class="text-decoration-underline text-primary" href="privacy&terms.php"><strong>terms and conditions</strong></a>
                </label>
                <div id="invalidCheck3Feedback" class="invalid-feedback">
                  You must agree before submitting.
                </div>
              </div>
            </div>
            <div class="col-12">
              <button id="signup-form-submit-button" class="btn btn-primary" type="submit">Sign up</button>
            </div>
            <br><br>
            <p >Already have an account? <a class="text-decoration-underline text-primary" href="index.php"><strong>Login</strong></a></p>
          </form>

          <!-- JQuery Dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

          
          
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

    <script src="javascript.js"></script>
</body>
</html>
