drop table Individual cascade constraints;
CREATE TABLE Individual(
    individual_id INTEGER,
    f_name varchar(20),
    l_name varchar(20),
    adopt_status char(1) check(adopt_status IN ('T','F')),
    primary key(individual_id)
);

drop sequence indiv_seq;
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
create sequence indiv_seq
increment by 1
start with 100;

drop table medical_info cascade constraints;
=======
create or replace sequence indiv_seq
increment by 1
start with 100;
>>>>>>> Stashed changes
=======
create or replace sequence indiv_seq
increment by 1
start with 100;
>>>>>>> Stashed changes
=======
create or replace sequence indiv_seq
increment by 1
start with 100;
>>>>>>> Stashed changes
create table medical_info(
    medical_id INTEGER,
    spayed_neutered char(1) check(spayed_neutered IN ('T','F')),
    DOSN DATE,
    medication varchar(20),
    medication_cost NUMBER(6,2),
    foreign key(medical_id) references cat_info(cat_id),
    primary key(medical_id)
);

drop table cat_info cascade constraints;
create table cat_info
(
  cat_id integer,
  name varchar2(20),
  DOB date,
  intake_date date,
  adopt_date date,
  breed varchar2(20),
  age integer,
  sex char(1),
  primary key(cat_id)
);

drop sequence cat_seq;
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
create sequence cat_seq
increment by 1
start with 1;

drop table cat_owner cascade constraints;
=======
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
create or replace sequence cat_seq
increment by 1
start with 1;

<<<<<<< Updated upstream
<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
create table cat_owner
(
  cat_id integer,
  individual_id integer,
  foreign key(cat_id) references cat_info,
<<<<<<< Updated upstream
  foreign key(individual_id) references individual,
  primary key(cat_id, individual_id)
=======
  foreign key(individual_id) references individual
  primary key(cat_id, individual_id);
<<<<<<< Updated upstream
<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
);
