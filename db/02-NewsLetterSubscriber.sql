CREATE TABLE NewsLetterSubscriber (
    Email VARCHAR(50),
    AdminID INT NOT NULL,
    PRIMARY KEY (Email),
    FOREIGN KEY (AdminID) REFERENCES SystemAdmin (AdminID)
);
