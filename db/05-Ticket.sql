CREATE TABLE Ticket(
   TicketID INT AUTO_INCREMENT,
   Status VARCHAR(6) NOT NULL,
   Subject VARCHAR(30) NOT NULL,
   InquiryType VARCHAR(15) NOT NULL,
   Message VARCHAR(200) NOT NULL,
   SubmittedDateTime DATETIME NOT NULL,
   UserID INT NOT NULL,
   StaffID INT ,
   PRIMARY KEY (TicketID),
   FOREIGN KEY (UserID) REFERENCES `User` (UserID),
   FOREIGN KEY (StaffID) REFERENCES CustomerSupportAgent (StaffID)
);
