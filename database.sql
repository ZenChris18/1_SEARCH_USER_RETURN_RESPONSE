CREATE TABLE applicants (
    id INT AUTO_INCREMENT PRIMARY KEY,
    firstName VARCHAR(100) NOT NULL,
    lastName VARCHAR(100) NOT NULL,
    yearsOfExperience INT NOT NULL,
    specialization VARCHAR(100) NOT NULL,
    barMembershipNumber VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    favoriteLegalField VARCHAR(100) DEFAULT NULL,
    preferredCourt VARCHAR(100) DEFAULT NULL,
    bio TEXT DEFAULT NULL
);


INSERT INTO applicants (firstName, lastName, yearsOfExperience, specialization, barMembershipNumber, email, favoriteLegalField, preferredCourt, bio)
VALUES
('John', 'Doe', 8, 'Criminal Law', '12345AB', 'john.doe@example.com', 'Criminal Defense', 'Superior Court', 'Experienced criminal defense lawyer with a passion for justice.'),
('Jane', 'Smith', 5, 'Corporate Law', '67890XY', 'jane.smith@example.com', 'Business Law', 'District Court', 'Skilled corporate lawyer with expertise in mergers and acquisitions.'),
('Michael', 'Brown', 12, 'Family Law', '11223CD', 'michael.brown@example.com', 'Child Custody', 'Family Court', 'Dedicated family law attorney focused on child custody cases.'),
('Emily', 'White', 3, 'Intellectual Property Law', '44556EF', 'emily.white@example.com', 'Patent Law', 'Patent Court', 'Passionate about helping innovators protect their intellectual property.'),
('David', 'Johnson', 7, 'Personal Injury Law', '78901GH', 'david.johnson@example.com', 'Motor Vehicle Accidents', 'Civil Court', 'Experienced in representing victims of personal injury claims in motor vehicle accidents.');
