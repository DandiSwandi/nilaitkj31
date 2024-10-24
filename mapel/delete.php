<?php
if (isset($_GET['id'])) {
    include_once('config.php');
    $id = $_GET['id'];


    $sql = "DELETE FROM subjects WHERE id='$id'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location: ?m=mapel');
    } else {
        include('index.php?m=mapel');
        echo '<script language="JavaSricpt">';
        echo 'alert ("Data gagal dihapus")';
        echo '</script>';
    }
} else {
    echo "Jangan langsung eksekusi ke file ini, klik <a href='?m=mapel&s=add'>disini</a>";
}