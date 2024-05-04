CREATE TABLE Trip (
    TripID INT AUTO_INCREMENT,
    DateTime DATETIME NOT NULL,
    PassengersOver12 INT NOT NULL,
    PassengersUnder12 INT NOT NULL,
    PaymentAmoount FLOAT NOT NULL,
    PaymentMode VARCHAR(15) NOT NULL,
    UserID INT NOT NULL,
    StaffID INT,
    LocationID INT NOT NULL,
    BoatTypeID INT NOT NULL,
    PRIMARY KEY (TripID),
    FOREIGN KEY (LocationID) INT NOT NULL,
    FOREIGN KEY (BoatTypeID) INT NOT NULL
);