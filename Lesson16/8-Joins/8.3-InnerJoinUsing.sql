#Joins the students and applications tables, instructing which column to use as common
select *
from students inner join applications using(SID)