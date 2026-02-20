<?php
//import class database pada folder config
require "../config/database.php";

class Product extends Database
{
    //nama table
    protected $table = "product";

    //mengambil seluruh data dari tabel products pada database
    public function show()
    {
        $select_all = "SELECT * FROM $this->table";
        $data = mysqli_query($this->connect, $select_all);
        $rows = mysqli_fetch_all($data, MYSQLI_ASSOC);
        return $rows;
    }

    //menambahkan data ke tabel products pada database
    public function store($name_product, $description, $brand, $price)
    {
        $timestamp = date("Y-m-d H:i:s");
        $insert = "INSERT INTO $this->table VALUES ( NULL, '$name_product', '$description', '$brand', '$price', '$timestamp')";
        $query = mysqli_query($this->connect, $insert);
        return $query ? true : false;
    }

    //mengambil data dari tabel products pada database berdasarkan id
    public function edit($id)
    {
        $select_by_id = "SELECT * FROM $this->table WHERE id='$id'";
        $data = mysqli_query($this->connect, $select_by_id);
        $rows = mysqli_fetch_assoc($data);
        return $rows;
    }

    //mengupdate seluruh data dari tabel products pada database berdasarkan id
    public function update($id, $name_product, $description, $brand, $price)
    {
        $update = "UPDATE $this->table SET
            name_product = '$name_product',
            description = '$description',
            brand = '$brand',
            price = '$price'
            WHERE $this->table.id = '$id'";
        $query = mysqli_query($this->connect, $update);
        return $query ? true : false;
    }

    //menghapus data dari tabel products pada database berdasarkan id
    public function destroy($id)
    {
        $query = mysqli_query($this->connect, "DELETE FROM $this->table WHERE $this->table.id = '$id'");
        return $query ? true : false;
    }
}