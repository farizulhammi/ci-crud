<?php $this->load->view('header.php');?>
<div class="container">
<br>
    <div class="card">
    <?php if ($this->session->flashdata('respon') == 'added'){?>
    <div class="alert alert-success" role="alert">Data berhasil di tambahkan</div>
    <?php } ?>
    <?php if ($this->session->flashdata('respon') == 'updated'){?>
    <div class="alert alert-success" role="alert">Data berhasil di update</div>
    <?php } ?>
    <div class="card-header">
        <span style="font-size: 25px;;">Data Siswa</span> 
        <span><a href="<?= base_url('siswa/tambah');?>" style="float: right;" class="btn btn-primary"> Add </a></span>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-hover table-stripped">
        <thead>
            <tr>
            <th>#</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Action</th>
            </tr>
         </thead>
         <tbody>
         <?php $no=1; foreach($data as $row){?>
            <tr>
            <td><?= $no++;?></td>
            <td><?= $row['nama'];?></td>
            <td><?= $row['tanggal_lahir'];?></td>
            <td><?= $row['jenis_kelamin'];?></td>
            <td>
                <a href="<?= base_url('siswa/edit/'.$row['id'])?>" class="btn btn-warning">Edit</a>
                <a href="<?= base_url('siswa/hapus/'.$row['id'])?>" class="btn btn-danger">Delete</a>
            </td>
            </tr>
            <?php } ?>
         </tbody>
        </table>
    </div>
    </div>
</div>

</body>
</html>