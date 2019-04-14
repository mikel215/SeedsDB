set serveroutput on

create or replace function getSequenceVal
    return integer as
    sequence_val    integer;
begin
    sequence_val := indiv_seq.nextval;

    return sequence_val;
end;
/
show errors

set serveroutput off