<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="utf-8">
	<title>Data Shop</title>
	
</head>
<body>
	<!-- <center><?php echo anchor('Download_ci/datashop','datashop'); ?></center> -->
	<table style="margin:20px auto;" border="1">
            <tr>
                <td>Kode</td>
				<td>Kode Toko</td>
				<td>Link</td>
				<td>Judul</td>
                <td>Judul Toko</td>
                <td>Status Barang</td>
                <td>Harga</td>
                <td>Harga Promo</td>
                <td>Harga Normal</td>
                <td>Mark Up</td>
                <td>Suplier</td>
                <td>Images</td>
                <td>Deskripsi</td>
                <td>Gambar 1</td>
                <td>Gambar 2</td>
                <td>Posted</td>
                <td>Media Id</td>
                
			</tr>
            <?php 
		    $no = 1;
		    foreach($datashop as $u){ 
		    ?>
            <tr>
				<td><?php echo $u->kode;?></td>
				<td><?php echo $u->kode_toko;?></td>
				<td><?php echo $u->link;?></td>
				<td><?php echo $u->judul;?></td>
                <td><?php echo $u->judul_toko;?></td>
                <td><?php echo $u->status_br;?></td>
                <td><?php echo $u->harga;?></td>
                <td><?php echo $u->harga_promo;?></td>
                <td><?php echo $u->harga_normal;?></td>
                <td><?php echo $u->mark_up;?></td>
                <td><?php echo $u->suplier;?></td>
                <td><?php echo $u->images;?></td>
                <td><?php echo $u->deskripsi;?></td>
                <td><?php echo $u->gambar1;?></td>
                <td><?php echo $u->gambar2;?></td>
                <td><?php echo $u->posted;?></td>
                <td><?php echo $u->mediaId;?></td>
                <!-- <td>
			      <?php echo anchor('crud/edit/'.$u->id,'Edit'); ?>
                              <?php echo anchor('crud/hapus/'.$u->id,'Hapus'); ?>
			</td> -->
			</tr>
            <?php } ?>
</table>            
</body>
</html>

