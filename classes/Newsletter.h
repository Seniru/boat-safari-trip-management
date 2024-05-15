#pragma once

#include <iostream>
#include "NewsLetterSubscriber.h"

using namespace std;

class Newsletter {
    private:
        string title;
        string content;
    public:
        string getTitle();
        string getContent();
        void setTitle(string newTitle);
        void setContent(string newContent);
        void displayNewsletter();
        void sendNewsletter(NewsLetterSubscriber subscriber);
        Newsletter(string pTitle, string pContent);
};
