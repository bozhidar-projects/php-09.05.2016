#Select students that have avarage grade between 5 and 5.5
select SID, Name, Avg
from students
where avg > 5 and avg < 5.5;

