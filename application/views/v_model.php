<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="utf-8">
	<title>Data Shop</title>
	<link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/css/jquery.dataTables.min.css'?>" rel="stylesheet">
</head>
<body>

<div class="container">
	<h1>Data <small>Shop</small></h1>
	<table class="table table-bordered table-striped" id="mydata">
		<thead>
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
		</thead>
		<tbody>
			<?php 
				foreach($data->result_array() as $i):
					$kode=$i['kode'];
					$kode_toko=$i['kode_toko'];
					$link=$i['link'];
                    $judul=$i['judul'];
                    $judul_toko=$i['judul_toko'];
                    $status_br=$i['status_br'];
                    $harga=$i['harga'];
                    $harga_promo=$i['harga_promo'];
                    $harga_normal=$i['harga_normal'];
                    $mark_up=$i['mark_up'];
                    $suplier=$i['suplier'];
                    $images=$i['images'];
                    $deskripsi=$i['deskripsi'];
                    $gambar1=$i['gambar1'];
                    $gambar2=$i['gambar2'];
                    $posted=$i['posted'];
                    $mediaId=$i['mediaId'];
			?>
			<tr>
				<td><?php echo $kode;?></td>
				<td><?php echo $kode_toko;?></td>
				<td><?php echo $link;?></td>
				<td><?php echo $judul;?></td>
                <td><?php echo $judul_toko;?></td>
                <td><?php echo $status_br;?></td>
                <td><?php echo $harga;?></td>
                <td><?php echo $harga_promo;?></td>
                <td><?php echo $harga_normal;?></td>
                <td><?php echo $mark_up;?></td>
                <td><?php echo $suplier;?></td>
                <td><?php echo $images;?></td>
                <td><?php echo $deskripsi;?></td>
                <td><?php echo $gambar1;?></td>
                <td><?php echo $gambar2;?></td>
                <td><?php echo $posted;?></td>
                <td><?php echo $mediaId;?></td>
                
			</tr>
			<?php endforeach;?>
		</tbody>
	</table>
	
</div>

<script src="<?php echo base_url().'assets/js/jquery-2.2.4.min.js'?>"></script>
<script src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
<script src="<?php echo base_url().'assets/js/jquery.dataTables.min.js'?>"></script>
<script src="<?php echo base_url().'assets/js/moment.js'?>"></script>
<script>
	$(document).ready(function(){
		$('#mydata').DataTable();
	});
</script>
</body>
</html>