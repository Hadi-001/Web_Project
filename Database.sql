/*This table contains the information of the users that is gathered
form the signup page*/

CREATE TABLE ACCOUNT (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(40) NOT NULL UNIQUE,
    password VARCHAR(40) NOT NULL,
    firstname VARCHAR(40) NOT NULL,
    lastname VARCHAR(40) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE
);

CREATE TABLE ARTICLE (
    id INT AUTO_INCREMENT PRIMARY KEY,
    article_title VARCHAR(200) NOT NULL,
    author_image VARCHAR(200) NOT NULL,
    discription VARCHAR(1024) NOT NULL
)
