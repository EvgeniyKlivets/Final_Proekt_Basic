CREATE TABLE  Content(id int primary key,name varchar(50) not null unique,body text);
insert into  Content (id, name, body) values (1, 'navigation', '{"logo":{"images":"images\/images\/cofe_chay.png","link":"\/"},"links":[{"title":"Home","href":"\/","anchor":false},{"title":"About","href":"#about","anchor":true},{"title":"Coffe","href":"#coffe","anchor":true},{"title":"Gallery","href":"#gallery","anchor":true},{"title":"Blog","href":"#blog","anchor":true},{"title":"cCntacts","href":"#contacts","anchor":true}]}');
insert into  Content (id, name, body) values (2, 'banner','{"slides":[{"title":"Do you like a coffe?","description":"Start your day with a black Coffe","button":{"text":"Buy now","href":"#","is_popup":true}},{"title":"Do you like a tea?","description":"Tea it\u2019s your the best friend","button":{"text":"Buy now","href":"#","is_popup":false}},{"title":"Coffe vs tea","description":"Coffe or tea? How you think?","button":{"text":"Buy now","href":"#","is_popup":false}}]}');
insert into  Content (id, name, body) values (3, 'about','{"sides":{"left":{"href":"#","image":"images\/images\/play-icon.png"},"right":{"caprion":"Live coffe making process","title":"We Telecast our Coffe Making Live","txt":"We are here to listen from you deliver exellence","image_signature":"images\/images\/signature.png"}}}');
insert into  Content (id, name, body) values (4, 'products','{"title":"What kind of Coffe we server for you","txt":"Who are in extremely love with eco friendly system."}');

CREATE TABLE  Users(id int  primary key, 
is_admin int,
name varchar(100) not null,
surname varchar (100) not null,
balance float default 0, 
birthdate date not null,
email varchar (255) not null,
password Text not null);

CREATE TABLE Orders(id int  primary key,users_id int,product_id int,options text,quantity int,price float default 0);

/*foreign key (users_id) references users(id),
foreign key (product_id) references products(id)*/


CREATE TABLE  Products (id int  primary key,title varchar(100)  unique, price float,quantity int default 0,description text,is_option int);
insert into Products (id, title, price, quantity,description, is_option) values (1,'Cappuccino', 5.05, 20, 'Coffe(expreso)+milk', 0);
insert into Products (id, title, price, quantity,description, is_option) values (2,'Tea', 3.55, 20, 'Black tea + imbir', 0);
insert into Products (id, title, price, quantity,description, is_option) values (3,'Chokolate', 0.55, 25, 'Chokolate', 0);

insert into Products (id, title, price, quantity,description, is_option) values (4,'Latte', 7.05, 10, 'Coffe(easy)+milk', 0);
insert into Products (id, title, price, quantity,description, is_option) values (5,'Green tea', 2.55, 15, 'Green tea + limon', 0);
insert into Products (id, title, price, quantity,description, is_option) values (6,'Rahat', 1.55, 10, 'Rahat', 0);

insert into Products (id, title, price, quantity,description, is_option) values (7,'Americano', 3.05, 15, 'Coffe', 0);
insert into Products (id, title, price, quantity,description, is_option) values (8,'Tea black', 2.55, 30, 'Tea Black', 0);
insert into Products (id, title, price, quantity,description, is_option) values (9,'Sweetness', 2.55, 10, 'Sweetness', 0);

insert into Products (id, title, price, quantity,description, is_option) values (10,'Sirup Chocolate', 0.50, 500, 'with chokolate', 0);
insert into Products (id, title, price, quantity,description, is_option) values (11,'Sirup Cocount', 0.50, 500, 'with cocount', 0);
insert into Products (id, title, price, quantity,description, is_option) values (12,'Sirup Nut', 0.50, 500, 'with nut', 0);

insert into Products (id, title, price, quantity,description, is_option) values (13,'Milk', 2.50, 500, 'double milk', 0);
insert into Products (id, title, price, quantity,description, is_option) values (14,'Water', 0.85, 500, 'soda water', 0);
insert into Products (id, title, price, quantity,description, is_option) values (15,'Pepsi', 1.50, 500, 'pepsi', 0);
select*from Content;
select*from Users;
select*from Orders;
select*from Products;

ALTER TABLE users ADD COLUMN birthdate date not null AFTER surname;
Update products SET quantity = quantity -1 where id in (3,6,9,10,11,12,15);
select * from products where id in (3,6,9,10,11,12,15);
/*
Delete from Content where id=2;
Drop table
Update /*table*/ /*Set /*incert*/ /*= 1 where id = 1;*/