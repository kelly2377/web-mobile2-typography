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

-- quiz 4 questions
(4, 'What is the main difference between a font and a typeface?'),
(4, 'Which of the following is NOT one of the common typeface categories mentioned?'),
(4, 'What does kerning refer to?'),
(4, 'What is leading (line height)?'),
(4, 'What is tracking?'),
(4, 'Why is white space important in design?'),
(4, 'What does visual hierarchy help users do?'),

-- quiz 5 questions
(5, 'What is the difference between legibility and readability?'),
(5, 'What helps achieve both legibility and readability?'),
(5, 'Why is consistency important in typography?'),
(5, 'What is a key risk of using too many fonts?'),
(5, 'What does contrast in typography involve?'),
(5, 'What is the purpose of repetition in design?'),
(5, 'What does alignment help achieve in typography?'),

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

-- quiz 4 multiple choices and correct answers
(11, 'A font is a family of typefaces, while a typeface is a single style', 0),
(11, 'A font is a single graphical representation, while a typeface is a family of related fonts', 1),
(11, 'They are the same thing', 0),
(11, 'A typeface only refers to digital text while font refers to all characters', ),

(12, 'Serif', 0),
(12, 'Sans-serif', 0),
(12, 'Handwriting', 1),
(12, 'Decorative', 0),

(13, 'The space between lines of text', 0),
(13, 'The spacing between individual characters', 1),
(13, 'The color of text', 0),
(13, 'The size of a font family', 0),

(14, 'The width of letters in a word', 0),
(14, 'The spacing between characters', 0),
(14, 'The thickness of a font', 0),
(14, 'The vertical space between lines of text', 1),

(15, 'Adjusting space between all characters uniformly', 1),
(15, 'Changing the font style of text', 0),
(15, 'Increasing space between paragraphs only', 0),
(15, 'Adjusting the color contrast of text', 0),

(16, 'It makes text larger', 0),
(16, 'It fills empty areas with decoration', 0),
(16, 'It improves readability and creates a clean layout', 1),
(16, 'It replaces the need for headings', 0),

(17, 'Recognize how information is structured and navigate content easily', 1),
(17, 'Choose font colors', 0),
(17, 'Increase text spacing automatically', 0),
(17, 'Replace typography rules', 0),

-- quiz 5 multiple choices and correct answers
(18, 'Legibility is about layout, readability is about font style', 0),
(18, 'Legibility is how easily individual characters are distinguished, readability is how easily text is understood', 1),
(18, 'They both mean the same thing', 0),

(19, 'Using decorative fonts and multiple colors', 0),
(19, 'Using small text with high density', 0),
(19, 'Clear fonts, proper spacing, and sufficient contrast', 1),
(19, 'Avoiding hierarchy in design', 0),

(20, 'It makes text longer', 0),
(20, 'It prevents confusion and helps users recognize patterns', 1),
(20, 'It removes the need for headings', 0),
(20, 'It increases the number of fonts used', 0),

(21, 'It creates confusion and reduces cohesion', 1),
(21, 'It improves readability', 0),
(21, 'It decreases contrast', 0),
(21, 'It makes text more legible', 0),

(22, 'Using only one font style', 0),
(22, 'Adjusting spacing between letters', 0),
(22, 'Varying size, weight, color, or typeface to create distinction', 1),
(22, 'Aligning text to the center only', 0),

(23, 'To make text longer', 0),
(23, 'To remove hierarchy', 0),
(23, 'To reinforce structure and create visual unity', 1),
(23, 'To increase font variety', 0),

(24, 'Random positioning of elements', 0),
(24, 'A more colorful layout', 0),
(24, 'Larger font sizes automatically', 0),
(24, 'Structured placement that improves readability and visual balance', 1),


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