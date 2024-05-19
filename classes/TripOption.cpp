#include <iostream>
#include "TripOption.h"

using namespace std;

TripOption::TripOption(string pName, float pCost) {
    name = pName;
    cost = pCost;
    cout << "Created a trip option instance! [name: " << name << "]" << endl;
}

TripOption::~TripOption() {
    cout << "Deleted a trip option instance." << endl;
}

string TripOption::getName() {
    return name;
}

float TripOption::getCost() {
    return cost;
}

void TripOption::setName(string newName) {
    name = newName;
}

void TripOption::setCost(float newCost) {
    cost = newCost;
}
