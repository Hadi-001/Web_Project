

// This is for the frequently asked question page
// when pressing the button the answer will appear
document.querySelectorAll(".faq-question").forEach(button => {
    button.addEventListener("click", () => {
        const answer = button.nextElementSibling;
        answer.classList.toggle("active");
    });
});




// ============================================= */
//          stressRecommendation Section         */
// ============================================= */

const breath_button = document.getElementById("breathing-exercise-btn");
if (breath_button)
    breath_button.addEventListener('click',startBreathingExercise);


function startBreathingExercise() {
    breath_button.disabled = true;
    let instruction = document.getElementById("breathing-instructions");
    let timer = document.getElementById("breathing-timer");
    let phases = [
        { text: "Inhale deeply...", duration: 4 },
        { text: "Hold your breath...", duration: 4 },
        { text: "Exhale slowly...", duration: 6 }
    ];

    let phaseIndex = 0;
    function updatePhase() {
        if (phaseIndex >= phases.length) {
            instruction.innerText = "Great job! Repeat if needed.";
            timer.innerText = "";
            breath_button.disabled = false;
            return;

        }

        let phase = phases[phaseIndex];
        instruction.innerText = phase.text;

        let countdown = phase.duration;
        timer.innerText = countdown; // Start countdown

        let interval = setInterval(() => {
            countdown--;
            timer.innerText = countdown;
            if (countdown <= 0) {
                clearInterval(interval);
                phaseIndex++;
                updatePhase(); // Move to next phase
            }
        }, 1000); // each iteration is done when 1 second passes
    }

    updatePhase(); // Start first phase
}


// ============================================= */
//       End of stressRecommendation Section     */
// ============================================= */


// ============================================= //
//                Tests Section                  //
// ============================================= //


//Every test object contains the questions of the test, the index, scores, and result message and target page of this test to be use in DOM manipulation
let depressionTest = {
    questions : [
    "Over the last week, how often have you been bothered by having little interest or pleasure in doing things?",
    "Over the last week, How often have you felt down, depressed, or hopeless?",
    "Over the last week, How often have you had trouble falling or staying asleep, or sleeping too much?",
    "Over the last week, How often have you felt tired or had little energy?",
    "Over the last week, How often have you had poor appetite or overeating?",
    "Over the last week, How often have you felt bad about yourself — or that you are a failure or have let yourself or your family down?",
    "Over the last week, How often have you had trouble concentrating on things, such as reading or watching television?",
    "Over the last week, How often have you been moving or speaking so slowly that other people could have noticed?",
    "Over the last week, How often have you had thoughts that you would be better off dead, or of hurting yourself in some way?",
    "Over the last week, How often have you found it difficult to carry out your daily activities?"
    ],
    currentQuestionIndex: 0,
    scores:[],
    resultMessage: function (score){
        if (score >= 30)return "You have low to no depression";
        else if (score >= 20) return "You have moderate depression";
        else  return "You have severe depression";
    },
    targetPage: "depressionRecommendation.php"
};

let anxietyTest = {
    questions : [
    "Over the last week, How often have you felt nervous, anxious, or on edge?",
    "Over the last week, How often have you been unable to stop or control worrying?",
    "Over the last week, How often have you worried too much about different things?",
    "Over the last week, How often have you had trouble relaxing?",
    "Over the last week, How often have you been so restless that it is hard to sit still?",
    "Over the last week, How often have you become easily annoyed or irritable?",
    "Over the last week, How often have you felt afraid as if something awful might happen?",
    "Over the last week, How often have you experienced sudden feelings of panic?",
    "Over the last week, How often have you found it hard to concentrate due to anxiety?",
    "Over the last week, How often have you avoided places or situations because of anxiety?"
    ],
    currentQuestionIndex: 0,
    scores:[],
    resultMessage: function (score){
        if (score >= 30)return "You have low to no anxiety";
        else if (score >= 20) return "You have moderate anxiety";
        else  return "You have severe anxiety";
    },
    targetPage: "anxietyRecommendation.php"
    
};

