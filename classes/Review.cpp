#include <iostream>
#include "Review.h"
#include "RegisteredUser.h"
#include "Trip.h"

using namespace std;

Review::Review(int pReviewID, RegisteredUser *pUser, Trip *pTrip, string pReview, int pRating) : user (pUser), trip (pTrip) {
    reviewID = pReviewID;
    review = pReview;
    rating = pRating;
    cout << "Created a review instance! [ID: " << reviewID << "]\n";
}

Review::~Review() {
    cout << "Deleted review instance." << endl;
}

int Review::getReviewID() {
    return reviewID;
}

RegisteredUser *Review::getUser() {
    return user;
}

Trip *Review::getTrip() {
    return trip;
}

string Review::getReview() {
    return review;
}

int Review::getRating() {
    return rating;
}

void Review::setReview(string newReview) {
    review = newReview;
}

void Review::setRating(int newRating) {
    rating = newRating;
}

void Review::displayReview() {
    cout << "Review ID: " << reviewID << "\nUser ID: " << user->getID() << endl;
}
