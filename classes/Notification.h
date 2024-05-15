#pragma once

#include <iostream>
#include "RegisteredUser.h"

using namespace std;

class Notification {
    private:
        int notificationID;
        RegisteredUser user;
        string notification;
        bool read;

    public:
        Notification(int pNotificationID, const RegisteredUser pUser, string pNotification);
        int getNotificationID();
        RegisteredUser getUser();
        string getNotification();
        bool getReadStatus();
        void readMessage();
        void setNotification(string newNotification);
        void setReadStatus(bool readStatus);
};
