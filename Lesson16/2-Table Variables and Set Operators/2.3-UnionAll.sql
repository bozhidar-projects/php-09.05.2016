#Select pairs of collage names in the same province, keeps duplicates
Select Name as name
from students
union all
Select Rec as name
from universities;
