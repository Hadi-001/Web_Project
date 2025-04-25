<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1" >
    <title>Mindful Journaling - Home</title>
    <meta name="description" content="our guide to mental well-being. Explore articles, take self-assessments, and track your mental health progress">
    <meta name="keywords" content="mental health, mindfulness, self-care, mental wellness, home page">
    
    <!-- Bootstrap CSS -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous"
    >

    <!-- Your Custom CSS -->
    <link rel="stylesheet" href="style.css" >
</head>
<body>

    <!-- Header -->
    <header>
        <div class="header-container">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                        <a class="navbar-brand" href="Home.php">Mindful Journaling</a>
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="Home.php">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="articles.php">Articles</a></li>
                            <li class="nav-item"><a class="nav-link" href="Disease.php">Diseases</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Recommendations</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="depressionRecommendation.php">Depression recommendations</a></li>
                                    <li><a class="dropdown-item" href="anxietyRecommendation.php">Anxiety recommendations</a></li>
                                    <li><a class="dropdown-item" href="stressRecommendation.php">Stress recommendations</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="AboutUs.php">About us</a></li>
                            <li class="nav-item"><a class="nav-link" href="contactUS.php">Contact us</a></li>
                            <li class="nav-item"><a class="nav-link" href="FAQ.php">FAQ</a></li>
                            <li class="nav-item"><a class="nav-link" href="profile.php">Profile</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        <div class="container">

            <!-- Intro Section -->
            <section class="Intro">
                <div class="Intro-content">
                    <h1>Welcome to Mindful Journaling</h1>
                    <p>Your path to inner peace and mental clarity begins here.</p>
                    <div class="Intro-buttons">
                        <a href="articles.php" class="btn primary">Explore More</a>
                        <a href="AboutUs.php" class="btn secondary">Learn More</a>
                    </div>
                </div>
                <div class="Intro-image"> 
                    <img src="Images/home.jpg" alt="Mindful Journaling" >
                </div>
            </section>

            <!-- Tests Section -->
            <section class="Tests">
                <h2>Discover Our Tests</h2>
                <div class="Tests-grid">
                    <div class="Test-card">
                        <h3>Anxiety Test</h3>
                        <p>Perform a simple Anxiety Test to evaluate your stage</p>
                        <a href="anxietyTest.php" class="btn">Test →</a>
                    </div>
                    <div class="Test-card">
                        <h3>Depression Test</h3>
                        <p>Perform a simple Depression Test to evaluate your stage</p>
                        <a href="depressionTest.php" class="btn">Test →</a>
                    </div>
                    <div class="Test-card">
                        <h3>Stress Test</h3>
                        <p>Perform a simple Stress Test to evaluate your stage</p>
                        <a href="stressTest.php" class="btn">Test →</a>
                    </div>
                </div>
            </section>

            <!-- Testimonials Section -->
            <section class="testimonials">
                <h2>What Our Community Says</h2>
                <div class="testimonials-grid">
                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            <p>"Mindful Journaling has completely transformed my approach to mental health."</p>
                        </div>
                        <div class="testimonial-author">
                            <div class="author-image">
                                <img src="Images/anna.jpg" alt="Anna P." >
                            </div>
                            <div class="author-info">
                                <h4>Anna P.</h4>
                                <span>Daily Journal User</span>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            <p>"I now start every day with gratitude and purpose thanks to these amazing tools."</p>
                        </div>
                        <div class="testimonial-author">
                            <div class="author-image">
                                <img src="Images/james.jpg" alt="James L." >
                            </div>
                            <div class="author-info">
                                <h4>James L.</h4>
                                <span>Premium Member</span>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            <p>"A supportive community that helps me stay focused and maintain positivity daily."</p>
                        </div>
                        <div class="testimonial-author">
                            <div class="author-image">
                                <img src="Images/maria.jpg" alt="Maria R." >
                            </div>
                            <div class="author-info">
                                <h4>Maria R.</h4>
                                <span>Community Member</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>  
    </main>

    <!-- Footer -->
    <footer>
        <div class="footer-container">
            <p>&copy; 2025 Mindful Journaling. All rights reserved.</p>
            <ul class="footer-menu">
                <li><a href="privacy&terms.php">Privacy &amp; Terms</a></li>
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
            // Scale testimonial cards on hover
        $(".testimonial-card").hover(
            function () {
                $(this).css("transform", "scale(1.05)");
            },
            function () {
                $(this).css("transform", "scale(1)");
            });
        });
    </script>
</body>
</html>
