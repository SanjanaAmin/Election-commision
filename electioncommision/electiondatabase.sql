create database electoraldatabase
use electoraldatabase

create table Adhar(
A_Fname varchar(20),
A_Mname varchar(20),
A_Lname varchar(20),
A_id varchar(10) primary key,
A_dob date,
A_gender char(1) check (A_gender in('M','F')),
A_address varchar(20),
A_contact varchar(10)
)
drop table Adhar

insert into Adhar values('sanjana','p','amin','4523','2002/08/20','F','fxhhjx','781718')

create table Voter(
V_id int primary key identity(111,1),
V_Fname varchar(20),
V_Mname varchar(20),
V_Lname varchar(20),
V_age int check (V_age>17),
A_id varchar(10) references Adhar(A_id)
)
drop table Voter

create table Party(
P_id int primary key identity(1,1),
p_name varchar(10) unique
)
drop table Party

create table constituency(
ct_id varchar(10) primary key,
ct_name varchar(20) unique
)

drop table constituency


create table Electioncommission(
   candidate_no int primary key identity(1,1),
   candidate_FName varchar(10),
   candidate_MName varchar(10),
   candidate_LName varchar(10),
   criminal varchar(3),
   V_id int references Voter(V_id) , 
   Ac_id varchar(10) references Adhar(A_id),
   P_id int references Party(p_id),
   Ct_id varchar(10) references Constituency(ct_id)
   )

drop table Electioncommission

select * from party



