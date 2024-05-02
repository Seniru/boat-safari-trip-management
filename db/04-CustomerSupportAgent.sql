CREATE TABLE CustomerSupportAgent (
    StaffID INT,
    Name VARCHAR(15) NOT NULL,
	Password VARCHAR(15) NOT NULL,
	Gender VARCHAR(1) NOT NULL,
	DateOfBirth DATE NOT NULL,
    PRIMARY KEY (StaffID)

);