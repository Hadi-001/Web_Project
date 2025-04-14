<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mindful Journaling - Articles</title>
    <meta name="description" content="Read informative articles on mental health topics, including anxiety, depression, and stress management">
    <meta name="keywords" content="mental health articles, anxiety tips, depression management, stress relief">
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous"
    >
    <link rel="stylesheet" href="style.css">
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
    

        <!-- This section contains some articles about mental health -->
        <section class="articles-section">
            <h2>Explore Mental Well-being</h2>
            <div class="articles-container">
            <?php
                require_once 'connection.php';

                $sql = "SELECT article_title, author_image, article_description, article_link FROM ARTICLE";
                $result = $conn->query($sql);

                while ($row = $result->fetch_assoc()) {
                    $title = htmlspecialchars($row['article_title']);
                    $image = htmlspecialchars($row['author_image']);
                    $description = htmlspecialchars($row['article_description']);
                    $link = htmlspecialchars($row['article_link']);

                    echo '<article class="article-part">';
                    echo '<img class="article-img" src="' . $image . '" alt="Author image">';
                    echo '<div class="article-content">';
                    echo '<h3>' . $title . '</h3>';
                    echo '<p>' . $description . '</p>';
                    echo '<a href="' . $link . '" class="read-more" target="_blank">Read More</a>';
                    echo '</div>';
                    echo '</article>';
                }
                
                $conn->close();
            ?>
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
        
        <script src="javascript.js"></script>
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