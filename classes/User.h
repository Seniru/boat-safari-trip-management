#pragma once

#include <iostream>

using namespace std;

class User {
    protected:
        int id;
        string username;
        string password;
        string dob;
        int gender;
        bool loggedin;
    public:
        virtual string getUsername();
        virtual int getID();
        virtual string getDOB();
        virtual int getGender();
        virtual bool isLoggedIn();
        virtual void setUsername(string newUsername);
        virtual void setPassword(string newPassword);
        virtual void setDOB(string newDOB);
        virtual void setGender(int newGender);
        virtual void setLoggedIn(bool loggedinStatus);
        virtual void login();
        User(int pID, string pUsername, string pPassword);
};
