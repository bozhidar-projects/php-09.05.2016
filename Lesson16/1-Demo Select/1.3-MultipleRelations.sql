#Select students that have been accepted (it will have duplicates)
select Name, Accpd
from Students, Applications
where Students.SID = Applications.SID and Accpd = true;