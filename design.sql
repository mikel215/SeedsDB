create table cat_info
{
  cat_id integer;
  name varchar2(20);
  DOB date;
  intake_date date;
  adopt_date date;
  age integer;
  sex char(1);
  adopter_id integer;
  medical_id integer;
  foreign key(adopter_id) references individual(individual_id);
}

create table cat_owner
{
  cat_id integer;
  individual_id integer;
  foreign key(cat_id) references cat_info;
  foreign key(individual_id) references individual;
}
