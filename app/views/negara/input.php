<h2>Input Negara</h2>

<form action="<?php echo URL; ?>/negara/save" method="post">
    <table>
        <tr>
            <td>KODE</td>
            <td><input type="text" name="kode" required></td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="nama" required></td>
        </tr>
        <tr>
            <td>CAPITAL</td>
            <td><input type="text" name="capital" required></td>
        </tr>
        <tr>
            <td>PRESIDEN</td>
            <td><input type="text" name="presiden" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>