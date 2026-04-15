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
    FOREIGN KEY (quiz_id) REFERENCES quiz(id)
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Answers table and data insertion
CREATE TABLE answers(
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    question_id int NOT NULL,
    answer TEXT NOT NULL,
    is_correct BOOLEAN,
    FOREIGN KEY (question_id) REFERENCES questions(id)
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (quiz_id) REFERENCES quiz(id)
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- user_responses table and data insertion
CREATE TABLE users_answers(
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    user_id int NOT NULL,
    question_id int NOT NULL,
    answer_id int NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (question_id) REFERENCES questions(id),
    FOREIGN KEY (answer_id) REFERENCES answers(id)
)ENGINE=InnoDB DEFAULT CHARSET=latin1;