<?php
if (isset($_POST['update'])) {
    include_once('config.php');
    $id = $_POST['id'];
    $subject = $_POST['subject'];
    $hours = $_POST['hours'];
    

    $sql = "UPDATE student SET subject='$subject', hours='$hours' WHERE id='$id'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location: ?m=mapel');
    } else {
        include('index.php?m=mapel');
        echo'<script language="Javascript">';
            echo'alert("Data gagal diupdate")';
        echo '</script>';
    }
} else {
    echo "Jangan langsung eksekusi ke file ini, klik <a href='?m=mapel&s=add'>disini</a>";
}