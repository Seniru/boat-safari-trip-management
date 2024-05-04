CREATE TABLE UserTripReview (
    UserID INT,
    TripID INT,
    ReviewID INT,
    PRIMARY KEY (UserID, TripID, ReviewID),
    FOREIGN KEY (UserID) REFERENCES `User` (UserID),
    FOREIGN KEY (TripID) REFERENCES Trip(TripID),
    FOREIGN KEY (ReviewID) REFERENCES Review(ReviewID)
);
