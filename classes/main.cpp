#include <iostream>
#include "SystemAdministrator.h"
#include "CustomerSupportAgent.h"
#include "TripProvider.h"
#include "RegisteredUser.h"
#include "Newsletter.h"
#include "NewsLetterSubscriber.h"
#include "Package.h"
#include "Trip.h"
#include "Ticket.h"
#include "Review.h"
#include "Notification.h"

using namespace std;

int main() {
    SystemAdministrator sysadmin1(1, string("Admin1"), string("adminpass1"));
    // CustomerSupportAgent agent1;
    // TripProvider provider1;
    RegisteredUser user1(4, string("John"), string("pass123"));
    Newsletter newsletter1(string("New deal!"), string("Book a new trip"));
    NewsLetterSubscriber subscriber1(string("subscriber1@localhost.com"));
    // Package package1;
    // Trip trip1;
    // Ticket ticket1;
    Review review1(1, user1, string("Good place!"), 4);
    Notification notif1(1, user1, string("Provider1 accepted your trip!"));

    return 0;
}
