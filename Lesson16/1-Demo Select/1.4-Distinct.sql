#Select students that have been accepted only once
select distinct Name, Accpd
from Students, Applications
where Students.SID = Applications.SID and Accpd = true;