<?php

$db = new mysqli("localhost", "root", "", "raw_php_practice");




$createtable = "

Create table if not exists products(
    id int auto_increment primary key,
    name varchar (255),
    descripttion varchar (255) null,
    price double (10, 2) null,
    photo varchar (255) null,
    created_at timestamp default current_timestamp,
    updated_at timestamp null on update current_timestamp

);";

$db->query($createtable);




// $products = "

// insert into products (name, price) values
// ('Apple', 400.5),
// ('Banana', 20.5),
// ('Waterlemon', 300.5),
// ('Orange', 280.5),
// ('Apple', 350.5);";

// $db->query($products);
