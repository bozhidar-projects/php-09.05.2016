#duplicates record with 911 sid attributes but increments the sid with 1
insert into students
(select SID+1, Name, Avg
from students
where SID = 911);