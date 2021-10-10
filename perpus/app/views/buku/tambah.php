<div class="row" align="center">
  
  <h1>Tambah Buku</h1>

  <form action="<?php echo base64_encode('buku/simpan'); ?>" method="POST" enctype="multipart/form-data">
    <br>
    Kode Buku <br>
    <input type="number" name="kd_buku" required><br>
    <br>
    Judul <br>
    <input type="text" name="judul" required><br>
    <br>
    Pengarang <br>
    <input type="text" name="pengarang" required><br>
    <br>
    Penerbit <br>
    <input type="text" name="penerbit" required><br>
    <br>
    Lokasi <br>
    <input type="text" name="lokasi" required><br>
    <br>
    Stok <br>
    <input type="text" name="stok" required><br>
    <br>

    <input type="submit" value="simpan" class="btn btn-success mt-2">
    <a href="<?php echo base64_encode('buku'); ?>" class="btn btn-primary mt-2">Kembali</a>
  </form>

</div>
