#pragma once

#include <iostream>
#include "User.h"

class Ticket {
    private:
        User *user;
        bool opened;
        string subject;
        string inquiryType;
        string message;
        string submittedDateTime;
    public:
        User *getUser();
        bool getIsOpened();
        string getSubject();
        string getInquiryType();
        string getMessage();
        string getSubmittedDateTime();
        void setOpened(bool pOpened);
        void setSubject(string newSubject);
        void setInquiryType(string newInquiryType);
        void setSubmittedDateTime(string newDateTime);
        void displayInformation();
        Ticket(User *pUser, string pSubject, string pInquiryType, string pMessage);

};
