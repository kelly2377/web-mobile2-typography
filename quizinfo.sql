-- Quiz table and data insertion
CREATE TABLE quiz(
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    quiz_title varchar(150) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO quiz(quiz_title)
VALUES('Introduction to Typography Quiz'),
('Origins and Evolution Quiz'),
('Modern Research and Discoveries Quiz'),
('Typography Elements Quiz'),
('Principles of Typography Quiz'),
('Typography Applications Quiz'),
('Uses of Typography Quiz'),
('Typographers Quiz');

-- Questions table and data insertion
CREATE TABLE questions(
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    quiz_id int NOT NULL,
    question_prompt TEXT NOT NULL,
    FOREIGN KEY (quiz_id) REFERENCES quiz(id) ON DELETE CASCADE ON UPDATE CASCADE
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO questions(quiz_id,question_prompt) VALUES
-- quiz 2 questions
(2,'What did ancient civilizations use for communication before speaking?'),
(2,'Who created the first alphabet?'),
(2,'What contribution did the Romans make to the evolution of the alphabet that is still used today?'),
(2,'What are some examples of phonograms that were created by the phoenicians that are still used today?'),
(2,'During the middle ages, how were manuscripts and books created?'),

-- quiz 6 questions
(6, "How do you make a poster's main message stand out?"),
(6, 'What makes a t-shirt typography design effective?'),
(6, 'Is the font sans-serif preferred for apps and websites'),
(6, 'What is the first step in picking a logo typeface?'),
(6, 'How should text be organized on product packaging?');

-- Answers table and data insertion
CREATE TABLE answers(
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    question_id int NOT NULL,
    answer TEXT NOT NULL,
    is_correct TINYINT(1) NOT NULL DEFAULT 0,
    FOREIGN KEY (question_id) REFERENCES questions(id) ON DELETE CASCADE ON UPDATE CASCADE
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO answers(question_id,answer,is_correct) VALUES
-- quiz 2 multiple choices and correct answers
(1, 'Symbols', 0),
(1, 'Hieroglyphs',0),
(1, 'Pictograms',0),
(1,'All of the above', 1),

(2,'Egyptians',0),
(2,'Phoenicians',1),
(2,'Romans', 0),
(2,'Scribes',0),

(3,'Informal Scripts',0),
(3,'Formal Scripts',0),
(3,'Uppercase alphabet',1),
(3,'All of the above',0),

(4,'Percentage (%)',0),
(4,'Number (#)',0),
(4,'And (&)',0),
(4,'Choices A and B',1),

(5,'Through modern printing',0),
(5,'Created by hand by scribes',1),
(5,'Through a computer',0),
(5,'Through a typewriter',0),

-- quiz 6 multiple choices and correct answers
(6, 'Use hierarchy by making the headline big and bold and surround it by whitespace', 1),
(6, 'Use small letters and put it in the center of the poster', 0),
(6, "Use hierarchy by making the headline small and light and don't surround it by white space", 0),
(6, 'All of the above', 0),

(7, "Make sure that it's simple with only one main message a plain background and plenty of whitespace",1),
(7, 'Have multiple messages', 0),
(7, 'Use an image as the background', 0),
(7, 'Choice A and B', 0),

(8, 'True', 1),
(8, 'False', 0),

(9, 'Just start and see where it leads you', 0),
(9, "Understand the brand's values, industry and descriptive adjectives", 1),
(9, "Understand the brand's values first before doing anything else", 0),
(9, 'None of the above', 0),

(10, 'Put the brand name on the back and it should be smaller and the ingredients on the front', 0),
(10, 'Put the brand name on the front and smaller readable details such as ingredients on the back', 1),
(10, 'Both a and b', 0),
(10, 'None of the above', 0);


-- users table and data insertion
CREATE TABLE users(
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name varchar(50) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- user_results table and data insertion
CREATE TABLE user_results(
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    user_id int NOT NULL,
    quiz_id int NOT NULL,
    score int NOT NULL,
    date_quiz_taken DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (quiz_id) REFERENCES quiz(id) ON DELETE CASCADE ON UPDATE CASCADE
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- user_responses table and data insertion
CREATE TABLE user_answers(
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    user_id int NOT NULL,
    question_id int NOT NULL,
    answer_id int NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (question_id) REFERENCES questions(id) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (answer_id) REFERENCES answers(id) ON DELETE CASCADE ON UPDATE CASCADE
)ENGINE=InnoDB DEFAULT CHARSET=latin1;