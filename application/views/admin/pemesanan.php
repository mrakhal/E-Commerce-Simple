<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-10">
		<table id="myTable" class="table table-striped table-bordered table-hover">
			<thead>
				<tr>
					<th>No</th>
					<th>Id Produk</th>
					<th>Username</th>
					<th>Nama Barang</th>
					<th>Banyak</th>
					<th>Harga</th>
					<th>Alamat</th>
					<th>Pesan</th>
					<th>Kota</th>
					<th>Negara</th>
					<th>Kode Pos</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($orders as $product) : ?>
				<tr>
					<td><?=$product->id?></td>
					<td><?=$product->product_id?></td>
					<td><?=$product->username?></td>
					<td><?=$product->nama_barang?></td>
					<td><?=$product->qty?></td>
					<td><?=$product->price?></td>
					<td><?=$product->address?></td>
					<td><?=$product->address2?></td>
					<td><?=$product->city?></td>
					<td><?=$product->state?></td>
					<td><?=$product->zipcode?></td>
					<td>
						<?=anchor(		'admin/pemesanan/delete/' . $product->id,
									'Delete',
									['class'=>'btn btn-danger btn-sm',
									 'onclick'=>'return confirm(\'Apakah Anda Yakin?\')'
									])
						?>
					</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
	<div class="col-md-1"></div>
</div>
