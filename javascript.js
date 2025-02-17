

// This is for the frequently asked question page
// when pressing the button the answer will appear
document.querySelectorAll(".faq-question").forEach(button => {
    button.addEventListener("click", () => {
        const answer = button.nextElementSibling;
        answer.style.display = answer.style.display === "block" ? "none" : "block";
    });
});
