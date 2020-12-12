CREATE DATABASE SchoolDB;

USE SchoolDB;

CREATE TABLE Student (
	student_id INT AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    pass_word VARCHAR(30) NOT NULL,
    balance INT DEFAULT 0
);

CREATE TABLE Admin (
	admin_id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(50),
    pass_word varchar(30) NOT NULL
);

CREATE TABLE Student_Log (
	class_id INT,
    student_id INT,
    attendance_number INT AUTO_INCREMENT PRIMARY KEY,
    attendance_points INT,
    timedate TIME
);

INSERT INTO Student (firstname, lastname, email, pass_word)
VALUES ('John', 'Doe', 'Johndoe@email.com', 'test123');

Select * FROM Student;