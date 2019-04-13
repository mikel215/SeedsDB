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
insert into Individual(cat_id, name, intake_date, age, sex)
values
(1, 'Erik', '04-Dec-2019', 17, 'F');

insert into Individual(cat_id, name, breed, intake_date, age, sex)
values
(1, 'Minnie', '04-Dec-2019', 1, 'F');
