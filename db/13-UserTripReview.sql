CREATE TABLE UserTripReview (
    UserID INT,
    TripID INT,
    ReviewID INT,
    PRIMARY KEY (UserID),
    FOREIGN KEY (UserID) REFERENCES `User` (UserID),
    FOREIGN KEY (TripID) REFERENCES Trip(TripID),
    FOREIGN KEY (ReviewID) REFERENCES Review(ReviewID)
);
