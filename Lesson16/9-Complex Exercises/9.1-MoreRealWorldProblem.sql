#select the univirsity records and their highest avg score participent

select u.Name, u.Prov, StudentToUniversity.Name, StudentToUniversity.Avg
from universities as u,
(select students.SID, students.Avg, students.Name, universities.Name as uniName, universities.Prov
from students, applications, universities
where students.SID = applications.SID and applications.UName = universities.Name and applications.UProv = universities.Prov) as StudentToUniversity
where u.Name = StudentToUniversity.uniName and u.Prov = StudentToUniversity.Prov and StudentToUniversity.Avg >= all (Select stu2.Avg from (select students.SID, students.Avg, students.Name, universities.Name as uniName, universities.Prov
from students, applications, universities
where students.SID = applications.SID and applications.UName = universities.Name and applications.UProv = universities.Prov) as stu2 where stu2.uniName = u.Name and stu2.Prov = u.Prov);
