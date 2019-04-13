CREATE TABLE Individual(
    individual_id INTEGER,
    f_name varchar(20),
    l_name varchar(20),
    adopt_status BOOLEAN,
    primary key(individual_id)
);

create table medical_info(
    medical_id INTEGER,
    spayed_neutered BOOLEAN,
    DOSN DATE,
    medication varchar(20),
    medication_cost NUMBER(6,2),
    primary key(medical_id)
);

create table cat_info
(
  cat_id integer,
  name varchar2(20),
  DOB date,
  intake_date date,
  adopt_date date,
  breed varchar2(20),
  age integer,
  sex char(1)
);

create table cat_owner
(
  cat_id integer,
  individual_id integer,
  foreign key(cat_id) references cat_info,
  foreign key(individual_id) references individual
);