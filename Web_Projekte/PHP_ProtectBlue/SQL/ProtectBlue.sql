-- 
--  Woche: Tag04 
--  Datum: 14.05.2021
--  Datei: ProtectBlue.sql
--  Autor: Darius
--  Beschreibung: Erstellen der Datenbank
--

-- Anleitung für SUPER DAU -> Regedit --
-- Gehe Auf: http://localhost/dashboard/
-- drücke phpMyAdmin
-- drücke auf SQL
-- Kopiere das GESAMMTE unten angehängte Skript in die Befehlszeile
-- Drücke OK (unten rechts)

DROP DATABASE IF EXISTS protect_blue;
CREATE DATABASE protect_blue;
USE protect_blue;

CREATE TABLE Email(
    emailID int PRIMARY KEY,
    email varchar(50)
);

CREATE TABLE Newsletter(
    newsletterID int PRIMARY KEY,
    FK_emailID int NOT NULL,
    vorname varchar(50),
    FOREIGN KEY (FK_emailID) REFERENCES Email(emailID)
);

CREATE TABLE UserLogin(
    userID int PRIMARY KEY,
    userName varchar(32),
    FK_emailID int NOT NULL,
    userPassword varchar(150),
    userAlter int,
    FOREIGN KEY (FK_emailID) REFERENCES Email(emailID)
);

CREATE TABLE Review(
    reviewID int PRIMARY KEY,
    FK_userID int NOT NULL,
    review varchar(1000),
    FOREIGN KEY (FK_userID) REFERENCES UserLogin(userID)
);

CREATE TABLE BewertungsService(
    serviceID int PRIMARY KEY,
    serviceName varchar(100)
);

CREATE TABLE Bewertung(
    bewertungID int PRIMARY KEY,
    FK_userID int NOT NULL,
    FK_serviceID int NOT NULL,
    bewertung smallint,
    FOREIGN KEY (FK_userID) REFERENCES UserLogin(userID),
    FOREIGN KEY (FK_serviceID) REFERENCES BewertungsService(serviceID)
);

CREATE TABLE UserPlastikSchaetzung(
    plastikSchaetzungID int PRIMARY KEY,
    userSchaetzung int
);

CREATE TABLE Nahrung(
    nahrungID int PRIMARY KEY,
    nahrungsmittel varchar(50),
    co2Wert float
);

CREATE TABLE Verkehrsmittel(
    verkehrsmittelID int PRIMARY KEY,
    fahrzeug varchar(50),
    co2Wert float
);

INSERT INTO verkehrsmittel (co2Wert, fahrzeug)
VALUES (15.2, 'Auto');