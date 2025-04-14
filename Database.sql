/* This table contains the information of the users gathered from the signup page */

CREATE TABLE ACCOUNT (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    firstname VARCHAR(40) NOT NULL,
    lastname VARCHAR(40) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE
);

CREATE TABLE ARTICLE (
    id INT AUTO_INCREMENT PRIMARY KEY,
    article_title VARCHAR(200) NOT NULL,
    author_image VARCHAR(200) NOT NULL,
    article_description VARCHAR(1024) NOT NULL,
    article_link VARCHAR(1024) NOT NULL
);

CREATE TABLE FEEDBACK(
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    message VARCHAR(2048) NOT NULL
);

CREATE TABLE FAQ(
    id INT AUTO_INCREMENT PRIMARY KEY,
    question VARCHAR(1024) NOT NULL,
    answer VARCHAR(4096) NOT NULL
);


INSERT INTO ARTICLE(article_title, author_image, article_description, article_link)VALUES 
('Ways to Manage Stress', 'Images/felson_sabrina_382x382.png', 'Learn practical techniques to reduce stress and improve your mental health.', 'https://www.webmd.com/balance/stress-management/stress-management'),
('The Power of Mindfulness', 'Images/where_garey.jpg', 'Discover how mindfulness can help you stay present and manage anxiety.', 'https://www.danabehavioralhealth.org/the-power-of-mindfulness-techniques-and-benefits-for-mental-health/#:~:text=Mindfulness%20is%20a%20powerful%20tool,and%20peace%20in%20your%20life.'),
('Sleep tips: 6 steps to better sleep', 'Images/sandhya-pruthi-11254262.png', 'Learn practical techniques to reduce stress and improve your mental health.', 'https://www.mayoclinic.org/healthy-lifestyle/adult-health/in-depth/sleep/art-20048379');


INSERT INTO FAQ (question, answer) VALUES
('What information do you collect?', 'We collect minimal personal data, such as email addresses, only for communication and support purposes.'),
('Do you use cookies?', 'Yes, we use basic cookies to enhance user experience. You can disable them in your browser settings.'),
('How is my data protected?', 'We implement security measures like encryption and access controls to protect your data.'),
('What is my privacy policy?', 'Our privacy policy ensures that we collect minimal user data and do not share it with third parties.'),
('How do I contact support?', 'You can contact support by emailing us at <a class="email-link-style" href="mailto:mindfuljournaling@gmail.com">mindfuljournaling@gmail.com</a>.'),
('Can I delete my data?', 'Yes, you can request data deletion by reaching out to us.');
