#Select pairs of collage names in the same province doesn't keep the duplicates
Select Name as name
from students
union
Select Rec as name
from universities;
