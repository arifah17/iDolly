<style type="text/css">

table, th, td {
	border: 1px solid black;
    border-collapse: collapse;
}

th, td {
    padding: 5px;
}
</style>
<body>
<table style="width: 100%;">
	<thead>
		<td>Produk</td>
		<td>Jumlah Produk</td>
		<td>Total harga</td>
		<td>Status</td>
		<td> Action </td>
	</thead>
	<tbody>
	<form method="post" action="<?php echo base_url().'index.php/Home/history'?>">
		<?php foreach ($data as $x) { ?>
		<tr>
			<td><input type= "checkbox" name="item[]" value="<?=$x['kode_barang']?>"></input></td>
			<td><?= $x['product'] ?></td>
			<td><?= $x['jumlah_product'] ?></td>
			<td><?= $x['total_bayar'] ?></td>
			<td><?= $x['status'] ?></td>
		</tr>
		<?php } ?>
	</tbody>
</table><br>
<input type="submit" value="Delete">
</form>
<a href="<?= base_url() ?>"><button>Back</button></a>
</body>