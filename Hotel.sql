create database hotel_1;
use hotel_1;
drop table if exists Rooms;
drop table if exists Department;
drop table if exists Employee;
drop table if exists Customer;
drop table if exists Dependents;
drop table if exists FoodMenu;
drop table if exists Services;
drop table if exists Laundry;
drop table if exists TaxiService;
drop table if exists BabySitting;


create table if not exists Rooms (
	RoomNo int primary key,
    RoomType varchar(30),
    capacity int,
    price int,
    BedType varchar(20),
    AC bool
);

create table if not exists Department (
	DeptNo int,
    DeptName varchar(20),
    NoOfEmp int,
    ManagerId varchar(10),
    NoOfEmpLeave int
);

create table if not exists Employee (
	EmpNo varchar(10) primary key,
    EmpName varchar(30),
    EmpType varchar(30),
    EmpAddress varchar(50),
    EmpPhNo bigint,
    Salary int,
    Department varchar(20)
);

create table if not exists Customer (
    CName varchar(30),
    CustID varchar(20) primary key,
    CPhNo bigint,
    BookingNo varchar(10),
    CAge int,
    CRoomNo int,
    BillAmt bigint,
    NoOfNights int, 
    CheckIN date,
    CheckOUT date,
    emailid varchar(50)
);

create table if not exists Dependents (
	InsId varchar(20),
    ENo varchar(20),
    DepName varchar(20),
    Relation varchar(30),
    Age int,
    foreign key (ENo) references Employee(EmpNo) on delete cascade
);

create table if not exists FoodMenu (
	DishName varchar(40),
    DPrice int,
    DietaryPref varchar(20),
    DishCode varchar(20) primary key,
    AddOns varchar(50),
    Spicy int
);

create table if not exists Services (
	Laundry bool,
    Spa bool,
    Minibar bool,
    MedicalHelp bool,
    TaxiService bool,
    Gym bool,
    Babysitting bool,
    DrinkMenu bool,
    SRoomNo int,
    foreign key (SRoomNo) references Rooms(RoomNo) on delete cascade
);


create table if not exists Laundry (
	ClothType varchar(20),
    ClothCategory varchar(20),
    RNo int,
    price int,
    SDate date,
    Rdate date,
    foreign key (RNo) references Rooms(RoomNo) on delete cascade
);  

create table if not exists TaxiService (
    CarType varchar(20),
    Duration int,
    TaxiCode varchar(30),
	tsprice int,
    TRNo int
);

create table if not exists BabySitting (
    BBSname varchar(30),
    NoHours int,
    BSRNo int,
    BPrice int
);    

insert into rooms values
(001,'Standard room',2,7000,'Twin',1),
(002,'Standard room',2,8000,'Queen',1),
(101,'Deluxe room',3,10000,'Twin',1),
(102,'Premium room',4,12000,'King',1),
(201,'Suite',5,19000,'California King',1),
(301,'Deluxe room',3,9000,'Queen',0),
(111,'Standard room',2,7500,'King',0),
(121,'Premium room',4,11500,'Twin',1),
(141,'Suite',5,12000,'California King',0),
(134,'Suite',5,13000,'Queen',1);

insert into department values
(9001,'House keeping',17,'21HK114',3),
(9002,'Reception',5,'21RP115',1),
(9003,'Security',9,'21SR116',2),
(9004,'Accounts',5,'21AT117',1),
(9005,'IT',4,'21IT118',2),
(9006,'Human Resources',6,'21AB300',1),
(9007,'Sales and Marketing',4,'21SD119',2),
(9008,'Food Production',7,'21FP756',3),
(9009,'Maintenance',8,'21HF182',1),
(9010,'Front Office',4,'21GH152',2);

insert into Employee values
('20EM220','Josh','Cyber Security','Rajajinagar,Mysore',7345298741,100000,'IT'),
('20EM221','Norma','Accountant','Yadavgiri,Mysore',9436190600,80000,'Accounts'),
('20EM222','Suresh','Receptionist','Vijayanagar 3rd stage,Mysore',8679113452,30000,'Reception'),
('20EM223','Alex','Cheif security','Jayanagar,Mysore',9021578451,85000,'Security'),
('20EM224','Rakesh','Deputy Housekeeper','Saraswatipuram,Mysore',7924548001,20000,'House keeping'),
('20EM225','Chirag','Hotel Manager','100 Akbar Road,Delhi',8254216421,80000,'House Keeping'),
('20EM226','Sudarshan','General Manager','501 Dolphin Hill,Vishakapatnam',7525189001,71000,'Human Resource'),
('20EM227','Skanda','House Keeper','5 Katari Bagh,Kochin',6218352926,40000,'House Keeping'),
('20EM228','Dhruv','Room Attendant','Vidyanagar,Davanagere',7251209431,45000,'House Keeping'),
('20EM229','Nandini','Maintenance Supervisor','107,Candolim,Goa',9217802341,60000,'Maintenance'),
('20EM210','Andrea','Chef','Paradise Beach,Pondicherry',721543890,75000,'Food Production');

