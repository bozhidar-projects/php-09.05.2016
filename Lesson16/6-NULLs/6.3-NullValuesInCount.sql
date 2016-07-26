#count doesnt count tuples with null values
Select count(*) as AllStudents, count(avg) as StudentsNotHavingNullGPA 
from students