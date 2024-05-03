CREATE TABLE Notification (
    NotificationID INT PRIMARY KEY,
    Message TEXT,
    `Read` BOOLEAN,
    UserID INT,
    FOREIGN KEY (UserID) REFERENCES `User` (UserID)
);
