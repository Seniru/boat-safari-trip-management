#pragma once

#include <iostream>

class RegisteredUser;

using namespace std;

class Notification {
    private:
        int notificationID;
        RegisteredUser *user;
        string notification;
        bool read;

    public:
        Notification(int pNotificationID, RegisteredUser *pUser, string pNotification);
        ~Notification();
        int getNotificationID();
        RegisteredUser *getUser();
        string getNotification();
        bool getReadStatus();
        void readMessage();
        void setNotification(string newNotification);
        void setReadStatus(bool readStatus);
};
