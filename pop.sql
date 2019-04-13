delete from Animal_information;
delete from Individual;
delete from cat_info;
delete from cat_owner;

-- populating the Individual table
insert into Individual
values
(111, 'Johnny', 'Quest', TRUE);

insert into Individual
values
(222, 'Gayle', 'Belcher', FALSE);

insert into Individual
values
(333, 'Mark', 'Twain', FALSE);

insert into Individual
values
(444, 'Kurt', 'Cobain', TRUE);

insert into Individual
values
(555, 'Tory', 'Kay', TRUE);

insert into Individual
values
(666, 'Yoko', 'Ono', TRUE);

insert into Individual
values
(777, 'John', 'Lennon', FALSE);

insert into Individual
values
(888, 'Joseph', 'Joestar', TRUE);

insert into Individual
values
(999, 'Bob', 'Ross', TRUE);

--populating cat_info
insert into cat_info(cat_id, name, intake_date, breed, age, sex)
values
(1, 'Minnie', '04-Apr-2019', 'DSH Tuxedo Mix', 1, 'F');

insert into cat_info(cat_id, name, intake_date, age, sex)
values
(2, 'Saffron', '04-Mar-2019', 1, 'F');

insert into cat_info(cat_id, name, intake_date, age, sex)
values
(3, 'Lizzard', '27-Mar-2019', 4, 'M');

insert into cat_info(cat_id, name, intake_date, age, sex)
values
(4, 'Franks', '15-Feb-2019', 2, 'M');

insert into cat_info(cat_id, name, intake_date, age, sex)
values
(5, 'Mojave', '1-Dec-2019', 1, 'M');

insert into cat_info(cat_id, name, intake_date, adopt_date, sex)
values
(6, 'Buster', '1-Dec-2019', '5-Feb-2019', 'M');

insert into cat_info(cat_id, name, intake_date, breed, age, sex)
values
(7, 'Molly', '1-Dec-2019', 'Dilute Calico', 1, 'F');

insert into cat_info(cat_id, name, intake_date, adopt_date, breed, age, sex)
values
(8, 'Erik', '12-Oct-2018', '2-Nov-2018' 'Siamese', 9, 'M');

insert into cat_info(cat_id, name, intake_date, adopt_date, age, sex)
values
(9, 'Steve', '4-Aug-2018', '10-Sep-2018', 3, 'M');

insert into cat_info(cat_id, name, intake_date, adopt_date, breed, age, sex)
values
(10, 'Sarah', '3-Jul-2018', '18-Sep-2018', 'Russian Blue', 5, 'F');

insert into cat_info(cat_id, name, intake_date, adopt_date, age, sex)
values
(11, 'James', '14-Dec-2018', '4-Jan-2019', 4, 'M');

insert into cat_info(cat_id, name, intake_date, adopt_date, age, sex)
values
(12, 'Harold', '28-Jan-2019', '01-Feb-2019', 10, 'M');
