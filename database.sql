CREATE TABLE users(
    id int(11) NOT NULL AUTO_INCREMENT,
    fullname varchar(255) DEFAULT NULL,
    email varchar(255) UNIQUE NULL,
    phonenumber varchar(255) NOT NULL,
    nationality varchar(255) NOT NULL,
    dob varchar(255) NOT NULL,
    residence varchar(255) NOT NULL,
    occupation varchar(255) NOT NULL,
    maritalstatus varchar(255) NOT NULL,
    houseaddress varchar(255) NOT NULL,
    aboutus varchar(255) DEFAULT NULL,
    income varchar(255) DEFAULT NULL,
    startup varchar(255) DEFAULT NULL,
    password varchar(255) NOT NULL,
    created_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
);