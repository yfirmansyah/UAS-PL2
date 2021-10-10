<div class="row" align="center">
  
<h1>Daftar Anggota</h1>

<table class="table" border="1 px">
    <thead>
      <tr>
        <th> Kode Anggota </th>
        <th> Username </th>
        <th> Password </th>
        <th> Level </th>
        <th> Status </th>
        <th> Aksi </th>
      </tr>
    </thead>
    <tbody>
        <?php foreach ($data['anggota'] as $anggota) :?>
        <tr>
          <td><?= $anggota['kd_user'];?></td>
          <td><?= $anggota['username'];?></td>
          <td><?= $anggota['password'];?></td>
          <td><?= $anggota['level'];?></td>
          <td><?= $anggota['status'];?></td>
          <td>
            <a href="<?php echo base64_encode('anggota/edit/'.$anggota['kd_user']); ?>" class="badge badge-primary badge-pill">Edit</a>
            <a href="<?php echo base64_encode('anggota/hapus/'.$anggota['kd_user']); ?>" onclick="return confirm('Are you sure?');" class="badge badge-primary badge-pill">Hapus</a>
          </td>
        </tr>
       <?php endforeach; ?>
    </tbody>
</table>
<br>
<a href="<?php echo base64_encode('anggota/tambah'); ?>" class="btn btn-success mt-2">Tambah Anggota</a>
<a href="<?php echo base64_encode('home'); ?>" class="btn btn-success mt-2">Home</a>

</div>