let stressTest = {
    questions : [
        "Over the last week, how often have you felt that you were unable to control important things in your life?",
        "Over the last week, how often have you felt confident about your ability to handle personal problems?",
        "Over the last week, how often have you felt that things were going your way?",
        "Over the last week, how often have you found that you could not cope with all the things you had to do?",
        "Over the last week, how often have you been angered because of things that were outside of your control?",
        "Over the last week, how often have you felt difficulties were piling up so high that you could not overcome them?",
        "Over the last week, how often have you felt under pressure from work or school?",
        "Over the last week, how often have you been bothered by arguments or conflicts in your relationships?",
        "Over the last week, how often have you felt overwhelmed by responsibilities?",
        "Over the last week, how often have you struggled to find time to relax?"
    ],
    currentQuestionIndex: 0,
    scores:[],
    resultMessage: function (score){
        if (score >= 30)return "You have low to no stress";
        else if (score >= 20) return "You have moderate stress";
        else  return "You have severe stress";
    },
    targetPage: "stressRecommendation.php"
};


let currentTest;

const questionText = document.getElementById("question-text");
const prevButton = document.getElementById("prev-button");
const nextButton = document.getElementById("next-button");
const discardButton = document.getElementById("discard-button");
const radioButtons = document.querySelectorAll('input[name="test-option"]');


//Manipulates the DOM to view the next question in the list
//It resets the radio buttons, disables the prev button if the user is at the first question, and sets the text in the next button to submit if this is the last question
function updateQuestion() {
    questionText.textContent = currentTest.questions[currentTest.currentQuestionIndex];
    prevButton.disabled = currentTest.currentQuestionIndex === 0;
    nextButton.textContent = currentTest.currentQuestionIndex === currentTest.questions.length - 1 ? "Submit" : "Next";
    radioButtons.forEach((radio) => radio.checked = false);
    nextButton.disabled = true;
}


//changes the width of the progress bas in % depending on the index of the current question 
function updateProgress() {
    let progress = ((currentTest.currentQuestionIndex + 1) / currentTest.questions.length) * 100;
    document.getElementById("progress-bar").style.width = progress + "%";
    document.getElementById("progress-bar").setAttribute("aria-valuenow", progress);
}

//This is called when the user hits the submit button
//It removes the previous content of the test container and puts in it the score and evaluation of the user and a button that goes to a recommendations page 
//The recommendations page is differet depending on the type of the test(depression, anxiety, or stresss)
function displayResult() {
    const totalScore = currentTest.scores.reduce((acc, curr) => acc + curr, 0);
    document.querySelector(".test-container").innerHTML = `<div class="form-last-display-container"><h3>Your total score is: ${totalScore*2.5}/100</h3><br><h3>`+ currentTest.resultMessage(totalScore)+`</h3><br>
    <a class="btn-contact-us btn" id="form-button" href="`+ currentTest.targetPage +`">Go to recommendations</a></div>`;
    document.querySelector(".navigation-buttons").remove();
    
    
    fetch("save_data.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded",
        },
        body: new URLSearchParams({
            test_type: document.title.toLowerCase(),
            score: totalScore*2.5,
        }),
    });
    

}

//Enables the next button if the user presses any radio button 
//The next button is initially disabled to prevent the user from not selecting anything before moving to the next question 
radioButtons.forEach((radio) => {
    radio.addEventListener("change", () => {
        nextButton.disabled = false;
    });
});


//In all the code where we use: if(dom object) it is to make sure it's value is not null  to avoid null pointer exception 
//Because we have a lot of html docs and one js file, it will definetly happen that an id is found in one page and not the other, and one of the dom objects would be null


//On clicking the next button, this function finds the checked radio button and fetches it's value, 
// The function then checks if this is the last question,if so it calls displayResult() otherwise it updates the question and the progress bar
if (nextButton)
    nextButton.addEventListener("click", () => {
        const selected = document.querySelector('input[name="test-option"]:checked');
        if (selected) {
            currentTest.scores[currentTest.currentQuestionIndex] = parseInt(selected.value);
            if (currentTest.currentQuestionIndex < currentTest.questions.length - 1) {
                currentTest.currentQuestionIndex++;
                updateQuestion();
                updateProgress();
            } else {
                displayResult();
            }
        }
});


//handles prevButton on click 
if (prevButton)
    prevButton.addEventListener("click", () => {
        if (currentTest.currentQuestionIndex > 0) {
            currentTest.currentQuestionIndex--;
            updateQuestion();
            updateProgress();
        }
});

