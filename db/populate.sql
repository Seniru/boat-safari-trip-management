-- User table
INSERT INTO `User` (Gender, Email, Passworsd, DateOfBirth, PhoneNumber, FirstName, LastName) 
VALUES 
    ('male', 'john@example.com', 'password123', '1990-05-15', '1234567890', 'John', 'Doe'),
    ('female', 'jane@example.com', 'pass1234', '1988-09-20', '9876543210', 'Jane', 'Smith'),
    ('male', 'mike@example.com', 'mikepass', '1995-02-10', '5556667777', 'Mike', 'Johnson'),
    ('female', 'emily@example.com', 'emilypass', '1992-11-30', '9998887777', 'Emily', 'Brown'),
    ('male', 'alex@example.com', 'alex123', '1987-07-25', '3332221111', 'Alex', 'Wilson');

-- SystemAdmin table
INSERT INTO SystemAdmin (Name, Password)
VALUES 
    ('Admin1', 'adminpass1'),
    ('Admin2', 'adminpass2'),
    ('Admin3', 'adminpass3'),
    ('Admin4', 'adminpass4'),
    ('Admin5', 'adminpass5');

-- NewsLetterSubscriber table
INSERT INTO NewsLetterSubscriber (Email, AdminID)
VALUES 
    ('john@example.com', 1),
    ('jane@example.com', 2),
    ('mike@example.com', 3),
    ('emily@example.com', 4),
    ('alex@example.com', 5);

-- TripProvider table
INSERT INTO TripProvider (Name, Password, Gender, DateOfBirth)
VALUES 
    ('Provider1', 'providerpass1', 'M', '1980-04-12'),
    ('Provider2', 'providerpass2', 'F', '1975-10-08'),
    ('Provider3', 'providerpass3', 'M', '1990-12-25'),
    ('Provider4', 'providerpass4', 'F', '1988-07-15'),
    ('Provider5', 'providerpass5', 'M', '1970-03-30');

-- CustomerSupportAgent table
INSERT INTO CustomerSupportAgent (Name, Password, Gender, DateOfBirth)
VALUES 
    ('Agent1', 'agentpass1', 'M', '1992-06-20'),
    ('Agent2', 'agentpass2', 'F', '1995-08-15'),
    ('Agent3', 'agentpass3', 'M', '1987-11-10'),
    ('Agent4', 'agentpass4', 'F', '1980-02-05'),
    ('Agent5', 'agentpass5', 'M', '1998-04-25');

-- Ticket table
INSERT INTO Ticket (Status, Subject, InquiryType, Message, SubmittedDateTime, UserID, StaffID)
VALUES 
    ('Open', 'Payment Issue', 'Refund', 'I have not received my refund yet.', '2024-05-03 10:30:00', 1, NULL),
    ('Closed', 'Account Access Issue', 'Password Reset', 'I forgot my password and need to reset it.', '2024-05-02 14:45:00', 2, 1),
    ('Open', 'Booking Inquiry', 'Availability', 'I want to know if there are any trips available next weekend.', '2024-05-01 09:20:00', 3, NULL),
    ('Open', 'Trip Feedback', 'General', 'I had a great experience on my recent trip. Thank you!', '2024-04-30 17:10:00', 4, NULL),
    ('Closed', 'Cancellation Request', 'Refund', 'I need to cancel my trip and get a refund.', '2024-04-29 12:00:00', 5, 2);

-- Location table
INSERT INTO Location (LocationID, LocationName)
VALUES 
    (1, 'Beachside Cove'),
    (2, 'Lakeview Harbor'),
    (3, 'Riverfront Retreat'),
    (4, 'Mountain Hideaway'),
    (5, 'Island Paradise');

-- BoatType table
INSERT INTO BoatType (BoatTypeID, BoatTypeName)
VALUES 
    (1, 'Speedboat'),
    (2, 'Yacht'),
    (3, 'Catamaran'),
    (4, 'Fishing Boat'),
    (5, 'Kayak');

-- Trip table
INSERT INTO Trip (DateTime, PassengersOver12, PassengersUnder12, PaymentAmoount, PaymentMode, UserID, StaffID, LocationID)
VALUES 
    ('2024-05-10 09:00:00', 2, 1, 250.00, 'Credit Card', 1, NULL, 1, 1),
    ('2024-05-12 14:30:00', 4, 3, 500.00, 'PayPal', 2, NULL, 2, 2),
    ('2024-05-15 11:45:00', 3, 2, 400.00, 'Credit Card', 3, NULL, 3, 3),
    ('2024-05-18 10:00:00', 5, 0, 600.00, 'Credit Card', 4, NULL, 4, 4),
    ('2024-05-20 13:00:00', 1, 0, 150.00, 'Cash', 5, NULL, 5, 5);

-- TripFacilities table
INSERT INTO TripFacilities (TripID, Facility)
VALUES 
    (1, 'Snorkeling Gear'),
    (2, 'Buffet Lunch'),
    (3, 'Fishing Equipment'),
    (4, 'Scuba Diving Gear'),
    (5, 'Kayak Rental');

-- Package table
INSERT INTO Package (PackageID, PackageName, LocationID, BoatTypeID)
VALUES 
    (1, 'Adventure Package', 1, 1),
    (2, 'Luxury Cruise', 2, 2),
    (3, 'Family Retreat', 3, 3),
    (4, 'Nature Exploration', 4, 4),
    (5, 'Island Getaway', 5, 5);

-- PackageFacilities table
INSERT INTO PackageFacilities (PackageID, Facility)
VALUES 
    (1, 'Guided Tour'),
    (2, 'Gourmet Dinner'),
    (3, 'Kids Activities'),
    (4, 'Hiking Trails'),
    (5, 'Beach Bonfire');

-- Review table
INSERT INTO Review (ReviewID, Rating, Content, UserID)
VALUES 
    (1, 5, 'Absolutely loved the trip! Amazing experience overall.', 1),
    (2, 4, 'Great service and beautiful location.', 2),
    (3, 3, 'Good trip, but could have been better.', 3),
    (4, 5, 'Exceeded my expectations. Will definitely come back!', 4),
    (5, 4, 'Had a fantastic time with family. Highly recommended.', 5);

-- UserTripReview table
INSERT INTO UserTripReview (UserID, TripID, ReviewID)
VALUES 
    (1, 1, 1),
    (2, 2, 2),
    (3, 3, 3),
    (4, 4, 4),
    (5, 5, 5);

-- Notification table
INSERT INTO Notification (NotificationID, Message, `Read`, UserID)
VALUES 
    (1, 'Your trip reservation is confirmed. Enjoy your adventure!', 0, 1),
    (2, 'New package deals available. Check them out now!', 0, 2),
    (3, 'Reminder: Your trip is scheduled for tomorrow. Please arrive on time.', 0, 3),
    (4, 'Thank you for your feedback! We appreciate your input.', 1, 4),
    (5, 'Exclusive offer for loyal customers. Book now and save!', 0, 5);
