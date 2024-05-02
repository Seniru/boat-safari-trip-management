CREATE TABLE Package(
  PackageID INT,
  PackageName VARCHAR(20) NOT NULL,
  LocationID INT NOT NULL,
  BoatTypeID INT NOT NULL,
  PRIMARY KEY (PackageID),
  FOREIGN KEY (LocationID) REFERENCES Location (LocationID),
  FOREIGN KEY (BoatTypeID) REFERENCES BoatType (BoatTypeID)
);
