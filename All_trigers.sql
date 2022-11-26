DELIMITER $$
CREATE TRIGGER update_status
AFTER INSERT ON booking 

FOR EACH ROW

BEGIN 
Update patient set status ='booking'
where patient_id = NEW.patient_id;

END $$

DELIMITER ;




DELIMITER $$
CREATE TRIGGER update_accoun
AFTER INSERT ON payment 

FOR EACH ROW

BEGIN 
Update account set Balance = Balance + NEW.amount
where accoun_id = NEW.accoun_id;

END $$

DELIMITER ;

DELIMITER $$
CREATE TRIGGER update_statuss
AFTER INSERT ON payment 

FOR EACH ROW

BEGIN 
Update booking set status = 'paid'
where patient_id = NEW.patient_id;

END $$

DELIMITER ;



DELIMITER $$
CREATE TRIGGER update_info
AFTER INSERT ON result 

FOR EACH ROW

BEGIN 
Update information set status='complete' 
where patient_id = NEW.patient_id;

END $$

DELIMITER ;