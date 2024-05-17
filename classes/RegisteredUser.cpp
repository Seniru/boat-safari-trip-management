#include <iostream>
#include "User.h"
#include "RegisteredUser.h"
#include "Trip.h"
#include "Ticket.h"
#include "Package.h"

using namespace std;

RegisteredUser::~RegisteredUser() {
    cout << "Deleted registered user instance." << endl;
}

void RegisteredUser::setPhoneNumber(string newPhoneNumber) {
    phoneNumber.assign(newPhoneNumber);
}

void RegisteredUser::setEmail(string newEmail) {
    email.assign(newEmail);
}

void RegisteredUser::displayDetails() {
    // ...
}

Trip *RegisteredUser::createTripFromPackage(Package *package, string dateTime, int passengersO12, int passengersU12) {
    // ...
    Trip *trip;
    return trip;
}

Trip *RegisteredUser::createTrip(string dateTime, int passengersO12, int PassengersU12) {
    // ...
    Trip *trip;
    return trip;
}

Trip *RegisteredUser::viewAllTrips() {
    // ...
    Trip *trips;
    return trips;
}

void RegisteredUser::deleteTrip(Trip *trip) {
    // ...
}

Ticket *RegisteredUser::createTicket(string subject, string inquiryType, string message) {
    // ...
    Ticket *ticket;
    return ticket;
}

Ticket *RegisteredUser::viewAllTickets() {
    // ...
    Ticket *tickets;
    return tickets;
}

void RegisteredUser::deleteTicket(Ticket *ticket) {
    // ...
}

void RegisteredUser::addReview(Trip *trip, string message, int rating) {
    // ...
}
