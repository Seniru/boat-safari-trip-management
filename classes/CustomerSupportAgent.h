#pragma once

#include <iostream>
#include "User.h"
#include "Ticket.h"

using namespace std;

class CustomerSupportAgent : public User {
    public:
        void replyTo(Ticket *ticket, string message);
        void closeTicket(Ticket *ticket);
        CustomerSupportAgent(int userID, string username, string password) : User(userID, username, password) {}
        ~CustomerSupportAgent();
};
