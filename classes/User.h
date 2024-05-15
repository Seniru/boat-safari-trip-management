#pragma once

#include <iostream>

using namespace std;

class User {
    private:
        int id;
        string username;
        string password;
        bool loggedin;
    public:
        string getUsername();
        int getID();
        bool isLoggedIn();
        void setUsername(string newUsername);
        void setPassword(string newPassword);
        void setLoggedIn(bool loggedinStatus);
        void login();
        User(int pID, string pUsername, string pPassword);
};
