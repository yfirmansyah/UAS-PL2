<div class="row" align="center">
  
  <h1>Edit Peminjaman</h1>

  <form action="<?php echo base64_encode('peminjaman/update'); ?>" method="POST" enctype="multipart/form-data">
  <input type="hidden" name="kd_pinjam" value="<?= $data['peminjaman']['kd_pinjam']; ?>">
  Kode Peminjaman <br>
    <input type="number" value="<?= $data['peminjaman']['kd_pinjam']; ?>" required disabled><br>
  Nama Peminjam <br>
    <input type="text" name="nama_pinjam" value="<?= $data['peminjaman']['nama_pinjam']; ?>" required><br>
  Nama Buku <br>
    <input type="text" name="nama_buku" value="<?= $data['peminjaman']['nama_buku']; ?>" required><br>
  Tanggal Pinjam <br>
    <input type="date" name="tgl_pinjam" value="<?= $data['peminjaman']['tgl_pinjam']; ?>" required><br>
  Tanggal Kembali <br>
    <input type="date" name="tgl_kembali" value="<?= $data['peminjaman']['tgl_kembali']; ?>" required><br>
     
    <input type="submit" value="simpan" class="btn btn-success mt-2">
    <a href="<?php echo base64_encode('peminjaman'); ?>" class="btn btn-primary mt-2">Kembali</a>
  </form>

</div>