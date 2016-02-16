<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/style.css'); ?>">
	<title></title>
</head>
<body>
<div class="container">
<?php echo form_open('belajarcrud/ubah/'.$kode_barang->kode_barang); ?>
<?php echo validation_errors(); ?>

<table width="378" height="200" border="0">
<tr>
	<td>Kode Barang</td>
	<td> : &nbsp;&nbsp;&nbsp;&nbsp;</td>
	<td><?php echo form_input('kode_barang',$kode_barang->kode_barang,set_value('kode_barang')); ?></td>
</tr>
<tr>
	<td>Nama Barang</td>
	<td> : </td>
	<td><?php echo form_input('nama_barang',$kode_barang->nama_barang,set_value('nama_barang')); ?></td>
</tr>
<tr>
	<td>Quantity</td>
	<td> : </td>
	<td><?php echo form_input('qty',$kode_barang->qty,set_value('qty')); ?></td>
</tr>
<tr>
	<td>Harga</td>
	<td> : </td>
	<td><?php echo form_input('harga',$kode_barang->harga,set_value('harga')); ?></td>
</tr>
<tr>
<td><button class="btn btn-primary btn-sm" id="bt-s"><?php echo 'Ubah Data'; ?></button>
<button class="btn btn-danger btn-sm" id="bt-s"><?php echo 'Reset'; ?></button>
</td>
</tr>
</table>
<?php echo form_close(); ?>
<?php echo anchor('belajarcrud','<button type="button" class="btn btn-warning" id="bt-s">Kembali</button>'); ?>

</div>

</body>
</html>