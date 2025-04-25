<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mindful Journaling - AboutUs</title>
    <meta name="description" content="Learn about the mission and goals of Mindful Journey, your online resource for mental health and wellness">
    <meta name="keywords" content="about us, mental health mission, self-care, mindfulness">
    
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Header -->
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
    
    <!-- Main Content -->
    <main>
        <div class="container">
            <div class="top-content">
                <div class="about-image">
                    <img src="Images/About.jpg" alt="About Us" >
                </div>
                <div class="about-content">
                    <h1>About Us</h1>
                    <div class="about-text">
                        <p>At Mindful Journaling, we believe in the transformative power of self-reflection. Our mission is to empower individuals to cultivate mental clarity, reduce stress, and unlock their creativity through journaling.</p>
                        <p>Founded by a passionate team of mental health advocates and creative thinkers, our platform offers daily and weekly prompts, mood tracking tools, and a supportive community—all designed to guide you on your journey toward inner peace.</p>
                    </div>
                </div>
            </div>
            <div class="benefits-section">
                <div class="benefits-list">
                    <div class="benefit-card">
                        <h3>Boost Emotional Resilience</h3>
                        <p>Gain clarity and manage stress through guided self-reflection practices.</p>
                    </div>
                    <div class="benefit-card">
                        <h3>Encourage Self-Awareness</h3>
                        <p>Recognize patterns and triggers in your daily life and emotional responses.</p>
                    </div>
                    <div class="benefit-card">
                        <h3>Foster Personal Growth</h3>
                        <p>Set meaningful goals and celebrate your progress along the journey.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
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
    <script src="javascript.js"></script>
    <!-- JavaScript Dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- jQuery Script for Hover Effects -->
    <script>
        $(document).ready(function () {
            $(".nav-link").hover(
                function () {
                // Create the white progress bar
                const $bar = $("<span></span>").css({
                    position: "absolute",
                    bottom: "0",
                    left: "0",
                    height: "3px",
                    width: "0",
                    backgroundColor: "#ffffff",
                    display: "block",
                });

                $(this).css({
                    position: "relative",
                    transition: "transform 0.3s ease"
                });

                $(this).append($bar);
                $bar.animate({ width: "100%" }, 300);

                $(this).css("transform", "scale(1.1)");
                },
                function () {
                    $(this).find("span").stop().animate({ width: "0" }, 200, function () {
                        $(this).remove();
                    });
                    $(this).css("transform", "scale(1)");
                }
            );
        $(".navbar-brand").hover(
            function () {
                $(this).css({
                    transform: "scale(1.04)", 
                    color: "white", 
                    "font-weight": "bold",
                    transition: "all 0.3s ease",
                });
            },
            function () {
                $(this).css({
                    transform: "scale(1)",  
                    color: "",  
                    "font-weight": "",
                    transition: "all 0.3s ease",
                });
            });
        });
    </script>
</body>
</html>
