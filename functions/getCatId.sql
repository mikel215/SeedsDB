set serveroutput on

create or replace function getCatId(cat_name varchar2) return integer as
    current_cat_id  integer;
begin
    select cat_id
    into current_cat_id
    from cat_info
    where name = cat_name;

    return current_cat_id;
end;
/
show errors

set serveroutput off