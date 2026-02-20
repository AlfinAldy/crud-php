<?php
//import class database pada folder config
require "../config/database3.php";

class Product extends Database
{
    //nama table
    protected $table = "baju";

    //mengambil seluruh data dari tabel products pada database
    public function show()
    {
        $select_all = "SELECT * FROM $this->table";
        $data = mysqli_query($this->connect, $select_all);
        $rows = mysqli_fetch_all($data, MYSQLI_ASSOC);
        return $rows;
    }

    //menambahkan data ke tabel products pada database
    public function store($clothes_name, $description, $vendor, $unit, $price)
    {
        $timestamp = date("Y-m-d H:i:s");
        $insert = "INSERT INTO $this->table VALUES ( NULL, '$clothes_name', '$description', '$vendor','$unit', '$price', '$timestamp')";
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
    public function update($id, $clothes_name, $description, $vendor, $unit, $price)
    {
        $update = "UPDATE $this->table SET
            clothes_name = '$clothes_name',
            description = '$description',
            vendor = '$vendor',
            unit = '$unit',
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