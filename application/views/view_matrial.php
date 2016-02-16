<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/style.css'); ?>">
	<title><?php echo $judul; ?></title>
</head>
<body>
	
	<div class="container">
	<?php echo anchor('belajarcrud/tambahbarang','<button type="button" class="btn btn-success" id="bt-s">Tambah Barang</button>') ?>

	<table class="table table-bordered table-hover">
		<tr>
			<td align="center">Kode Barang</td>
			<td align="center">Nama Barang</td>
			<td align="center">Qty</td>
			<td align="center">Harga</td>
			<td align="center">Aksi</td>
		</tr>
		<?php foreach ($barang as $row ): ?>
		<tr>
			<td align="center"> <?php echo $row->kode_barang; ?> </td>
			<td align="left"><?php echo $row->nama_barang; ?></td>
			<td align="center"><?php echo $row->qty; ?></td>
			<td align="right"><?php echo $row->harga; ?></td>
			<td align="center">
				<?php echo anchor('belajarcrud/ubah/'.$row->kode_barang,'<button type="button" class="btn btn-primary btn-xs">Edit</button>'); ?>
				<?php echo anchor('belajarcrud/delete/'.$row->kode_barang,'<button type="button" class="btn btn-danger btn-xs">Hapus</button>'); ?>
			</td>
		</tr>
		<?php endforeach; ?>
		</table>
	</div>

	</body>
	</html>