insert into Customer values
('Kapil Sharma','21CID7534',7204678921,'21BNO2432',45,102,0,1,'2022-11-23','2022-11-24','kapil_sharma12@gmail.com'),
('Christian Harper','21CID5567',9807254879,'21BNO1344',32,201,0,2,'2022-12-13','2022-12-14','christianharper21@gmail.com'),
('Armaan Aggarwal','21CID5637',9721056034,'21BNO3658',38,001,0,3,'2022-11-23','2022-11-26','Armaan_Aggarwal56@gmail.com'),
('Amanda Bynes','21CID7684',9346576631,'21BNO7684',67,002,0,1,'2022-11-21','2022-11-10','amanda_bynes23@gmail.com'),
('Atlas Corrigan','21CID4356',8361947241,'21BNO4784',29,101,0,3,'2022-12-25','2022-12-28','altlasboston@gmail.com'),
('Kareem Janiyal','21CID4523',9154153312,'21BNO4567',30,111,0,2,'2022-09-23','2022-09-13','kareemjaniyal@gmail.com'),
('Manya Malhotra','21CID3215',9565321100,'21BNO6680',21,121,0,1,'2022-11-04','2022-11-06','manya123@gmail.com'),
('Mukul Ahuja','21CID1220',6468879722,'21BNO7781',24,301,0,3,'2022-05-16','2022-05-19','mukulahuja@gmail.com'),
('Damini Thakur','21CID3232',9488710892,'21BNO4560',23,141,0,2,'2022-02-24','2022-02-24','damini456@gmail.com'),
('Nethan Feraro','21CID1202',78235670076,'21BNO3673',25,134,0,3,'2022-01-01','2022-01-08','feraronet@gmail.com');


insert into Dependents values
("115INS553",'20EM220', "Jules Verene",  "Wife",30),
("123LNS376", '20EM220',"Betty James",  "Daughter",25),
("231YNS508",'20EM222', "Ramesh Yadav",  "Brother",45),
("994INS433", '20EM223',"Max Russo",  "Father",55),
("765INS093", '20EM223',"Sudha Shastri","Mother",70),
("347INS021", '20EM222',"Sakshi Sagar","Sister",46),
("116INS612",'20EM221',"Tarun Nambiyar","Son",12),
("924INS452",'20EM224',"Fawad Hussain","Son",29),
("102INS632",'20EM221',"Sundar Nadela","Child",10),
("302INS219",'20EM224',"Sasha Pearl","Daughter",19);

insert into FoodMenu values
('Paneer Makhani',250,'Vegetarian','21DC101','None',0),
('Veg Kolhapuri',210,'Vegetarian','21DC103','Vegetables',1),
('Tandoori Roti',40,'Vegetarian','21DC220','Butter, Garlic, Chilli',0),
('Jeera Rice',120,'Vegetarian','21DC105','Peas, Dal',0),
('Brownie Sizzler',160,'Contains Egg','21DC300','Chocolate Sauce',0),
('Cheese Nuggets',180,'Vegetarian','21DC108','Mayonnaise',0),
('Mozzerella Mushrooms',240,'Vegetarian','21CD110','Pudina Chutney',0),
('Raspberry Glazed Cake',160,'Contains Egg','21CD304','Raspberry Jelly or Sauce',0),
('Arrabiata Pasta',200,'Vegetarian','21CD112','Olives',1),
('Farmhouse Pizza',350,'Vegetarian','21CD122','Extra Cheese',1);

insert into Services values 
(1,0,1,1,0,1,1,1,101),
(1,0,0,0,1,0,0,1,102),
(1,1,0,0,1,1,1,0,201),
(1,0,1,1,1,0,1,0,001),
(1,1,0,0,1,1,1,0,002),
(0,1,1,0,0,0,0,0,301),
(0,1,0,1,0,0,0,0,111),
(0,1,0,0,0,0,0,0,121),
(0,1,1,0,0,1,0,0,141),
(0,1,1,1,0,0,0,0,134);

insert into Laundry values 
('Shirt','Linen',001,60,'2022-11-20','2022-11-21'),
('Dress','Silk',101,120,'2022-11-13','2022-11-15'),
('Jeans','Denim',002,50,'2022-10-27','2022-10-29'),
('Blazer','Woolen',102,150,'2022-11-30','2022-12-02'),
('Saree','Chiffon',201,250,'2022-10-09','2022-10-11');

insert into TaxiService values
("SUV",5,"123SUV388",500,001),
("Hatchback",1,"123HTB503",350,002),
("Compact",24,"123CMP239",200,101),
("SUV",7,"346SUV543",500,201),
("Minivan",15,"987MIV432",700,102),
("SUV",4,"123SUV309",50,101);

