#this query wont select the NULL values
Select *
from students
where students.avg < 5 or students.avg >= 5;