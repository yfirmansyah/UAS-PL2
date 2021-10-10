<div class="row" align="center">
  
  <h1>Edit Buku</h1>

  <form action="<?php echo base64_encode('buku/update'); ?>" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="kd_buku" value="<?= $data['buku']['kd_buku']; ?>">
    Kode Buku <br>
    <input type="number" value="<?= $data['buku']['kd_buku']; ?>" required disabled><br>
    Judul Buku <br>
    <input type="text" name="judul" value="<?= $data['buku']['judul']; ?>" required ><br>
    Pengarang <br>
    <input type="text" name="pengarang" value="<?= $data['buku']['pengarang']; ?>" required><br>
    <br>
    Penerbit <br>
    <input type="text" name="penerbit" value="<?= $data['buku']['penerbit']; ?>" required><br>
    <br>
    Lokasi <br>
    <input type="text" name="lokasi" value="<?= $data['buku']['lokasi']; ?>" required><br>
    Stok <br>
    <input type="text" name="stok" value="<?= $data['buku']['stok']; ?>" required><br>
    <br>
    <input type="submit" value="simpan" class="btn btn-success mt-2">
    <a href="<?php echo base64_encode('buku'); ?>" class="btn btn-primary mt-2">Kembali</a>
  </form>

</div>
