<?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
<form method="post" action="<?php echo base_url(); ?>users/register">
<div class="form-group">
  <label>Nama Produk</label>
  <input type="text" class="form-control" name="title" placeholder="Masukan Nama Produk">
</div>
<div class="form-group">
  <label>Kategori</label>
  <br>
  <input type="radio" name="kategori" value="Laki-Laki"> Laki-Laki<br>
  <input type="radio" name="kategori" value="Perempuan"> Perempuan<br>
  <input type="radio" name="kategori" value="Unisex"> Unisex
</div>
<div class="form-group">
  <label>Deskripsi</label>
  <input type="text" class="form-control" name="description" placeholder="Masukan Deskripsi">
</div>
<div class="form-group">
  <label>Harga</label>
  <input type="text" class="form-control" name="price" placeholder="Masukan Harga">
</div>
<div class="form-group">
  <label>Gambar</label>
  <input type="file"  name="image">
</div>

<button name="submit" type="submit" class="btn btn-primary">Register</button>
</form>
