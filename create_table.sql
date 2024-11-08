CREATE TABLE students (
	id int NOT NULL AUTO_INCREMENT,
    student_name varchar(100),
    roll_number int,
    mobile varchar(15),
    email varchar(100),
    PRIMARY KEY (id),
    UNIQUE (roll_number,email)
);
