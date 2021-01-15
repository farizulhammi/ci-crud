<?php $this->load->view('header.php') ?>
<div class="container">
<br>
    <div class="card">
    <div class="card-header">
        <span style="font-size: 25px;;">Tambah Data Siswa</span> 
    </div>
    <div class="card-body">
 <form action="<?= base_url('siswa/update');?>" method="post">
  <div class="form-group">
  <?php foreach($edit as $row){?>
  <input type="hidden" name="id" value="<?= $row['id'];?>">
    <label>Nama</label>
    <input type="text" name="nama" class="form-control" value="<?= $row['nama'];?>">
  </div>
  <div class="form-group">
    <label>Jenis Kelamin</label>
    <select name="jenis_kelamin" class="form-control">
      <option value="L" <?= $row['jenis_kelamin'] == 'L' ? 'selected' : '' ;?> >Laki - Laki</option>
      <option value="P" <?= $row['jenis_kelamin'] == 'P' ? 'selected' : '';?>>Perempuan</option>
    </select>
  </div>
  <?php } ?>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
    </div>
</div>

</body>
</html>