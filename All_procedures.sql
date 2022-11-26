select   
d.doctor_id, d.full_Name, s.specialist_name, d.age, d.phone, d.adress
 from doctor d join specialist s on d.specialist_id= s.specialist_id;
 
 
  select b.booking_id, concat(p.first_name, '', p.last_name) as patient_name, b.booking_number as card_number, d.full_Name as Doctor_name, b.amount, s.name 
 as shift, b.info as Issue
 from booking b join patient p on b.patient_id= p.patient_id join doctor d on b.doctor_id= d.doctor_id join shift s on 
 b.shift_id= s.shift_id;
 
 use Orthopedic_surgeon;

 
 select patient_id, concat(patient.first_name, ' ', patient.last_name) as patient_name  from patient where patient_id in(select patient_id from booking);

 
 select patient_id, concat(patient.first_name, ' ', patient.last_name) as patient_name  from patient where patient_id in(select patient_id from payment);


select  p.payment_id as ID, concat(pa.first_name, ' ', pa.last_name) as patient_name,
p.amount, a.bank_name, pm.name as payment_method, p.date, p.status
 from payment p join patient pa on  p.patient_id= pa.patient_id join account a on p.accoun_id=
a.accoun_id join payment_method pm on p.p_method_id= pm.p_method_id;


select i.info_id,  concat(p.first_name, ' ', p.last_name) as patient_name, b.info as Issue, i.type, i.date
from information i join patient p on  i.patient_id= p.patient_id join booking b on i.patient_id= b.patient_id;


select e.employe_id, e.full_name, e.phone, e.adress, et.name as Type, e.date
from employee e join  employe_type et on e.em_type_id= et.em_type_id;

 select patient_id, concat(patient.first_name, ' ', patient.last_name) as patient_name 
 from patient where patient_id in(select patient_id from information);


 select patient_id, concat(patient.first_name, ' ', patient.last_name) as patient_name
 from patient where patient_id in(select patient_id from result);



select  ap.apointment_id as ID, concat(p.first_name, ' ', p.last_name) as patient_name,
 r.result as xray_result, ap.description as Des,
ap.start_date as s_date, ap.return_date as r_date
 from apointment ap join patient p on ap.patient_id= p.patient_id join result r on ap.patient_id
 = r.patient_id;
 
 
 
 select p.payment_id,  concat(pa.first_name, ' ', pa.last_name) as patient_name, p.amount, a.bank_name, pm.name as payment_method,
 p.date, b.status
 from payment  p join booking b on p.patient_id= b.patient_id  join patient pa on p.patient_id= pa.patient_id join account a on
 p.accoun_id= a.accoun_id join payment_method pm on p.p_method_id= pm.p_method_id where b.status= 'paid';
 
 
 
 
  select b.booking_id as ID, concat(p.first_name, ' ', p.last_name) as patient_name, b.booking_number as c_number, d.full_Name as D_name, b.amount, s.name 
 as shift, b.info as Issue, b.status
 from booking b join patient p on b.patient_id= p.patient_id join doctor d on b.doctor_id= d.doctor_id join shift s on 
 b.shift_id= s.shift_id where b.status= 'pending';
 
 

