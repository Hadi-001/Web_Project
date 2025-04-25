<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mindful Journaling - FAQ</title>
    <meta name="description" content="Find answers to common questions about our mental health platform, self-assessments, and features">
    <meta name="keywords" content="FAQ, mental health questions, user guide, help center">
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
        
        <!-- This section contains the frequently asked questions -->
        <main class="faq-main-container">

            <section class="faq col-xl-5 col-sm-7 col-11">
                <h1>Frequently Asked Questions</h1>
                
                <?php
                    require_once 'connection.php';

                    $sql = "SELECT question, answer FROM FAQ";
                    $result = $connection->query($sql);

                    while ($row = $result->fetch_assoc()) {
                        $question = htmlspecialchars($row['question']);
                        $answer = $row['answer']; 

                        echo '<div class="faq-item">';
                        echo '<button class="faq-question">' . $question . '</button>';
                        echo '<p class="faq-answer">' . $answer . '</p>';
                        echo '</div>';
                    }
                    $connection->close();
                ?>
            </section>
            
            
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
                    // Underline nav links on hover
                    $(".nav-item a").hover(
                        function () {
                            $(this).css({"text-decoration":"underline" ,
                                        "text-decoration-color":"#FFFFFF",
                                        "transform":"scale(1.05)"
                        });
                        },
                        function () {
                            $(this).css({"text-decoration": "none",
                                        "transform": "scale(1)"});
                    
                        }
                    );
                });
            </script>
</body>
</html>