<?php $this->load->view('header.php');?>
<div class="container">
<br>
    <div class="card">
    <div class="card-header">
        <span style="font-size: 25px;;">Tambah Data Siswa</span> 
    </div>
    <div class="card-body">
    <form action="<?= base_url('siswa/add_action');?>" method="post">
  <div class="form-group">
    <label>Nama</label>
    <input type="text" name="nama" class="form-control" value="<?= $this->input->post('nama');?>">
    <span class="text-deanger"><?= form_error('nama') ;?></span>
  </div>
  <div class="form-group">
    <label>Tanggal Lahir</label>
    <input type="date" name="tanggal_lahir" class="form-control" value="<?= $this->input->post('tanggal_lahir');?>">
  </div>
  <span class="text-deanger"><?= form_error('tanggal_lahir') ;?></span>
  <div class="form-group">
    <label>Jenis Kelamin</label>
    <select name="jenis_kelamin" class="form-control">
      <option value="">-- PILIH SALAH SATU --</option>
      <option value="L" <?= !empty($this->input->post('jenis_kelamin') AND $this->input->post('jenis_kelamin') == 'L' ? 'selected' : '' );?> >Laki - Laki</option>
      <option value="P" <?= !empty($this->input->post('jenis_kelamin') AND $this->input->post('jenis_kelamin') == 'P' ? 'selected' : '' );?>>Perempuan</option>
    </select>
    
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
    </div>
</div>

</body>
</html>