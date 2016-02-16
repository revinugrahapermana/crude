<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/style.css'); ?>">
	<title><?php $judul; ?></title>
</head>
<body>
<div class="container">
<?php echo form_open('belajarcrud/tambahbarang'); ?>
<?php echo validation_errors(); ?>

<table>
<tr>
	<td>Kode Barang</td>
	<td> : </td>
	<td><?php echo form_input('kode_barang',set_value('kode_barang')); ?></td>
</tr>
<tr>
	<td>Nama Barang</td>
	<td> : </td>
	<td><?php echo form_input('nama_barang',set_value('nama_barang')); ?></td>
</tr>
<tr>
	<td>Quantity</td>
	<td> : </td>
	<td><?php echo form_input('qty',set_value('qty')); ?></td>
</tr>
<tr>
	<td>Harga</td>
	<td> : </td>
	<td><?php echo form_input('harga',set_value('harga')); ?></td>
</tr>
<tr>
<td><?php echo form_submit('add','Tambah Barang'); ?>
<?php echo form_submit('reset','Reset'); ?></td>
</tr>
</table>
<?php echo form_close(); ?>
<?php echo anchor('belajarcrud','<button type="button" class="btn btn-warning" id="bt-s">Kembali</button>'); ?>

</div>
</body>
</html>