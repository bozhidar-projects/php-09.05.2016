#Pair the names of the rectors with the name of the top grader

#In this example the rectors are fighting for the top grader and they
#are having a meetings with him. Show all the meetings
select rec, (select s1.Name
	from students as s1
	where not s1.Avg < any (select s2.Avg from students as s2)) as TopGrader
from universities;