//resets the index and the scores array in the current test and goes to Home.php
if(discardButton)
    discardButton.addEventListener("click", () => {
        currentTest.scores = [];
        currentTest.currentQuestionIndex = 0;
        window.location.href = "Home.php";
    });


//depending on the current page name, the alias currentTest is assigned a value one of the three test objects.
//This helps making one js code to handle all three tests without the need of copy/paste
const page = document.title.toLowerCase();
if (page.includes("anxiety")) currentTest = anxietyTest;
else if (page.includes("stress")) currentTest = stressTest;
else currentTest = depressionTest; 

if (questionText)updateQuestion(); // If questionText is not null then this is definitely one of the test pages so we cal updateQuestion()

// ============================================= */
//             End of test Section               */
// ============================================= */



// ============================================= */
//               Sign up Section                 */
// ============================================= */




//get the elements from the html doc
const forms = document.querySelectorAll('form');
const firstNameInput = document.getElementById('signup-first-name');
const lastNameInput = document.getElementById('signup-last-name');
const usernameInput = document.getElementById('signup-username');
const emailInput = document.getElementById('signup-email');
const passwordInput = document.getElementById('password-input');
const confirmPasswordInput = document.getElementById('confirm-password-input');
const signupCheckbox = document.getElementById('signup-privacy-checkbox');
const invalidFeedback = document.getElementById('invalid-confirm-password');
const signup_form = document.getElementById("signup-form")



//confirms that the value in the password feild is the same as the one in the confirm password feild 
//if valid then the function removes the .is-invalid class and adds .is-valid to make the design changes from bootstrap appear 
//This function is called every time the password feild or the confirm password feild is edited 
function confirmPassword(){
    if(passwordInput.value === confirmPasswordInput.value){
        confirmPasswordInput.classList.remove('is-invalid');
        confirmPasswordInput.classList.add('is-valid');
        invalidFeedback.style.display = 'none';
    } else {
        confirmPasswordInput.classList.add('is-invalid');
        confirmPasswordInput.classList.remove('is-valid');
        invalidFeedback.style.display = 'block';
    }
}


//Makes sure that the first name input feild only contains alphabetical characters
if (firstNameInput) 
    firstNameInput.addEventListener('input', function(event) {
        const content = event.target.value;

        if (/^[a-zA-Z]+$/.test(content)) {
            firstNameInput.classList.remove('is-invalid');
            firstNameInput.classList.add('is-valid');
        } else {
            firstNameInput.classList.add('is-invalid');
            firstNameInput.classList.remove('is-valid');
        }
    });

//Makes sure that the last name input feild only contains alphabetical characters
if (lastNameInput) 
    lastNameInput.addEventListener('input', function(event) {
        const content = event.target.value;

        if (/^[a-zA-Z]+$/.test(content)) {
            lastNameInput.classList.remove('is-invalid');
            lastNameInput.classList.add('is-valid');
        } else {
            lastNameInput.classList.add('is-invalid');
            lastNameInput.classList.remove('is-valid');
        }
    });

//Makes sure that the username is not empty 
//Another validation should be added later which is to make sure that the username isn't taken but that will be done in the backend phase
if(usernameInput)
    usernameInput.addEventListener('input',function(event){
        const content = event.target.value;
        if(content.length > 0){
            usernameInput.classList.remove('is-invalid');
            usernameInput.classList.add('is-valid');
        } else {
            usernameInput.classList.add('is-invalid');
            usernameInput.classList.remove('is-valid');
        }
    });

//Make sure the input is in email format (_@_._) where '_' is any character except space or empty string 
if(emailInput)
    emailInput.addEventListener('input',function(event){
        const content = event.target.value;
        if(/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(content)){
            emailInput.classList.remove('is-invalid');
            emailInput.classList.add('is-valid');
        } else {
            emailInput.classList.add('is-invalid');
            emailInput.classList.remove('is-valid');
        }
});


