drop table Individual cascade constraints;
CREATE TABLE Individual(
    individual_id INTEGER not null,
    f_name varchar(20),
    l_name varchar(20),
    adopt_status char(1) check(adopt_status IN ('T','F')),
    primary key(individual_id)
);

drop table cat_info cascade constraints;
create table cat_info
(
    cat_id integer not null,
    name varchar2(20),
    DOB date,
    intake_date date,
    adopt_date date,
    breed varchar2(20),
    age integer,
    sex char(1),
    primary key(cat_id)
);


drop sequence indiv_seq;
create sequence indiv_seq
increment by 1
start with 100;

drop table medical_info cascade constraints;
create table medical_info(
    medical_id INTEGER not null,
    cat_id      integer,
    spayed_neutered char(1) check(spayed_neutered IN ('T','F')),
    DOSN DATE,
    medication varchar(20),
    medication_cost NUMBER(6,2),
    foreign key(cat_id) references cat_info,
    primary key(medical_id)
);

drop sequence cat_seq;
create sequence cat_seq
increment by 1
start with 2;

drop table cat_owner cascade constraints;
create table cat_owner
(
  cat_id integer not null,
  individual_id integer not null,
  foreign key(cat_id) references cat_info,
  foreign key(individual_id) references Individual,
  primary key(cat_id, individual_id)
);
