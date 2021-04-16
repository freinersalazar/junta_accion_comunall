create table habitantes(
    hab_id varchar (20) not null,
    hab_nombre varchar (100) not null,
    hab_apellido varchar (100) not null,
    hab_fecha_nacimiento date not null,
    hab_fecha_inscrito date not null,
    hab_valor_inscrito float not null,
    primary key (hab_id)
    );
    
    insert into habitantes VALUES
('1020','edinson','zubieta','2000-04-15','2021-04-15',1500000);
insert into habitantes VALUES
('1030','jose','rodriguez','1994-04-15','2021-04-15',1800000);
insert into habitantes VALUES
('1040','arturo','tamares','1789-04-15','2021-04-15',1000000);
insert into habitantes VALUES
('1050','juan','tovar','2009-04-15','2021-04-15',1900000);
 