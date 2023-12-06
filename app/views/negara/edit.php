<h2>Edit Negara</h2>

<form action="<?php echo URL; ?>/negara/update" method="post">
    <input type="hidden" name="id" value="<?php echo $data['row']['negara_id']; ?>">
    <table>
        <tr>
            <td>NIM</td>
            <td><input type="text" name="kode" value="<?php echo $data['row']['negara_kode']; ?>" required></td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="nama" value="<?php echo $data['row']['negara_nama']; ?>" required></td>
        </tr>
        <tr>
            <td>JURUSAN</td>
            <td><input type="text" name="capital" value="<?php echo $data['row']['negara_capital']; ?>" required></td>
        </tr>
        <tr>
            <td>PRODI</td>
            <td><input type="text" name="presiden" value="<?php echo $data['row']['negara_presiden']; ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>