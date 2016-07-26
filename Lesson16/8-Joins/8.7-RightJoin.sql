#will make the join but it will keep students that doesn't match the condition
select * 
from applications right outer join students using(SID)
