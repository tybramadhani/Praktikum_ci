<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="utf-8">
	<title>Data Shop</title>
	
</head>
<body>
<table border = 1>
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
	
</body>
</html>

