CREATE DEFINER=`root`@`localhost` PROCEDURE `insertDonor`(in firstName varchar(255), 
								in lastName varchar(255),
								in address varchar(255), 
                                in city varchar(255),
								in state varchar(255), 
                                in country varchar(255),
								in postCode varchar(255), 
                                in phone varchar(255),
								in email varchar(255), 
                                in preferredContact varchar(255),
								in currency varchar(255), 
                                in frequency varchar(255),
								in paymentAmount DECIMAL(65,2), 
                                in comments longtext,
                                out successConfirmation int)
BEGIN
	#initialize successConfirmation
	set successConfirmation = 0;
	insert into
		userInformation (firstName, 
						 lastName, 
						 address, 
                         city, 
                         state, 
                         country, 
                         postCode, 
                         phone,
                         email, 
                         preferredContact,
                         currency, 
                         frequency,
                         paymentAmount,
						 comments)
	values
		(firstName,
         lastName,
		 address, 
         city, 
         state, 
         country, 
         postCode, 
         phone,
         email, 
         preferredContact,
         currency, 
         frequency,
         paymentAmount,
		 comments);
	#set successConfirmation
    set successConfirmation = row_count();
END