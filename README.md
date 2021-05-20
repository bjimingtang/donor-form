# donor-form

This is a sample donor form that saves the user's information to a MySQL database when they confirm.

Instructions to run:
I tested this by installing WAMP and putting my files under C:/wamp64/www.
I then went to http://localhost/donor-form/index/index.php to start using the program.
Before running database operations, install MySQL Workbench.
In order, run the following files under the database folder:
dbCreation.sql
setPassword.sql
insertDonor.sql
userInformation_BEFORE_INSERT.sql

A MySQL user with username "root" and password 'S3Cur3P4s$w0rD' is required.

Versions:
I run this on MySQL 5.7.31 with MySQL Server 8.0.
PHP should be version 7.
