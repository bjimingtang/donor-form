create schema if not exists donationDB;
create table donationDB.userInformation (firstName varchar(20), lastName varchar(20), 
	address varchar(20), city varchar(20), 
	state varchar(20), country varchar(20), 
	postCode varchar(20), phone varchar(20), 
	email varchar(20), preferredContact varchar(20), 
	currency varchar(20), frequency varchar(20), 
	paymentAmount varchar(20), comments longtext);