<?php
require '../models/Product.php';

//membuat objek dari class product
$model_product = new Product();
if (isset($_POST['submit'])) {


    //kirim data ke function store
    $model_product->store($_POST['name_product'], $_POST['description'], $_POST['brand'],$_POST['price']);
    //set session pesan berhasil di simpan
    $_SESSION["message"]='Berhasil menambahkan data product !';
    //alihkan kembali ke index.php
    header("location:index.php");


}else if (isset($_POST['update'])) {


    //kirim data terbaru ke function update
    $model_product->update($_POST['id'],$_POST['name_product'], $_POST['description'], $_POST['brand'],$_POST['price']);
    //set session pesan berhasil di update
    $_SESSION["message"]='Berhasil mengupdate data product !';
    //alihkan kembali ke index.php
    header("location:index.php");


}else if (isset($_POST['destroy'])) {


    //kirim id data yang ingin dihapus ke function destroy
    $model_product->destroy($_POST['id']);
    //set session pesan berhasil di hapus
    $_SESSION["message"]='Berhasil menghapus data product !';
    //alihkan kembali ke index.php
    header("location:index.php");


}
