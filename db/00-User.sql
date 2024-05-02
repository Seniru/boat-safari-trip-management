CREATE TABLE User (
    UserID INT AUTO_INCREMENT,
    Gender ENUM("male", "female") NOT NULL,
    Email VARCHAR(75) NOT NULL,
    Password VARCHAR(30) NOT NULL,
    DateOfBirth DATE NOT NULL,
    PhoneNumber CHAR(10) NOT NULL,
    FirstName VARCHAR(15) NOT NULL,
    LastName VARCHAR(15) NOT NULL,
    PRIMARY KEY (UserID)
);
