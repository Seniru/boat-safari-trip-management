#include "Ticket.h"
#include "RegisteredUser.h"

using namespace std;

Ticket::Ticket(RegisteredUser *pUser, string pSubject, string pInquiryType, string pMessage) : user(pUser) {
    subject = pSubject;
    inquiryType = pInquiryType;
    message = pMessage;
    opened = true;
    submittedDateTime = "";
    cout << "Created a ticket instance!\n";
}

RegisteredUser *Ticket::getUser() {
    return user;
}

bool Ticket::getIsOpened() {
    return opened;
}

string Ticket::getSubject() {
    return subject;
}

string Ticket::getInquiryType() {
    return inquiryType;
}

string Ticket::getMessage() {
    return message;
}

string Ticket::getSubmittedDateTime() {
    return submittedDateTime;
}

void Ticket::setOpened(bool pOpened) {
    opened = pOpened;
}

void Ticket::setSubject(string newSubject) {
    subject = newSubject;
}

void Ticket::setInquiryType(string newInquiryType) {
    inquiryType = newInquiryType;
}

void Ticket::setSubmittedDateTime(string newDateTime) {
    submittedDateTime = newDateTime;
}

void Ticket::displayInformation() {
    cout << "User: " << user->getID() << "\nType: " << inquiryType << "\n" << subject << "\n\n" << message << endl;
}
