#Pair the names of the rectors with the name of the top grader

#In this example the rectors are fighting for the top grader and they
#are having a meetings with him. Show all the meetings. They also want to 
#meet the lowest grader because the country has offered additional fonds for
#the university that has it
select rec, (select s1.Name
	from students as s1
	where not s1.Avg < any (select s2.Avg from students as s2)) as TopGrader, (select s1.Name
	from students as s1
	where s1.Avg <= all (select s2.Avg from students as s2)) as DownGrader #But good sportsman!
from universities;