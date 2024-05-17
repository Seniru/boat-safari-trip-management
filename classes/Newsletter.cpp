#include <iostream>
#include "Newsletter.h"
#include "NewsLetterSubscriber.h"

using namespace std;

Newsletter::Newsletter(string pTitle, string pContent) {
    title.assign(pTitle);
    content.assign(pContent);
    cout << "Created a newsletter instance!\n";
}

Newsletter::~Newsletter() {
    cout << "Deleted newsletter instance." << endl;
}

string Newsletter::getTitle() {
    return title;
}

string Newsletter::getContent() {
    return content;
}
void Newsletter::setTitle(string newTitle) {
    title.assign(newTitle);
}
void Newsletter::setContent(string newContent) {
    content.assign(newContent);
}

void Newsletter::displayNewsletter() {
    // ...
}

void Newsletter::sendNewsletter(NewsLetterSubscriber *subscriber) {
    // ...
}