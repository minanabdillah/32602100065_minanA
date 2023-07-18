<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="title">

<main>

<h1>Edit Data Mahasiswa</h1>
</div>
<div class="form">
<form action="/crud/editan" method="POST"> <div class="input">
<label for="nim">Nim</label>
<input type="text" id="nim">
</div>
<div class="input">
<label for="nama">Nama</label>
<input type="text" name="nama" id="nama">
</div>
<div class="input">
<label for="prodi">Prodi</label>
<input type="text" name="prodi" id="prodi">
</div>
<div class="input">
<label for="univ">Universitas</label> <input type="text" name="univ" id="univ">
</div>
<div class="input">
<label for="no_hp">Nomor Handphone</label>
<input type="text" name="no_hp" id="no_hp">
</div>

</form>

</div>

</main>

<?= $this->endSection(); ?>
<div class="button">
<button type="submit" value="Submit">Submit</button>
</div>