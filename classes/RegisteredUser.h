#pragma once

#include <iostream>
#include "User.h"
#include "Package.h"
#include "Trip.h"
#include "Ticket.h"

using namespace std;

class RegisteredUser : public User {
    private:
        int userID;
        string phoneNumber;
        string dob;
        string email;
        int gender;

    public:

        int getUserID();
        void setPhoneNumber(string newPhoneNumber);
        void setDOB(string newDOB);
        void setEmail(string newEmail);
        void setGender(int newGender);
        void displayDetails();

        Trip createTripFromPackage(Package package, string dateTime, int passengersO12, int passengersU12);
        Trip createTrip(string dateTime, int passengersO12, int PassengersU12);
        Trip *viewAllTrips();
        void deleteTrip(Trip trip);

        Ticket createTicket(string subject, string message, int inquiryType);
        Ticket *viewAllTickets();
        void deleteTicket(Ticket ticket);

        void addReview(Trip trip, string message, int rating);

        RegisteredUser(int userID, string username, string password) : User(userID, username, password) {}
};
