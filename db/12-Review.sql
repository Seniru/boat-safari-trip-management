CREATE TABLE Review (
    ReviewID INT PRIMARY KEY,
    Rating INT,
    Content TEXT,
    UserID INT,
    FOREIGN KEY (UserID) REFERENCES `User` (UserID)
);