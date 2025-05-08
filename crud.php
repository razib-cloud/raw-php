<?php

class Crud
{


    public function index()
    {
        global $db;
        $products = $db->query("select * from products;");
        return $products;
    }


    public function create()
    {
        $message = null;

        try {

            if (isset($_POST['submit'])) {
                global $db;
                $name = $_POST['name'];
                $price = $_POST['price'];
                $photo = $_FILES['photo']['name'];
                $photo_path = $_FILES['photo']['tmp_name'];
                $description = $_POST['description'];
                $db->query("insert into products(name,price,photo,description)values('$name', $price,'$photo','$description');");
                move_uploaded_file($photo_path, './img/' . $photo);
                $message = "Product Added";

                //    print_r($photo_path);
            }
        } catch (\Throwable $th) {
            print_r($th->getMessage());
        }
        return $message;
    }


    public function update() {}
    public function show() {}
    public function delete($id)
    {
        global $db;
        $db->query("delete from products where id=$id;");
    }
    public function find() {}
}
