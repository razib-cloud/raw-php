Create table if not exists products(
    id int auto_increment primary key,
    name varchar (255),
    description varchar (255) null,
    price double (10, 2) null,
    photo varchar (255) null,
    created_at timestamp default current_timestamp,
    updated_at timestamp null on update current_timestamp

);

insert into products (name, price) values
("Apple", 400.5),
("Banana", 20.5),
("Waterlemon", 300.5),
("Orange", 280.5),
("Apple", 350.5),