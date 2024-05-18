#pragma once

#include "User.h"

class TripProvider : public User {
    public:
       void approveTrip(Trip *trip);
       Trip *getOngoingTrips();
       string *getTripDates();

       TripProvider(int userID, string username , string password) : User(userID , username , password){}
       ~TripProvider();

};
