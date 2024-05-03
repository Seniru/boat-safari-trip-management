CREATE TABLE PackageFacilities(
  PackageID INT NOT NULL,
  Facility VARCHAR(100) NOT NULL,
  FOREIGN KEY (PackageID) REFERENCES Package (PackageID)
  );
