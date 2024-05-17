#pragma once

#include <iostream>
#include "User.h"

class SystemAdministrator : public User {
    public:
        // constructor inherited from User
        User *viewUsers(string name, int accountType);
        void displayFinances();
        void createPackage();
        void makeReviewPublic(int reviewID);
        void sendNewsletter();

        SystemAdministrator(int userID, string username, string password) : User(userID, username, password) {};
        ~SystemAdministrator();
};
