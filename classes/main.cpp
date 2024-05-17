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
    SystemAdministrator *sysadmin1 = new SystemAdministrator(1, string("Admin1"), string("adminpass1"));
    CustomerSupportAgent *agent1 = new CustomerSupportAgent(2, string("Agent1"), string("agentpass1"));
    // TripProvider provider1;
    RegisteredUser *user1 = new RegisteredUser(4, string("John"), string("pass123"));
    Newsletter *newsletter1 = new Newsletter(string("New deal!"), string("Book a new trip"));
    NewsLetterSubscriber *subscriber1 = new NewsLetterSubscriber(string("subscriber1@localhost.com"));
    // Package package1;
    // Trip trip1;
    Ticket *ticket1 = new Ticket(user1, string("I have a complaint!"), string("complaint"), string("Provider1 scammed me."));
    Review *review1 = new Review(1, user1, string("Good place!"), 4);
    Notification *notif1 = new Notification(1, user1, string("Provider1 accepted your trip!"));

    delete agent1;
    delete sysadmin1;
    // delete provider1;
    delete user1;
    delete newsletter1;
    delete subscriber1;
    // delete package1;
    // delete trip1;
    //delete ticket1;
    delete review1;
    delete notif1;

    return 0;
}
