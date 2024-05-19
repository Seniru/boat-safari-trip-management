#pragma once

#include <iostream>
#include "TripOption.h"

class RegisteredUser;

using namespace std;

class Trip {
    private:
        int id;
        string datetime;
        int passengersO12;
        int passengersU12;
        RegisteredUser *user;
        Location *location;
        Boat *boat;
        Facility *facilities[10];
    public:
        Trip(int pID, string pDateTime, int pPassengersO12, int pPassengersU12, RegisteredUser *pUser, Location *pLocation, Boat *pBoat);
        int getID();
        string getDateTime();
        int getPassengersO12();
        int getPassengersU12();
        RegisteredUser *getUser();
        Location *getlocation();
        Boat *getboat();
        Facility **getfacilities();
        float calculatePrice();
        void setDateTime(string newDateTime);
        void setPassengerCount(int newPU12, int newPO12);
        void setLocation(Location *newlocation);
        void setBoatType(Boat *newBoat);
        void addFacility(Facility *facility);
        ~Trip();
};
