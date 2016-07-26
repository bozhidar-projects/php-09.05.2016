#will make the join but it will keep students that doesn't applied to an university
select *
from students left outer join applications using(SID)
