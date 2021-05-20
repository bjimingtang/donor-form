CREATE DEFINER=`root`@`localhost` TRIGGER `donationdb`.`userinformation_BEFORE_INSERT` BEFORE INSERT ON `userinformation` FOR EACH ROW
BEGIN
	select
		max(id)
	from
		userinformation
	into @maxID;
    if !isnull(@maxID) then
		set @newID = @maxID + 1;
    else
		set @newID = 1;
	end if;
    set NEW.id = @newID;
END