#pragma once

#include <iostream>
#include "User.h"
#include "Package.h"
#include "Trip.h"
#include "Ticket.h"

using namespace std;

class RegisteredUser : public User {
    private:
        string phoneNumber;
        string email;

    public:
        void setPhoneNumber(string newPhoneNumber);
        void setEmail(string newEmail);
        void displayDetails();

        Trip *createTripFromPackage(Package *package, string dateTime, int passengersO12, int passengersU12);
        Trip *createTrip(string dateTime, int passengersO12, int PassengersU12);
        Trip *viewAllTrips();
        void deleteTrip(Trip *trip);

        Ticket *createTicket(string subject, string inquiryType, string message);
        Ticket *viewAllTickets();
        void deleteTicket(Ticket *ticket);

        void addReview(Trip *trip, string message, int rating);

        RegisteredUser(int userID, string username, string password) : User(userID, username, password) {}
        ~RegisteredUser();
};
