#Select the student with the highest avg
select s1.SID, s1.Name
from students as s1
where not s1.Avg < any (select s2.Avg from students as s2);