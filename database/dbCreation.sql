create schema if not exists donationDB;
create table donationDB.userInformation (firstName varchar(255), lastName varchar(255), 
	address varchar(255), city varchar(255), 
	state varchar(255), country varchar(255), 
	postCode varchar(255), phone varchar(255), 
	email varchar(255), preferredContact varchar(255), 
	currency varchar(255), frequency varchar(255), 
	paymentAmount DECIMAL(65,2), comments longtext);