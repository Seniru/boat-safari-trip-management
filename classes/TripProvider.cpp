#include <iostream>
#include "TripProvider.h"
#include "Trip.h"

using namespace std;

TripProvider::~TripProvider() {
    cout << "Deleted trip provider instance." << endl;
}

void TripProvider::approveTrip(Trip *trip){
    //..
}

Trip *TripProvider::getOngoingTrips() {
    // ...
    Trip *trip;
    return trip;
}

string *TripProvider::getTripDates() {
    string *dates;
    return dates;
}
