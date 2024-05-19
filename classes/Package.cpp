#include <iostream>
#include "Package.h"
using namespace std;

Package::Package(int pid, string pName, float pPrice, Boat *pBoatType, Location *pLocation) {
    packageID = pid;
    packageName = pName;
    packagePrice = pPrice;
    boatType = pBoatType;
    location = pLocation;
    cout << "Created a package instance!" << endl;
}

int Package::getPackageID() {
    return packageID;
}

string Package::getPackageName() {
    return packageName;
}

float Package::getPackagePrice() {
    return packagePrice;
}

Boat *Package::getBoat() {
    return boatType;
}

Location *Package::getLocation() {
    return location;
}

Facility **Package::getPackageFacilities() {
    return facilities;
}

Trip *Package::createTrip() {
    // ...
    Trip *trip;
    return trip;
}

void Package::addFacility(Facility *facility) {
    // ...
}

void Package::setPackageDetails(string pName, float pPrice, Boat *pBoatType, Location *pLocation) {
    // ...
}

void Package::displayPackageDetails() {
    // ...
}

Package::~Package() {
    cout << "Deleted package instance." << endl;
}