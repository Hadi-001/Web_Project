# **Web_Project**

This is the project for the web course **CSC 443**  
**Team:** Adeeb Boumoghlbey, Hadi Shayya, Karam Alsaify  

This project is supposed to be made out of about **15 HTML pages**. The functionality of this website is assisting people to regulate and healthily deal with their **mental health**.

Almost all the content and material of the website (**not the code but the information**) is generated by **ChatGPT**.

---

## **Header > Nav-Bar:**

This component is found in almost every page (**not found in login, signup, or tests pages**) and in all of them, it looks and functions the same.

This component is from **Bootstrap**, but adjustments in the **HTML and CSS** were made to:
- Change the color to **light blue**
- Prevent elements from **overflowing** (at the screen size where elements overflow and the menu is not in mobile drop-down style yet, the margin of the links inside the nav-bar is changed from `15px` to `7px`)

---

## **Footer:**

This component is found in almost all pages (**not found in login, signup, or tests pages**) and contains basic information and links to the **FAQ page** and the **Privacy & Terms** page.

---

## **index.html:**

This is the **login page**. It has a form that contains the **username** and **password** input fields for the user to log in if they have an account. Otherwise, there is a **Sign Up** button that takes the user to the **sign-up page** to create an account.

In the **backend phase**, validations will be added to the **username** and **password** fields to ensure they come from a valid account.

---

## **signup.html:**

This page allows the user to **create an account**.
- It has a **form** that takes the user's information (**first name, last name, username, email, password**) and locally **validates** all fields before allowing the user to proceed.
- The user **must accept** the **Privacy & Terms** checkbox before proceeding (they can view Privacy & Terms from the link next to the checkbox).

In the **backend phase**, the form needs to be further validated to ensure that the **chosen username isn’t already taken**.

**Note:** Page uses **Bootstrap** for form validation styles and responsiveness.

---

## **Home.html:**

This is the **home page** of the website. It contains buttons that navigate to various pages:
- **Explore More** → Takes the user to the **Articles** page.
- **Learn More** → Takes the user to the **About Us** page.
- **Tests Section** → Contains three buttons, each directing the user to a specific test (**Depression, Anxiety, or Stress Test**).

Other sections:
- **Testimonials Section** → Displays words of inspiring users of the website.
- **Header and Footer** → As described at the beginning of the document.

---

## **articles.html:**

This page contains **different articles** discussing various **mental health issues**. It shows the **author of the article**, a **short description**, and a **link to read the full article**.

- Uses **Flexbox** for alignment and **Bootstrap** for the nav-bar in the header (described at the beginning of the document).
- In the **backend phase**, the articles and their information (**link, author info, author pic**) will be **loaded from the backend server**.

---

## **anxietyTest.html, depressionTest.html, stressTest.html:**

These pages contain **tests** to check for **anxiety, depression, or stress** the user might have.
- Each test has **10 questions**, and each question has **4 choices** for the user to select from.
- After completion, the page **displays the user's result** and provides a **button** to access a **recommendations page**.

In the **backend phase**, test questions could be **loaded from the backend server**.

**Note:** Page uses **Bootstrap** for responsiveness.

---

## **profile.html:**

This page contains **two major sections**:
1. **Profile Information** → Displays user info (**name, username, email**) and a **form to change password**.
   - The password form validates the **new password** using JavaScript (at least **8 characters**, including **uppercase, lowercase, number, and special character**).
2. **User Progress Tracker** → Displays **three graphs** showing the user's **test progress**.

- Uses **header (nav-bar)** and **footer** as described earlier.
- In the **backend phase**, user information and test progress (**last 10 scores**) will be **obtained from the backend**.

---

## **Diseases.html:**

This page contains a list of **diseases** (**currently two**) with a **short description** and a **button** for each that leads to a detailed **disease page**.

- Uses **header (nav-bar)** and **footer** as described earlier.
- In the **backend phase**, disease information will be **obtained from the backend**.

---

## **Anxiety-Symptoms.html, Depression-Symptoms.html:**

These pages are **only accessible** from **Diseases.html**.
- Clicking **'Learn More'** on a disease in **Diseases.html** navigates to its **Symptoms Page**.
- Contains:
  - **List of symptoms** of the disease.
  - **YouTube video** explaining the disease.

- Uses **header (nav-bar)** and **footer** as described earlier.
- In the **backend phase**, symptoms pages will be **generated dynamically** based on backend data.

---

## **AboutUs.html:**

This page provides:
- **Brief information** about the **website’s targets and goals**.
- **Benefits** of using the website.

- Uses **header (nav-bar)** and **footer** as described earlier.

---

## **contactUs.html:**

This page contains:
- **Contact information** (**email, address, phone number, social media links**).
- **A form** to collect user inquiries (with a text area for messages).

- Uses **header (nav-bar)** and **footer** as described earlier.

---

## **privacy&terms.html:**

This page outlines the **Privacy Policy** and **Terms of Use** for the **Mindful Journaling** website, detailing how **personal data** is collected, used, and protected, as well as the rules for using the site.
- Can be accessed from the **`footer`** found on most pages of the website.

- Uses **header (nav-bar)** and **footer** as described earlier.


---

## **FAQ.html**

This page contains: 

- **Frequently asked questions.** It uses **JavaScript** to show the FAQs in accordion style.

- Uses **header (nav-bar)** and **footer** as described earlier.


In the **backend phase**, the questions and answers could be loaded from the server.

---

## **anxietyRecommendation.html:**

This page provides **tips** for managing **anxiety**, along with an **inspirational quote**.
- Can be accessed from the **`Recommendations section`** in the **navigation menu** or **directly from anxietyTest.html** after test completion.

- Uses **header (nav-bar)** and **footer** as described earlier.

---

## **stressRecommendation.html:**

This page provides **tips** for managing **stress**, along with a **motivational quote**.
- Includes a **breathing exercise** feature with **JavaScript** to guide relaxation.
- Can be accessed from the **`Recommendations section`** in the **navigation menu**.

- Uses **header (nav-bar)** and **footer** as described earlier.


--- 

## **depressionRecommendation.html:**

This page provides **tips** for managing **depression**, along with an **inspirational quote**.
- Can be accessed from the **`Recommendations section`** in the **navigation menu** or **directly from anxietyTest.html** after test completion.

- Uses **header (nav-bar)** and **footer** as described earlier.

---

## Live Demo

You can try the website live here: [Live Demo](https://hadi-001.github.io/Web_Project)