<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anxiety Test - Mindful Journaling</title>
    <meta name="description" content="Take this 10-question anxiety test to assess your anxiety levels and receive tailored recommendations">
    <meta name="keywords" content="anxiety test, self-assessment, mental health, anxiety management">
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous"
    >
    <link rel="stylesheet" href="style.css">
    <title>Mindful Journaling - Anxiety Test</title>
</head>

<body class="test-body">
    <h3>Anxiety Assessment</h3>

    <!-- Progress bar from bootstrap -->
    <div class="progress w-50 mt-3">
        <div id="progress-bar" class="col-10 col-md-6 col-xl-4 progress-bar bg-primary " role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    
    <!-- uses bootstrap classes to adjust to different screen sizes -->
     <!-- After answering all the questions from the js array, the js will remove all content of this section and replace it with the result of the test and a button that goes to anxietyRecommendations.php -->
    <section class="test-container col-xs-5 col-md-6 col-xl-4">

        <!-- html loads the initial question, then it is updated by javascript on clicking the next or prev buttons -->
        <h5 id="question-text">Over the last week, how often have you been bothered by having little interest or pleasure in doing things?</h5>
        <br>

        <!-- radio buttons group from bootstrap which represent the 4 options the user can choose from to answer the question -->
        <ul class="options">
            <li>
                <div class="response-container option-1">
                    <input type="radio" id="option1" name="test-option" value="4">
                    <label for="option1" class="custom-radio-label">Not at all</label>
                </div>
            </li>
            <li>
                <div class="response-container option-2">
                    <input type="radio" id="option2" name="test-option" value="3">
                    <label for="option2" class="custom-radio-label">Several days</label>
                </div>
            </li>
            <li>
                <div class="response-container option-3">
                    <input type="radio" id="option3" name="test-option" value="2">
                    <label for="option3" class="custom-radio-label">More than half the days</label>
                </div>
            </li>
            <li>
                <div class="response-container option-4">
                    <input type="radio" id="option4" name="test-option" value="1">
                    <label for="option4" class="custom-radio-label">Nearly every day</label>
                </div>
            </li>
        </ul>
    </section>

    <!-- Uses bootstrap classes to adjust for different screen sizes -->
     <!-- contains the navigation buttons to go to prev or next question or to discard test and go home -->
    <div class="navigation-buttons col-10 col-md-6 col-xl-4">
        <button class="blue-button" id="prev-button" disabled>Previous</button>
        <a class="discard-button" id="discard-button" href="Home.php">Discard test</a>
        <button class="blue-button" id="next-button" disabled>Next</button>
    </div>

    <!-- JQuery Dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script src="javascript.js"></script>
    
       
        
</body>
</html>
