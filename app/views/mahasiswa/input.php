<h2>Input Mahasiswa</h2>

<form action="<?php echo URL; ?>/mahasiswa/save" method="post">
    <table>
        <tr>
            <td>NIM</td>
            <td><input type="text" name="nim" required></td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="nama" required></td>
        </tr>
        <tr>
            <td>JURUSAN</td>
            <td><input type="text" name="jurusan" required></td>
        </tr>
        <tr>
            <td>PRODI</td>
            <td><input type="text" name="prodi" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>