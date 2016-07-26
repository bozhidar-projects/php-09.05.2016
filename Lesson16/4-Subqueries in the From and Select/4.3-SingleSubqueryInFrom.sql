#Select the rector and student names that start with N
select Name 
from (Select Name from students union Select Rec as Name from universities) as RaS
where name like "N%";