insert into BabySitting values
("Aaroh", 5, 001, 250),
("Amaya", 12, 002, 350),
("Ketan", 2, 101, 150),
("Ryena", 7, 201, 400),
("", 0, 102, 0);

show tables;
select * from Rooms;
select * from Department;
select * from Employee;
select * from Customer;
select * from Dependents;
select * from FoodMenu;
select * from Services;
select * from Laundry;
select * from TaxiService;
select * from BabySitting;

alter table Customer add constraint foreign key (CRoomNo) references Rooms(RoomNo) on delete cascade;
alter table taxiservice add constraint foreign key (TRNo) references Rooms(RoomNo) on delete cascade;
alter table babysitting add constraint foreign key (BSRNo) references Rooms(RoomNo) on delete cascade;

delete from babysitting where BSRNo = 301;
delete from dependents where ENo= '20EM222';  

alter table department modify NoOfEmp int not null;

update customer set BillAmt=(select price from Rooms where RoomNo = 002) + (select BPrice*NoHours from babysitting where BSRNo = 002) + (select tsprice*Duration from taxiservice where TRNo = 002) + (select price from Laundry where RNo = 002) where CRoomNo = 002;
update customer set BillAmt=(select price from Rooms where RoomNo = 001) + (select BPrice*NoHours from babysitting where BSRNo = 001) + (select tsprice*Duration from taxiservice where TRNo = 001) + (select price from Laundry where RNo = 001) where CRoomNo = 001;
update customer set BillAmt=(select price from Rooms where RoomNo = 102) + (select BPrice*NoHours from babysitting where BSRNo = 102) + (select tsprice*Duration from taxiservice where TRNo = 102) + (select price from Laundry where RNo = 102) where CRoomNo = 102;
update customer set BillAmt=(select price from Rooms where RoomNo = 201) + (select BPrice*NoHours from babysitting where BSRNo = 201) + (select tsprice*Duration from taxiservice where TRNo = 201) + (select price from Laundry where RNo = 201) where CRoomNo = 201;
-- update customer set BillAmt=(select price from Rooms where RoomNo = 101) + (select BPrice*NoHours from babysitting where BSRNo = 101) + (select tsprice*Duration from taxiservice where TRNo = 101) + (select price from Laundry where RNo = 101) where CRoomNo = 101;


select CarType, (tsprice*Duration) as cost from TaxiService group by CarType order by cost desc;
select BedType, RoomType from Rooms group by BedType;

select DishName from FoodMenu group by Spicy having Spicy=1;

alter table Department add constraint primary key(DeptName);
select EmpName, salary from Employee group by salary having salary>10000;

select * from Employee where EmpAddress Like '%Mysore%';
select * from Customer where Cname Not Like '%s%';

create or replace view Bill as select CName,CPhNo,BillAmt from Customer where BillAmt>(select avg(price) from Rooms);
select * from Bill;

create or replace view Budget as select Department,sum(Salary) from Employee group by Department;
select * from Budget;

create or replace view Food as select DishName,Dprice from FoodMenu where Dprice=(select min(DPrice) from FoodMenu);
select * from Food;

create or replace view Food as select DishName,Dprice from FoodMenu where Dprice=(select max(DPrice) from FoodMenu);
select * from Food;

select DeptNo,DeptName,NoOfEmp from Department dept where NoOfEmp>(select count(NoOfEmp) from Department where DeptNo=dept.DeptNo); 

alter table Services add tax int;
insert into Services values 
(1,0,1,1,0,1,1,1,101,null),
(1,0,0,0,1,0,0,1,102,null),
(1,1,0,0,1,1,1,0,201,null),
(1,0,1,1,1,0,1,0,001,null),
(1,1,0,0,1,1,1,0,002,null),
(0,1,1,0,0,0,0,0,301,null),
(0,1,0,1,0,0,0,0,111,null),
(0,1,0,0,0,0,0,0,121,null),
(0,1,1,0,0,1,0,0,141,null),
(0,1,1,1,0,0,0,0,134,null);
select * from Services;


insert into Dependents values("215INS553",'20EM223', "Julia Verene","GrandMother",80);
select * from Dependents;

select * from Rooms inner join Services on Rooms.RoomNo=Services.SRoomNo;

select Employee.EmpNo,Employee.EmpName,Employee.Salary from Employee
left join Department on Employee.Department=Department.DeptName order by Employee.Salary desc;


select Employee.EmpNo,Employee.EmpName,Employee.Salary from Employee
right join Department on Employee.Department=Department.DeptName order by Employee.Salary desc;


select EmpName,EmpPhNo,Department from Employee natural join Dependents;

select * from Rooms inner join Services on Rooms.RoomNo=Services.SRoomNo where BedType='Twin';