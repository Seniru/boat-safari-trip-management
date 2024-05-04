CREATE TABLE Review (
    ReviewID INT AUTO_INCREMENT,
    Rating INT,
    Content TEXT,
    UserID INT,
    PRIMARY KEY (ReviewID)
    FOREIGN KEY (UserID) REFERENCES `User` (UserID)
);