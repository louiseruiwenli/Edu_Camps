create table customer(
	custID	varchar(20),
	name	varchar(30),
	password	varchar(20),
	primary key (custID));

create table custCamp(
	custID	varchar(20),
	campID	varchar(20),
	foreign key (custId) references customer(custId))
	foreign key (campID) references camp(campID));

create table camp(
	campID	varchar(10),
	campName	varchar(40),
	week	varchar(20),
	game	varchar(50),
	primary key (campID));



insert into customer values('000001', 'James Smith', 'james123');
insert into customer values('000002', 'Alice Bush', 'alice234');
insert into customer values('000003', 'Cathy Ye', 'cathy345');

insert into camp values('A1', 'Yosemite National Park Camp', '2-week', 'Pacman, Smart Umbrella, Sightseeing');
insert into camp values('A2', 'YellowStone National Park Camp', '2-week', 'Pong, Hovercraft, Swimming');
insert into camp values('A3', 'Zion National Park Camp', '2-week', 'Breakout, Robot Movement, Hiking');
insert into camp values('B1', 'Golden Gate Park Camp', '2-week', 'Mini Pool, Virtual Robot, Art Museum');

insert into custCamp values('000001','A2');
insert into custCamp values('000001','B1');
insert into custCamp values('000002','A3');
insert into custCamp values('000003','A1');