<?php
 CREATE TRIGGER 'log' AFTER INSERT ON 'claimant' FOR EACH ROW UPDATE INTO claimant_log
 VALUES (null,new.fname,new.lname,new.city,new.street,new.pincode,new.age,new.gender,new.phone,new.relation,'updated',now());
?>
