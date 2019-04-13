delete from Animal_information;
delete from Individual;
delete from cat_info;
delete from cat_owner;

-- populating the Individual table
insert into Individual (individual_id, f_name, l_name, adopt_status)
values
(111, 'Johnny', 'Quest', TRUE);

insert into Individual (individual_id, f_name, l_name, adopt_status)
values
(222, 'Gayle', 'Belcher', FALSE);

insert into Individual (individual_id, f_name, l_name, adopt_status)
values
(333, 'Mark', 'Twain', FALSE);

insert into Individual (individual_id, f_name, l_name, adopt_status)
values
(444, 'Kurt', 'Cobain', TRUE);

insert into Individual (individual_id, f_name, l_name, adopt_status)
values
(555, 'Tory', 'Kay', TRUE);

insert into Individual (individual_id, f_name, l_name, adopt_status)
values
(666, 'Yoko', 'Ono', TRUE);

insert into Individual (individual_id, f_name, l_name, adopt_status)
values
(777, 'John', 'Lennon', FALSE);

insert into Individual (individual_id, f_name, l_name, adopt_status)
values
(888, 'Joseph', 'Joestar', TRUE);

insert into Individual (individual_id, f_name, l_name, adopt_status)
values
(999, 'Bob', 'Ross', TRUE);

--populating cat_info
insert into cat_info(cat_id, name, intake_date, breed, age, sex)
values
(cat_seq.nextval, 'Minnie', '04-Apr-2019', 'DSH Tuxedo Mix', 1, 'F');

insert into cat_info(cat_id, name, intake_date, age, sex)
values
(cat_seq.nextval, 'Saffron', '04-Mar-2019', 1, 'F');

insert into cat_info(cat_id, name, intake_date, age, sex)
values
(cat_seq.nextval, 'Lizzard', '27-Mar-2019', 4, 'M');

insert into cat_info(cat_id, name, intake_date, age, sex)
values
(cat_seq.nextval, 'Franks', '15-Feb-2019', 2, 'M');

insert into cat_info(cat_id, name, intake_date, age, sex)
values
(cat_seq.nextval, 'Mojave', '1-Dec-2019', 1, 'M');

insert into cat_info(cat_id, name, intake_date, adopt_date, sex)
values
(cat_seq.nextval, 'Buster', '1-Dec-2019', '5-Feb-2019', 'M');

insert into cat_info(cat_id, name, intake_date, breed, age, sex)
values
(cat_seq.nextval, 'Molly', '1-Dec-2019', 'Dilute Calico', 1, 'F');

insert into cat_info(cat_id, name, intake_date, adopt_date, breed, age, sex)
values
(cat_seq.nextval, 'Erik', '12-Oct-2018', '2-Nov-2018', 'Siamese', 9, 'M');

insert into cat_info(cat_id, name, intake_date, adopt_date, age, sex)
values
(cat_seq.nextval, 'Steve', '4-Aug-2018', '10-Sep-2018', 3, 'M');

insert into cat_info(cat_id, name, intake_date, adopt_date, breed, age, sex)
values
(cat_seq.nextval, 'Sarah', '3-Jul-2018', '18-Sep-2018', 'Russian Blue', 5, 'F');

insert into cat_info(cat_id, name, intake_date, adopt_date, age, sex)
values
(cat_seq.nextval, 'James', '14-Dec-2018', '4-Jan-2019', 4, 'M');

insert into cat_info(cat_id, name, intake_date, adopt_date, age, sex)
values
(cat_seq.nextval, 'Harold', '28-Jan-2019', '01-Feb-2019', 10, 'M');

-- populating the table cat_owner
insert into cat_owner (cat_id, individual_id)
values
(111, 12);

insert into cat_owner (cat_id, individual_id)
values
(111, 11);

insert into cat_owner (cat_id, individual_id)
values
(111, 6);

insert into cat_owner (cat_id, individual_id)
values
(111, 10);

insert into cat_owner (cat_id, individual_id)
values
(444, 9);

insert into cat_owner (cat_id, individual_id)
values
(444, 8);
