#include <iostream>
#include "NewsLetterSubscriber.h"

using namespace std;

NewsLetterSubscriber::NewsLetterSubscriber(string pEmail) {
    email = pEmail;
    cout << "Created a newsletter subscriber instance! [Email: " << email << "]\n";
}

NewsLetterSubscriber::~NewsLetterSubscriber() {
    cout << "Deleted newsletter subscriber instance." << endl;
}

void NewsLetterSubscriber::setEmail(string newEmail) {
    email.assign(newEmail);
}

string NewsLetterSubscriber::getEmail() {
    return email;
}