//Makes sure password is strong (contains at least 8 chars, has a number, a lowercase and uppercase letter, and a special character)
if(passwordInput)
    passwordInput.addEventListener('input',function(event){
        const content = event.target.value;
        if(/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/.test(content)){
            passwordInput.classList.remove('is-invalid');
            passwordInput.classList.add('is-valid');
        } else {
            passwordInput.classList.add('is-invalid');
            passwordInput.classList.remove('is-valid');
        }
        confirmPassword();
});

if(confirmPasswordInput)
    confirmPasswordInput.addEventListener('input',function(event){
        confirmPassword();
});

if(signupCheckbox)
    signupCheckbox.addEventListener('input',function(even){
        if(signupCheckbox.checked){
            signupCheckbox.classList.remove('is-invalid');
            signupCheckbox.classList.add('is-valid');
        }else{
            signupCheckbox.classList.add('is-invalid');
            signupCheckbox.classList.remove('is-valid');
        }
});

if(signup_form)
    signup_form.addEventListener("submit", function (e) {
        e.preventDefault();  // Prevent the form from submitting normally

        const username = usernameInput.value;
        const email = emailInput.value;

        // Make the AJAX request to check username and email availability
        fetch("check_email_username.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded"
            },
            body: `username=${encodeURIComponent(username)}&email=${encodeURIComponent(email)}`
        })
        .then(res => res.json())  // Parse the JSON response
        .then(data => {

            let isValid = true;

            // Check if the username is taken
            if (!data.username) {
                usernameInput.classList.remove("is-valid");
                usernameInput.classList.add("is-invalid");
                usernameInput.nextElementSibling.textContent = "Username is taken.";
                isValid = false;
            } else {
                usernameInput.classList.remove("is-invalid");
                usernameInput.classList.add("is-valid");
            }

            // Check if the email is taken
            if (!data.email) {
                emailInput.classList.remove("is-valid");
                emailInput.classList.add("is-invalid");
                emailInput.nextElementSibling.textContent = "Email is already registered.";
                isValid = false;
            } else {
                emailInput.classList.remove("is-invalid");
                emailInput.classList.add("is-valid");
            }

            // If both fields are valid, submit the form
            if (isValid) {
                e.target.submit();
            }
    });
});

forms.forEach(forms => {
    forms.addEventListener('submit',function(event){
        const invalidInputs = document.querySelectorAll('.is-invalid');
        if(invalidInputs.length > 0){
            event.preventDefault();
        }
    });
});




// ============================================= */
//            End of Sign up Section             */
// ============================================= */





// ============================================= */
//             Change pass Section               */
// ============================================= */

let changePassForm = document.getElementById('passwordForm');
let curPassInput = document.getElementById('old-password');



if(changePassForm){
    changePassForm.addEventListener("submit", function(e){
        e.preventDefault();

        let newPass = passwordInput.value;
        let curPass = curPassInput.value;
        

        fetch("change_password.php", {
            method: "POST",
            headers:{
                "content-Type" : "application/json"
            },
            body: JSON.stringify({
                cur_pass: curPass,
                new_pass: newPass
            })
        }).then(res => res.json()).then(data => {
            if(data.success){
                curPassInput.setAttribute("class","");
                alert("Password changed successfully");
            }else{
                curPassInput.setAttribute("class","is-invalid");
                alert("Password is incorrect");
            }
            alert(data.message);
        });
    });
}

// ============================================= */
//          End of Change pass Section           */
// ============================================= */



// ============================================= */
//                 Login Section                 */
// ============================================= */

const login_form = document.getElementById("login-form");
const login_Username = document.getElementById("login-username");
const login_password =  document.getElementById("login-password");
const login_error = document.getElementById("login-error");

login_form.addEventListener("submit", function (e) {
    e.preventDefault(); // prevent normal form submission

    const form = e.target;
    const formData = new FormData(form);


    login_error.textContent = "";
    // login_Username.classList.remove("invalid");
    // login_password.classList.remove("invalid");

    fetch("login_action.php", {
        method: "POST",
        body: formData
    })
    .then(res => res.json())
    .then(data => {
        if (data.success) {
            window.location.href = "Home.php";
        } else {
            login_error.textContent = "Invalid username or password.";
            // login_Username.classList.add("invalid");
            // login_password.classList.add("invalid");
            
        }
    })
    .catch(error => {
        console.error("Login error:", error);
    });
});

// ============================================= */
//            End of Login Section               */
// ============================================= */


