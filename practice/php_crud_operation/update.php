<?php

include "connection.php";

$update=$db->exec("update siswa set nama='".$_POST['nama']."',pekerjaan='".$_POST['pekerjaan']."'where id_siswa=".$_POST['id_siswa']);

{
    header("Location:index.php");
}