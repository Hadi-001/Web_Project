<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mindful Journaling - ContactUs</title>
    <meta name="description" content="Get in touch with us for inquiries, support, or feedback about our mental health platform">
    <meta name="keywords" content="contact us, mental health support, customer service, feedback" >
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous"
    >
    <link rel="stylesheet" href="style.css" >
</head>
<body>
    <!-- Header common in all pages -->
    <header>
        <!-- Header Container (div) -->
        <!-- Content of this header should be changed-->
        <div class="header-container">
    
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <a class="navbar-brand" href="Home.php">Mindful Journaling</a>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        <li class="nav-item">
                        <a class="nav-link" href="Home.php">Home</a>
                        </li>

                        <li class="nav-item">
                        <a class="nav-link" href="articles.php">Articles</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="Disease.php">Diseases</a>
                        </li>
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Recommendations
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="depressionRecommendation.php">Depression recommendations</a></li>
                                <li><a class="dropdown-item" href="anxietyRecommendation.php">Anxiety recommendations</a></li>
                                <li><a class="dropdown-item" href="stressRecommendation.php">Stress recommendations</a></li>
                            </ul>   
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="AboutUs.php">About us</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="contactUS.php">Contact us</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="FAQ.php">FAQ</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="profile.php">Profile</a>
                        </li>

                    </ul>
                   
                  </div>
                </div>
              </nav>
        </div>
        </header>

        <!--This section contains the contactUS info/form-->
        <section class="contact-section">
            <h2>Contact Us</h2>
            <p>Have questions? Feel free to reach out to us!</p>
    
            <!-- This div is a flex box used for scalability (to wrap content)-->

            <div class="contact-container">

                <!-- Contact Form -->
                 <!-- add the method="post" in backend phase -->
                 <form action="submit_feedback.php" method="POST" class="contact-form">

                    <!--Take the name of the user-->
                    <div class="input-group">
                        <label for="name">Name</label>
                        <input placeholder="Enter your name" type="text" id="name" name="name" required>
                    </div>

                    <!--Take the email of the user -->
                    <div class="input-group">
                        <label for="email">Email</label>
                        <input placeholder="Enter your email" type="email" id="email" name="email" required>
                    </div>

                    <!--Take the message from the user -->
                    <div class="input-group">
                        <label for="message">Message</label>
                        <textarea maxlength="500" placeholder="Type your message..." id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn-contact-us">Send Message</button>
                </form>
    
                <!-- Contact Info -->
                <div class="contact-info">
                    <h3>Get in Touch</h3>
                    <p>Email: <a class="email-link-style" href="mailto:mindfuljournaling@gmail.com">mindfuljournaling@gmail.com</a></p>
                    <p>Phone: +961 81818181</p>
                    <p>Address: 123 Mindful Street, Wellness City</p>
    
                    <div class="social-icons">
                        <!-- Here when the user clickes on the icon he will be moved to a new tab -->
                        <a href="https://www.facebook.com/" target="_blank"><img src="Images/facebook-icon.png" alt="Facebook"></a>
                        <a href="https://www.instagram.com/" target="_blank"><img src="Images/instagram-icon.png" alt="Instagram"></a>
                        <a href="https://x.com/?lang=en" target="_blank"><img src="Images/X-icon.png" alt="X"></a>
                        
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <div class="footer-container">
                <!-- Copy Right -->
                <p>&copy; 2025 Mindful Journaling. All rights reserved.</p>
                <ul class="footer-menu">
    
                    <!-- Terms and Conditions -->
                    <li><a href="privacy&terms.php">Privacy &amp; Terms</a></li>
    
                    <!-- This link takes the user to Frequently Asked Questions page-->
                    <li><a href="FAQ.php">FAQ</a></li>
                </ul>
            </div>
        </footer>
        <!-- JQuery Dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script src="javascript.js"></script>
</body>
</html>