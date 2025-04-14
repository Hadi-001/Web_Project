<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <meta name="description" content="Manage your profile, update your password, and track your mental health progress through interactive graphs">
    <meta name="keywords" content="user profile, mental health tracking, account settings, progress tracking">
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous"
    >
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
    
    <!-- Profile and Chart Section -->
    <div class="profile-and-charts-container">
        <!-- Profile Section -->
        <div class="profile-container">
            <img src="Images/anonymous-user.png" alt="">
            <h2>User Profile</h2>
            <div class="profile-details">
                <p><strong>Name:</strong> <span id="userName">John Doe</span></p>
                <p><strong>Username:</strong> <span id="userUsername">johndoe123</span></p>
                <p><strong>Email:</strong> <span id="userEmail">johndoe@example.com</span></p>

                <!-- Password Change -->
                <form id="passwordForm">
                    <label for="oldPassword">Current Password:</label>
                    <input type="password" id="oldPassword" placeholder="Enter current password" required>

                    <label for="password-input" class="form-label">Password</label>
                    <input type="password" placeholder="Enter new password" class="form-control" id="password-input" required>
                    <div class="invalid-feedback">
                    Weak password Should contain at least 8 characters, one uppercase, one lowercase, one number, and one special character
                    </div>

                    <label for="confirm-password-input" class="form-label">Confirm password</label>
                    <input type="password" placeholder="Confirm new password" class="form-control" id="confirm-password-input" required>
                    <div class="invalid-feedback" id="invalid-confirm-password">
                        Password does not match
                    </div>
                    

                    <button class="btn-contact-us" type="submit">Update Password</button>
                </form>
            </div>
        </div>

        <!-- Chart Section -->
        <div class="charts-container">
            <div class="chart-container">
                <canvas id="myChart"></canvas>
            </div>

            <div class="chart-container">
                <canvas id="secondChart"></canvas>
            </div>

            <div class="chart-container">
                <canvas id="thirdChart"></canvas>
            </div>
        </div>
    </div>

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

    <!-- The bellow charts are developed by ChatGpt Their content will change in the backend phase -->
    <!-- This scripting is for the charts -->
    <script>
        // First Chart (Mood Level)
        const ctx1 = document.getElementById('myChart').getContext('2d');
        new Chart(ctx1, {
            type: 'line',
            data: {
                labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                datasets: [{
                    label: 'Stress Test Score',
                    data: [3, 4, 5, 3, 4, 6, 5],
                    borderColor: 'blue',
                    borderWidth: 2
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: { beginAtZero: true }
                }
            }
        });

    // Second Chart (Activity Level)
    const ctx2 = document.getElementById('secondChart').getContext('2d');
    new Chart(ctx2, {
        type: 'line',
        data: {
            labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
            datasets: [{
                label: 'Anxiety Test Score',
                data: [2, 3, 4, 2, 5, 6, 7],
                backgroundColor: 'green',
                borderColor: 'green',
                borderWidth: 2
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                y: { beginAtZero: true }
            }
        }
    });

    // Third Chart (Sleep Hours)
    const ctx3 = document.getElementById('thirdChart').getContext('2d');
    new Chart(ctx3, {
        type: 'line',
        data: {
            labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
            datasets: [{
                label: 'Depression Test Score',
                data: [7, 6, 8, 5, 7, 6, 8],
                borderColor: 'purple',
                borderWidth: 2,
                backgroundColor: 'rgba(128,0,128,0.2)'
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                y: { beginAtZero: true }
            }
        }
    });

    </script>

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


