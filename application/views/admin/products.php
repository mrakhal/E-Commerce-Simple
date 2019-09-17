<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-10">
		<a href="<?php echo base_url(); ?>admin/users/register"><div class="btn btn-primary btn-right">
			Tambah Produk
		</div></a>

		<table id="myTable" class="table table-striped table-bordered table-hover">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Produk</th>
					<th>Kategori</th>
					<th>Gambar</th>
					<th>Harga</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($products as $product) : ?>
				<tr>
					<td><?=$product->id?></td>
					<td><?=$product->title?></td>
					<td><?=$product->kategori?></td>
					<td><img src="<?php echo base_url(''); ?>assets/images/products/<?php echo $product->image; ?>" /></td>
					<td><?=$product->price?></td>
					<td>
						<button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#edit<?php echo $product->id; ?>">Edit</button>
						<?=anchor(	'admin/products/delete/' . $product->id,
									'Delete',
									['class'=>'btn btn-danger btn-sm',
									 'onclick'=>'return confirm(\'Apakah Anda Yakin?\')'
									])
						?>
					</td>
				</tr>
				<div id="edit<?php echo $product->id; ?>" class="modal fade" role="dialog">
                        <!--                    echo kan php dari foreach di atas dengan objek nim ke dalam id edit-->
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"></button>
                                    <h4 class="modal-title">Edit Data Produk</h4>
                                </div>
                                <?php echo form_open("admin/products/edit"); ?>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label class="control-label" for="title">Nama Produk</label>
                                          <input type="text" name="title" class="form-control"  value="<?php echo $product->title;?>" id="title">
                                        <input type="hidden" name="id" class="form-control" value="<?php echo $product->id;?>" id="id" required>

                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="kategori">Kategori</label>
																				<br>
																			  <input type="radio" name="kategori" value="Laki-Laki"> Laki-Laki<br>
																			  <input type="radio" name="kategori" value="Perempuan"> Perempuan<br>
																			  <input type="radio" name="kategori" value="Unisex"> Unisex
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="description">Deskripsi</label>
                                        <input type="text" name="description" class="form-control" value="<?php echo $product->description;?>" id="description" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="price">Harga</label>
                                        <input type="text" name="price" class="form-control" value="<?php echo $product->price;?>" id="price" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="image">Gambar</label>
                                        <input type="file" name="image" class="form-control" value="<?php echo $product->image;?>" id="image" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" data-dismiss="modal" class="btn btn-danger">Close</button>
                                    <input type="submit" class="btn btn-primary" name="edit" value="Edit">
                                </div>
                                <?php echo form_close(); ?>
                            </div>
                        </div>
                    </div>

				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
	<div class="col-md-1"></div>
</div>
