#pragma once

#include <iostream>

using namespace std;

class TripOption {
    protected:
        string name;
        float cost;
    public:
        TripOption(string pName, float pCost);
        ~TripOption();
        virtual string getName();
        virtual float getCost();
        virtual void setName(string newName);
        virtual void setCost(float newCost);
};

class Boat : public TripOption {
    public: Boat(string pName, float pCost) : TripOption(pName, pCost) {}
};

class Location : public TripOption {
    public: Location(string pName, float pCost) : TripOption(pName, pCost) {}
};

class Facility : public TripOption {
    public: Facility(string pName, float pCost) : TripOption(pName, pCost) {}
};
