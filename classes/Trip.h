#pragma once

#include <iostream>
#include "RegisteredUser.h"

using namespace std;

class Trip {
    private:
        int id;
        string datetime;
        int passengersO12;
        int passebgersU12;
        RegisteredUser *user;
        Location Location;
        Boat boat;
        Facility Facility[];
    public:
        int getID();
        string DateTime();
        int getPassengersO12();
        int getPassengersU12();
        RegisteredUser *getUser();
        Location getlocation();
        Boat getboat();
        Facility *getfacilities();
        float calculatePrice();
        void setDateTime(string newDateTime);
        void setPassengerCount(int newPU12,int newPO12);
        void setLocatin(Location *newlocation);
        void setBoatType(Boat *newBoat);
        void addFacility(Facility *facility);
        Trip()     



};
