#include <iostream>
#include "SystemAdministrator.h"

using namespace std;

SystemAdministrator::~SystemAdministrator() {
    cout << "Deleted System administrator instance." << endl;
}

User *SystemAdministrator::viewUsers(string name, int accountType) {
    // ...
    User *users;
    return users;
}

void SystemAdministrator::displayFinances() {
    // ...
}

void SystemAdministrator::createPackage() {
    // ...
}

void SystemAdministrator::makeReviewPublic(int reviewID) {
    // ..
}

void SystemAdministrator::sendNewsletter() {
    // ...
}
