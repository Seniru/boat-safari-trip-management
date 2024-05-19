#include "TripOption.h"
#include "Trip.h"
#include "RegisteredUser.h"

using namespace std;

Trip::Trip(int pID, string pDateTime, int pPassengersO12, int pPassengersU12, RegisteredUser *pUser, Location *pLocation, Boat *pBoat) {
    id = pID;
    datetime = pDateTime;
    passengersO12 = pPassengersO12;
    passengersU12 = pPassengersU12;
    user = pUser;
    location = pLocation;
    boat = pBoat;
    cout << "Created a trip instance! [ID: " << id << "]" << endl;
}

Trip::~Trip() {
    cout << "Deleted trip instance." << endl;
}

int Trip::getID(){
    return id;
}

string Trip::getDateTime(){
    return datetime;
}

int Trip::getPassengersU12(){
    return passengersU12;
}

int Trip::getPassengersO12(){
    return passengersO12;
} 

RegisteredUser *Trip::getUser(){
    return user;
}

Location *Trip::getlocation(){
    return location;
}

Boat *Trip::getboat(){
    return boat;
}

Facility **Trip::getfacilities(){
    return facilities;
}

float Trip::calculatePrice(){
    // ...
    return 0;
}


void Trip::setDateTime(string pDateTime){
    datetime = pDateTime;
}

void Trip::setPassengerCount(int PnewPU12 , int PnewPO12){
    passengersU12 = PnewPU12;
    passengersO12 = PnewPO12;
}


void Trip::setLocation(Location *newlocation){
    //..
}

void Trip::setBoatType(Boat *newBoat){
    //..
}

void Trip::addFacility(Facility *facility){
    //..
}
