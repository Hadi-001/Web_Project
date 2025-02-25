

// This is for the frequently asked question page
// when pressing the button the answer will appear
document.querySelectorAll(".faq-question").forEach(button => {
    button.addEventListener("click", () => {
        const answer = button.nextElementSibling;
        answer.classList.toggle("active");
    });
});



// ============================================= //
//                Tests Section                  //
// ============================================= //




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
    scores:[]
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
    scores:[]
};

let stressTest = {
    questions : [
    "Over the last week, How often have you felt that you were unable to control important things in your life?",
    "Over the last week, How often have you felt confident about your ability to handle personal problems?",
    "Over the last week, How often have you felt that things were going your way?",
    "Over the last week, How often have you found that you could not cope with all the things you had to do?",
    "Over the last week, How often have you been angered because of things that were outside of your control?",
    "Over the last week, How often have you felt difficulties were piling up so high that you could not overcome them?",
    "Over the last week, How often have you felt under pressure from work or school?",
    "Over the last week, How often have you been bothered by arguments or conflicts in your relationships?",
    "Over the last week, How often have you felt overwhelmed by responsibilities?",
    "Over the last week, How often have you struggled to find time to relax?"
    ],
    currentQuestionIndex: 0,
    scores:[]
};

let currentTest;

const questionText = document.getElementById("question-text");
const prevButton = document.getElementById("prev-button");
const nextButton = document.getElementById("next-button");
const radioButtons = document.querySelectorAll('input[name="test-option"]');

function updateQuestion() {
    questionText.textContent = currentTest.questions[currentTest.currentQuestionIndex];
    prevButton.disabled = currentTest.currentQuestionIndex === 0;
    nextButton.textContent = currentTest.currentQuestionIndex === currentTest.questions.length - 1 ? "Submit" : "Next";
    radioButtons.forEach((radio) => radio.checked = false);
    nextButton.disabled = true;
}

function updateProgress() {
    let progress = ((currentTest.currentQuestionIndex + 1) / currentTest.questions.length) * 100;
    document.getElementById("progress-bar").style.width = progress + "%";
    document.getElementById("progress-bar").setAttribute("aria-valuenow", progress);
}

function displayResult() {
    const totalScore = currentTest.scores.reduce((acc, curr) => acc + curr, 0);
    document.querySelector(".test-container").innerHTML = `<h3>Your total score is: ${totalScore}</h3>`;
    document.querySelector(".navigation-buttons").remove();
}


radioButtons.forEach((radio) => {
    radio.addEventListener("change", () => {
        nextButton.disabled = false;
    });
});

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

prevButton.addEventListener("click", () => {
    if (currentTest.currentQuestionIndex > 0) {
        currentTest.currentQuestionIndex--;
        updateQuestion();
        updateProgress();
    }
});

document.getElementById("discard-button").addEventListener("click", () => {
    currentTest.scores = [];
    currentTest.currentQuestionIndex = 0;
    window.location.href = "Home.html";
});


const page = document.title.toLowerCase();
if (page.includes("depression")) currentTest = depressionTest;
if (page.includes("anxiety")) currentTest = anxietyTest;
if (page.includes("stress")) currentTest = stressTest;

updateQuestion();


// ============================================= */
//                End of Tests Section           */
// ============================================= */