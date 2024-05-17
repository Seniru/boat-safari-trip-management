#include <iostream>
#include "CustomerSupportAgent.h"
#include "Ticket.h"

using namespace std;

CustomerSupportAgent::~CustomerSupportAgent() {
    cout << "Deleted Customer support agent instance." << endl;
}

void CustomerSupportAgent::replyTo(Ticket *ticket, string message) {
    // ...
}

void CustomerSupportAgent::closeTicket(Ticket *ticket) {
    // ...
}
