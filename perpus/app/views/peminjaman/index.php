<div class="row" align="center">
  
<h1>Daftar Peminjaman</h1>

<table class="table" border="1 px">
    <thead>
      <tr>
        <th> Kode Peminjaman </th>
        <th> Nama Peminjam </th>
        <th> Nama Buku </th>
        <th> Tanggal Peminjaman </th>
        <th> Tanggal Kembali </th>
        <th> Aksi </th>
      </tr>
    </thead>
    <tbody>
        <?php foreach ($data['peminjaman'] as $peminjaman) :?>
        <tr>
          <td><?= $peminjaman['kd_pinjam'];?></td>
          <td><?= $peminjaman['nama_pinjam'];?></td>
          <td><?= $peminjaman['nama_buku'];?></td>
          <td><?= $peminjaman['tgl_pinjam'];?></td>
          <td><?= $peminjaman['tgl_kembali'];?></td>
          <td>
            <a href="<?php echo base64_encode('peminjaman/edit/'.$peminjaman['kd_pinjam']); ?>" class="badge badge-primary badge-pill">Edit</a>
            <a href="<?php echo base64_encode('peminjaman/hapus/'.$peminjaman['kd_pinjam']); ?>" onclick="return confirm('Are you sure?');" class="badge badge-primary badge-pill">Hapus</a>
          </td>
        </tr>
       <?php endforeach; ?>
    </tbody>
</table>
<br>
<a href="<?php echo base64_encode('peminjaman/tambah'); ?>" class="btn btn-success mt-2">Tambah Peminjaman</a>
<a href="<?php echo base64_encode('home'); ?>" class="btn btn-success mt-2">Home</a>

</div>
