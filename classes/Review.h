#pragma once

#include <iostream>
#include "RegisteredUser.h"

using namespace std;

class Review {
    private:
        int reviewID;
        RegisteredUser *user;
        string review;
        int rating;

    public:
        Review(int pReviewID, RegisteredUser *pUser, string pReview, int rating);
        ~Review();
        int getReviewID();
        int getUserID();
        string getReview();
        int getRating();
        RegisteredUser *getUser();
        void setReview(string newReview);
        void setRating(int newRating);
        void displayReview();
};