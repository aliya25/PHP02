<HTML>
    <head>
    <title>Database Siswa - Delete</title>
    <style>
            body {background-color: #b2bec3;}
        </style>
    </head>

<h1>Hapus Data Siswa</h1>

<?php
    include './koneksi.php';
    //$id_buku = $_GET["id_buku"];
    //$value = isset($_POST['value']) ? $_POST['value'] : '';
    $id_buku = isset($_GET['id_buku']) ? $_POST['id_buku'] : '';
    // $id_buku = isset($_POST['id_buku']) ? $_POST['id_buku'] : '';

    $sql = "DELETE FROM buku WHERE id_buku='$id_buku'";

    if($conn->query($sql) === TRUE){
        echo "Data successfully erased! <br>";
        echo "<a href='tampildata.php'><button>Back</button></a><br>";
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

?>
</HTML>