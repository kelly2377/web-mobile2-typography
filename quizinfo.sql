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
(2,'What did ancient civilizations use for communication before speaking?'),
(2,'Who created the first alphabet?'),
(2,'What contribution did the Romans make to the evolution of the alphabet that is still used today?'),
(2,'What are some examples of phonograms that were created by the phoenicians that are still used today?'),
(2,'During the middle ages, how were manuscripts and books created?');

-- Answers table and data insertion
CREATE TABLE answers(
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    question_id int NOT NULL,
    answer TEXT NOT NULL,
    is_correct TINYINT(1) NOT NULL DEFAULT 0,
    FOREIGN KEY (question_id) REFERENCES questions(id) ON DELETE CASCADE ON UPDATE CASCADE
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO answers(question_id,answer,is_correct) VALUES
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
(5,'Through a typewriter',0);

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