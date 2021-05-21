#normal-ish test. PHP would've validated the email input and empty inputs
call donationdb.insertDonor('r', 'r', 'r', 'r', 'r', 'r', 'r', 'r', 'r', 'r', 'r', 'r', 1, 'f');
#test attempt to insert null
call donationdb.insertDonor(NULL, 'r', 'r', 'r', 'r', 'r', 'r', 'r', 'r', 'r', 'r', 'r', 1, 'f');