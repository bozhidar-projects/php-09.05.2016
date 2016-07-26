#Select pairs of collage names in the same province
Select u1.Name, u2.Name, u1.Prov
from universities as u1, universities as u2
where u1.Prov = u2.Prov and u1.Name < u2.Name; 
