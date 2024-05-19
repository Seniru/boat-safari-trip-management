#pragma once

#include <iostream>
#include "Trip.h"
#include "TripOption.h"

using namespace std;

class Package {
    private:
        int packageID;
        string packageName;
        float packagePrice;
        Boat *boatType;
        Location *location;
        Facility *facilities[10];
    public:
        Package(int pid, string pName, float pPrice, Boat *pBoatType, Location *pLocation);
        int getPackageID();
        string getPackageName();
        float getPackagePrice();
        Boat *getBoat();
        Location *getLocation();
        Facility **getPackageFacilities();
        Trip *createTrip();
        void addFacility(Facility *facility);
        void setPackageDetails(string pName, float pPrice, Boat *pBoatType, Location *pLocation);
        void displayPackageDetails();
        ~Package();
};
