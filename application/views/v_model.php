<!DOCTYPE html>

<table border = 1 id="tabeltoko" class>
        <?php
        foreach ($data_toko_kirim as $data){
        ?>
            <tr>
                <td><?= $data->kode ?></td>
                <td><?= $data->nama_toko ?></td>
            </tr>
    <?php
    }
    ?>
    </table>


