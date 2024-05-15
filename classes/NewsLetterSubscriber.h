#pragma once

#include <iostream>

using namespace std;

class NewsLetterSubscriber {
    private:
        string email;
    public:
        string getEmail();
        void setEmail(string newEmail);
        NewsLetterSubscriber(string email);
};
