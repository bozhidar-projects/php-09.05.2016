#Select students that have been accepted without duplicates and ordered by Name
select distinct Name, Accpd
from Students, Applications
where Students.SID = Applications.SID and Accpd = true
order by Name asc;