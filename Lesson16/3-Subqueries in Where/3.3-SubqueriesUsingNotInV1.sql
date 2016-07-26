#Select the students that applied to both TU and SU
select SID, Name
from students
where SID in (select SID from applications where UName = "TU") and SID not in (select SID from applications where UName = "SU");
