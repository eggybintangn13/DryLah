<br>
<div class="row">
  <div class="col-sm-12">
    <div class="box box-primary box-solid">
      <div class="box-header with-border">
        <h3 class="box-title">Data <?= $title ?></h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-toggle="modal" data-target="#add"><i class="fa fa-plus"></i> Tambah</button>
        </div>
        <!-- /.box-tools -->
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <?php
        if (session()->getFlashdata('pesan')) {
          echo '<div class="alert alert-success alert-sm" role="alert">';
          echo session()->getFlashdata('pesan');
          echo '</div>';
        }
        ?>

        <table id="example1" class="table table-bordered table-striped">

          <thead>
            <tr>
              <th width="50px" class="text-center">No</th>
              <th class="text-center">Nama User</th>
              <th class="text-center">Level</th>
              <th width="150px" class="text-center">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1;
            foreach ($user as $key => $value) { ?>
              <tr>
                <td><?= $no++; ?></td>
                <td><?= $value['nama_user'] ?></td>
                <td><?php if ($value['level']  == 1) {
                      echo 'Owner';
                    } elseif ($value['level'] == 2) {
                      echo 'Admin';
                    } else {
                      echo 'Pelanggan';
                    } ?></td>
                <td class="text-center">
                  <button class="btn btn-warning btn-sm btn-flat" data-toggle="modal" data-target="#edit<?= $value['id_user'] ?>"><i class="fa fa-pencil"></i></button>
                  <button class="btn btn-danger btn-sm btn-flat" data-toggle="modal" data-target="#delete<?= $value['id_user'] ?>"><i class="fa fa-trash"></i></button>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
      <!-- /.box-body -->
    </div>
  </div>
  <!--Modal ADD -->
  <div class="modal fade" id="add">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Tambah User</h4>
        </div>
        <div class="modal-body">

          <?php
          echo form_open('user/add');
          ?>

          <div class="form-group">
            <label>Nama User</label>
            <input name="nama_user" class="form-control" placeholder="Username" required>
          </div>
          <div class="form-group">
            <label>Email</label>
            <input name="email" class="form-control" placeholder="Email" required>
          </div>
          <div class="form-group">
            <label>No Handphone</label>
            <input name="no_hp" class="form-control" placeholder="No Handphone" required>
          </div>

        </div>
        <div class="modal-footer">
          <!-- <button class="btn btn-warning btn-sm btn-flat" data-toggle="modal" data-target="#edit<?= $value['id_user'] ?>"><i class="fa fa-pencil"></i></button> -->
          <button type="submit" class="btn btn-success btn-flat">Simpan</button>
        </div>
        <?php echo form_close() ?>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal add-->
</div>

<!--Modal edit -->
<?php foreach ($user as $key => $value) { ?>

  <div class="modal fade" id="edit<?= $value['id_user'] ?>">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Ubah User</h4>
        </div>
        <div class="modal-body">
          <?php
          echo form_open('user/edit/' . $value['id_user']);
          ?>

          <div class="form-group">
            <label>Nama User</label>
            <input name="nama_user" value="<?= $value['nama_user'] ?>" class="form-control" placeholder="Nama User" required>
          </div>
          <!-- //bikin dropdown -->
          <div class="form-group">
            <label>Level</label>
            <input name="level" value="<?= $value['level'] ?>" class="form-control" placeholder="Level" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger pull-left btn-flat" data-dismiss="modal">Keluar</button>
          <button type="submit" class="btn btn-success btn-flat">Simpan</button>
        </div>
        <?php echo form_close() ?>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
<?php } ?>

<!-- /.modal edit-->

<!--Modal delete -->

<?php foreach ($user as $key => $value) { ?>

  <div class="modal fade" id="delete<?= $value['id_user'] ?>">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Hapus user</h4>
        </div>
        <div class="modal-body">

          <p>Apakah anda yakin ingin menghapus <b><?= $value['nama_user'] ?> ? </b></p>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger pull-left btn-flat" data-dismiss="modal">Keluar</button>
          <a href="<?= base_url('user/delete/' . $value['id_user']) ?>" class="btn btn-success btn-flat">Hapus</a>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
<?php } ?>

<!-- /.modal delete-->