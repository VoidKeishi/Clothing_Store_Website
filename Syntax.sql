--Create table

----Basic
------Create database
CREATE DATABASE [TestDB];
------Delete database
DROP DATABASE [TestDB];
------Backup database
BACKUP DATABASE [TestDB] 
TO DISK = 'C:\TestDB.bak'
WITH DIFFERENTIAL;
------Create table
CREATE TABLE NAME
(
    column1 INT,
    column2 VARCHAR(50),
    column3 DATE,
    column4 nvarchar(255) --Allow unicode characters
);
--------Insert data
INSERT INTO NAME
VALUES (1, 'A', '2018-01-01'),
(2, 'B', '2018-01-02'),
(3, 'C', '2018-01-03');
--------Using existing table
CREATE TABLE NEW_NAME AS
SELECT column1, column2,... 
FROM NAME
WHERE ...;
------Delete table
DROP TABLE NAME;
------Delete data inside table
TRUNCATE TABLE NAME;
------Update data
ALTER TABLE NAME ADD column4 INT;           --Add column
ALTER TABLE NAME DROP COLUMN column4;       --Delete column
ALTER TABLE NAME ALTER COLUMN column4 INT;  --Change data type

----Constraints
NOT NULL --The column cannot be NULL
UNIQUE --The column cannot have duplicate values
PRIMARY KEY --The column cannot have duplicate values and cannot be NULL
FOREIGN KEY --The column can only contain values from a parent table's primary key
CHECK --The column can only contain values that satisfy the specified condition
DEFAULT --The column will take the specified value if no value is specified
CREATE INDEX --Create index for the column to retrieve data faster
------Example
CREATE TABLE Person(
    PersonID int NOT NULL UNIQUE,
    LastName varchar(50) NOT NULL,
    FirstName varchar(50) NOT NULL,
    Age int,
    Gender char(1),
    City varchar(255)
    CONSTRAINT PK_Person PRIMARY KEY (PersonID)
    CONSTRAINT FK_Person_City FOREIGN KEY (City) REFERENCES City(CityName)
    CONSTRAINT CHK_Person_Age CHECK (Age >= 18 AND Age <= 100)
    CONSTRAINT UC_Person UNIQUE (PersonID,LastName)
);
ALTER TABLE Person ADD CONSTRAINT UC_PersonID UNIQUE (PersonID); --Add contraint
ALTER TABLE Person DROP CONSTRAINT UC_PersonID;                  --Delete constraint

----Auto increment field for serial number
------Example
CREATE TABLE LISTOFGUEST(
    PersonID int identity(1,1) PRIMARY KEY, --Start from 1 and increment by 1
    GUEST_NAME varchar(255) NOT NULL;
);

--Date time
SELECT GETDATE();                   --Get current date and time
SELECT DATEPART(MONTH,GETDATE());   --Get current month
SELECT DAY(GETDATE());              --Get current day
SELECT MONTH(GETDATE());            --Get current month
SELECT YEAR(GETDATE());             --Get current year

--SELECT

----Basic example
------EXAMPLE 1
SELECT column1, column2, column3 --Select by column name
FROM NAME;
------EXAMPLE 2
SELECT * --Select all columns
------EXAMPLE 3
SELECT DISTINCT column1 --Select distinct values

----Select with condition
------EXAMPLE 1
SELECT column1, column2, column3
FROM NAME
WHERE column1 >= 1 AND column2 = 'A';
------EXAMPLE 2
SELECT column1, column2, column3
FROM NAME
WHERE column1 BETWEEN 1 AND 3;

----Sort
SELECT column1, column2, column3
FROM NAME
ORDER BY column1 ASC, column2 DESC; --Sort by column1 ascending and column2 descending

----Top
SELECT TOP 3 * FROM Company;         --Select top 3 rows
SELECT TOP 50 PERCENT * FROM Company --Select top 50% rows

----Like operator
WHERE TXT LIKE 'A%'         --Start with A
WHERE TXT LIKE '%A'         --End with A
WHERE TXT LIKE '%A%'        --Contains A
WHERE TXT LIKE '_A%'        --Second letter is A
WHERE TXT LIKE 'A__%'       --Start with A and has at least 3 letters
WHERE TXT LIKE '[A-Z]%'     --Start with any letter from A to Z
WHERE TXT LIKE '[!A-Z]%'    --Start with any letter except A to Z
------Wildcard characters
%   --Represents zero or more characters
_   --Represents a single character
[]  --Represents any single character within the brackets
[^] --Represents any single character not within the brackets
------Example
WHERE NAME LIKE '[HL]'%   --Find name that starts with H or L
WHERE NAME LIKE '[!HL]'%  --Find name that does not start with H or L
WHERE NAME LIKE '[!A-Z]%' --Find name that does not start with any letter from A to Z

----In operator
WHERE column1 IN (1,2,3)        --Find column1 that is 1,2 or 3
WHERE column2 IN ('A','B','C')  --Find column2 that is A,B or C

----Aliases
SELECT CompanyID AS ID, Name AS Title
FROM Company

SELECT c.*
FROM Company AS c
WHERE c.Address LIKE '%Japan%'

----Join
------Inner join
SELECT column1, column2, column3
FROM NAME1
INNER JOIN NAME2