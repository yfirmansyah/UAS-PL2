<div class="row" align="center">
  
  <h1>Edit Anggota</h1>

  <form action="<?php echo base64_encode('anggota/update'); ?>" method="POST" enctype="multipart/form-data">
  <input type="hidden" name="kd_user" value="<?= $data['anggota']['kd_user']; ?>">
  Kode User <br>
    <input type="number" value="<?= $data['anggota']['kd_user']; ?>" required disabled><br>
  Username <br>
    <input type="text" name="username" value="<?= $data['anggota']['username']; ?>" required><br>
    Password <br>
    <input type="text" name="password" value="<?= $data['anggota']['password']; ?>" required><br>
    Level <br>
    <select class="form-control" name="level">
        <option value="">Pilih</option>
        <option value="1">Anggota</option>
        <option value="2">Petugas</option>
        <option value="3">Umum</option>
        <option value="4">Kepala</option>
    </select><br>
    Status <br>
    <select class="form-control" name="status">
        <option value="">Pilih</option>
        <option value="1">Aktif</option>
        <option value="2">Non Aktif</option>
    </select>
    <br><br>

    <input type="submit" value="simpan" class="btn btn-success mt-2">
    <a href="<?php echo base64_encode('anggota'); ?>" class="btn btn-primary mt-2">Kembali</a>
  </form>

</div>