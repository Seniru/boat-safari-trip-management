#pragma once

#include <iostream>
#include "RegisteredUser.h"
#include "Trip.h"

using namespace std;

class Review {
    private:
        int reviewID;
        RegisteredUser *user;
        Trip *trip;
        string review;
        int rating;

    public:
        Review(int pReviewID, RegisteredUser *pUser, Trip *pTrip, string pReview, int rating);
        ~Review();
        int getReviewID();
        int getUserID();
        Trip *getTrip();
        string getReview();
        int getRating();
        RegisteredUser *getUser();
        void setReview(string newReview);
        void setRating(int newRating);
        void displayReview();
};