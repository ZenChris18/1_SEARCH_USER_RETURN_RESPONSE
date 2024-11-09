CREATE TABLE applicants (
    id INT AUTO_INCREMENT PRIMARY KEY,
    firstName VARCHAR(50) NOT NULL,
    lastName VARCHAR(50) NOT NULL,
    yearsOfExperience INT NOT NULL,
    specialization VARCHAR(100) NOT NULL
);


INSERT INTO applicants (firstName, lastName, yearsOfExperience, specialization) VALUES
('John', 'Smith', 12, 'Criminal Law'),
('Sarah', 'Jones', 8, 'Family Law'),
('Robert', 'Brown', 15, 'Corporate Law'),
('Emily', 'Clark', 10, 'Intellectual Property'),
('James', 'Davis', 6, 'Environmental Law'),
('Laura', 'Wilson', 7, 'Labor Law'),
('Michael', 'Garcia', 9, 'Tax Law'),
('Linda', 'Martinez', 13, 'Constitutional Law'),
('Daniel', 'Hernandez', 11, 'Immigration Law'),
('Sophia', 'Lopez', 14, 'Civil Rights');