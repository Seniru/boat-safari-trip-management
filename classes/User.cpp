#include <iostream>
#include "User.h"

using namespace std;

User::User(int pID, string pUsername, string pPassword) {
    id = pID;
    username.assign(pUsername);
    password.assign(pPassword);
    loggedin = false;
    dob = "";
    gender = 0;
    cout << "Created a user instance! [ID: " << id << ", name: " << username << "]\n";
}

string User::getUsername() {
    return username;
}

int User::getID() {
    return id;
}

string User::getDOB() {
    return dob;
}

int User::getGender() {
    return gender;
}

bool User::isLoggedIn() {
    return loggedin;
}

void User::setUsername(string newUsername) {
    username.assign(newUsername);
}

void User::setPassword(string newPassword) {
    password.assign(newPassword);
}

void User::setDOB(string newDOB) {
    dob.assign(newDOB);
}

void User::setGender(int newGender) {
    gender = newGender;
}

void User::setLoggedIn(bool loggedinStatus) {
    loggedin = loggedinStatus;
}

void User::login() {
    // ...
}

