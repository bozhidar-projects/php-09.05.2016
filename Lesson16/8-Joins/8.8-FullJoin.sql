#will make the join but it will keep students that doesn't match the condition and will keep applications from students that arent in the student table
insert into applications
value (1011, "TU", "Sofia", 1);

#Mysql Doesn't have full outer join
#select * 
#from students full outer join applications using(SID);
#But can be simulated with the example below
select * 
from students left outer join applications using(SID)
union
select * 
from students right outer join applications using(SID);

delete from applications
where applications.SID = 1011;
