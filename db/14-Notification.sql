CREATE TABLE Notification (
    NotificationID INT AUTO_INCREMENT,
    Message TEXT,
    `Read` BOOLEAN,
    UserID INT,
    FOREIGN KEY (UserID) REFERENCES `User` (UserID)
);
