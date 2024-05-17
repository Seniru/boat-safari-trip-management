#pragma once

#include <iostream>

using namespace std;

class RegisteredUser;  // Forward declaration

class Ticket {
    private:
        RegisteredUser *user;
        bool opened;
        string subject;
        string inquiryType;
        string message;
        string submittedDateTime;
    public:
        RegisteredUser *getUser();
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
        Ticket(RegisteredUser *pUser, string pSubject, string pInquiryType, string pMessage);
};
