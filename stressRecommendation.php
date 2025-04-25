<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stress Management Guide</title>
    <meta name="description" content="Learn stress management techniques, including guided breathing exercises for relaxation">
    <meta name="keywords" content="stress relief, relaxation techniques, mental wellness">
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous"
    >
    <link rel="stylesheet" href="style.css">

</head>
<body class="stress-body">
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
    
    <!-- This section contains tips to decrease stress -->
    <section>
        <div class="stress-container">
            <h2>🌱 Breathe, Relax, and Reset</h2>
            <p>Feeling overwhelmed? Take a deep breath. You're doing great!</p>
            
            <!-- Breathing Exercise -->
            <div class="activity">
                <h3>🫁 Quick Breathing Exercise</h3>
                <p id="breathing-instructions">Click below to start.</p>
                <p id="breathing-timer"></p>
                <button class="btn-contact-us" id="breathing-exercise-btn">Start</button>
            </div>
    
            <!-- Motivational Quote -->
            <div class="quote-box">
                <p>“Almost everything will work again if you unplug it for a few minutes… including you.” – Anne Lamott</p>
            </div>
    
            <!-- Stress Management Tips -->
            <div class="tips">
                <h3>💡 Stress Management Tips</h3>
                <ul class="tips-elements">
                    <li>🛌 Get enough sleep – aim for at least 7 hours.</li>
                    <li>💧 Stay hydrated – drink plenty of water.</li>
                    <li>🚶 Take a short walk or stretch every hour.</li>
                    <li>🎧 Listen to calming music or nature sounds.</li>
                    <li>📅 Plan your tasks to avoid last-minute stress.</li>
                    <li>🗣️ Talk to a friend or family member when feeling overwhelmed.</li>
                </ul>
            </div>
    
            <!-- return home step -->
            <a class="btn" href="Home.php">Return Home</a>
        </div>    
    </section>
    
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
      <!-- JQuery Dependencies -->
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script src="javascript.js"></script>
    
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
