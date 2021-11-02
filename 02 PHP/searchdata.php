<html>
    <head>
        <title>Database Siswa - Search</title>
        <style>
            body {background-color: #b2bec3;}
        </style>
    </head>
    <body>
        <h1>Cari Data</h1>
        <form action="searchresult.php" method="post">
            <select name="Column">
                <option value="nis">NIS</option>
                <option value="nama_siswa">Nama Siswa</option>
                <option value="jenis_kelamin">Jenis Kelamin</option>
                <option value="alamat">Alamat</option>
                <option value="id_jurusan">Jurusan</option>
            </select>
            Masukkan pencarian kamu disini
            <input type ="text" type="text" name="Find">
            <input type ="submit" value="Find">
        </form>
    </body>
</html>