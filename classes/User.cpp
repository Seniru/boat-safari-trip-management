#include <iostream>
#include "User.h"

using namespace std;

User::User(int pID, string pUsername, string pPassword) {
    id = pID;
    username.assign(pUsername);
    password.assign(pPassword);
    loggedin = false;
    cout << "Created a user instance! [ID: " << id << ", name: " << username << "]\n";
}

string User::getUsername() {
    return username;
}

int User::getID() {
    return id;
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

void User::setLoggedIn(bool loggedinStatus) {
    loggedin = loggedinStatus;
}

void User::login() {
    // ...
}

