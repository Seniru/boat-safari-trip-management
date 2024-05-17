#pragma once

class Package {
     private:
         int PackageID;
         string PackageName[20];
         float PackagePrice;
         string Facilities;
         string BoatType;
     public:
         Package(int pid, string pName, float pPrice, string pFacilities, string pBoatType);
         void setPackageDetails();
         void displayPackageDetails();
         ~Package();
};
