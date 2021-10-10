<div class="row" align="center">
  
<h1>Daftar Buku</h1>

<table class="table" border="1 px">
    <thead>
      <tr>
        <th> Kode Buku </th>
        <th> Judul </th>
        <th> Pengarang </th>
        <th> Penerbit </th>
        <th> Lokasi </th>
        <th> Stok </th>
        <th> Aksi </th>
      </tr>
    </thead>
    <tbody>
        <?php foreach ($data['buku'] as $buku) :?>
        <tr>
          <td><?= $buku['kd_buku'];?></td>
          <td><?= $buku['judul'];?></td>
          <td><?= $buku['pengarang'];?></td>
          <td><?= $buku['penerbit'];?></td>
          <td><?= $buku['lokasi'];?></td>
          <td><?= $buku['stok'];?></td>
          <td>
            <a href="<?php echo base64_encode('$buku/edit/'.$buku['kd_buku']); ?>" class="badge badge-primary badge-pill">Edit</a>
            <a href="<?php echo base64_encode('buku/hapus/'.$buku['kd_buku']); ?>" onclick="return confirm('Are you sure?');" class="badge badge-primary badge-pill">Hapus</a>
          </td>
        </tr>
       <?php endforeach; ?>
    </tbody>
</table>
<br>
<a href="<?php echo base64_encode('buku/tambah'); ?>" class="btn btn-success mt-2">Tambah Buku</a>
<a href="<?php echo base64_encode('home'); ?>" class="btn btn-success mt-2">Home</a>
</div>
