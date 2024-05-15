#include <iostream>
#include "Notification.h"
#include "RegisteredUser.h"

using namespace std;

Notification::Notification(int pNotificationID, const RegisteredUser pUser, string pNotification) : user (pUser) {
    notificationID = pNotificationID;
    notification = pNotification;
    cout << "Created a notification instance! [ID: " << notificationID << "]\n";
}

int Notification::getNotificationID() {
    return notificationID;
}

RegisteredUser Notification::getUser() {
    return user;
}

string Notification::getNotification() {
    return notification;
}

bool Notification::getReadStatus() {
    return read;
}


void Notification::setNotification(string newNotification) {
    notification = newNotification;
}

void Notification::setReadStatus(bool readStatus) {
    read = readStatus;
}

void Notification::readMessage() {
    cout << "Notification " << notificationID << " has been marked as read." << endl;
    setReadStatus(true);
}