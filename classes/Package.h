#pragma once

#include<iostream>
#include "Trip.h"

using namespace std;

class Package {
     private:
         int packageID;
         string packageName;
         float packagePrice;
         string facilities;
         string boatType;
     public:
         Package(int pid, string pName, float pPrice, string pFacilities, string pBoatType);
         void setPackageDetails(string pName, float pPrice);
         void displayPackageDetails();
         ~Package();
};
