#include "Trip.h"
#include "RegisteredUser.h"

using namespace std;

Trip::Trip()




int Trip::getID(){
    return Id;
}

string Trip::DateTime(){
    return Datetime;
}

int Trip::getPassengersU12(){
    return passengersU12;
}

int Trip::getpassengersO12(){
    return passengersO12;
} 

RegisteredUser *Trip::getUser(){
    return user;
}

Location Trip::getlocation(){
    return location;
}

Boat Trip::getboat(){
    return boat;
}

Facility *Trip::getfacilities(){
    return facilities;
}

float Trip::calculatePrice(){
    return calculateprice;
}


void Trip::setDateTime(int pDateTime){

    Datetime = pDateTime;

}

void Trip::setPassengerCount(int PnewPU12 , int PnewPO12){

    passengerCount = PnewPU12 +  PnewPO12;
   
}


void Trip::setLocatin(Location *newlocation){
    //..
}

void Trip::setBoatType(Boat *newBoat){
    //..
}

void Trip::addFacility(Facility *facility){
    //..
}