<br>
<div class="row">
  <div class="col-sm-12">
    <div class="box box-primary box-solid">
      <div class="box-header with-border">
        <h3 class="box-title">Data <?= $title ?></h3>

        <!-- <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-toggle="modal" data-target="#add"><i class="fa fa-plus"></i> Tambah</button>
        </div> -->
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
              <th width="50px">No</th>
              <th>Paket</th>
              <th>Jenis</th>
              <th>Alamat</th>
              <th>Status</th>
              <th>Total Bayar</th>
              <th width="150px" class="text-center">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1;
            foreach ($user as $key => $value) { ?>
              <tr>
                <td><?= $no++; ?></td>
                <td><?= $value['paket'] ?></td>
                <td><?= $value['jenis'] ?></td>
                <td><?= $value['alamat'] ?></td>
                <td><?php if ($value['status']  == 1) {
                                            echo 'Belum Bayar';
                                        } 
                                        elseif ($value['status'] == 2) {
                                            echo 'Penjemputan';
                                        }
                                        elseif ($value['status'] == 3) {
                                            echo 'Pengerjaan';
                                        }else {
                                            echo 'Selesai';
                                        } ?></td>
                <td><?= $value['total_bayar'] ?></td>
                <td class="text-center">
                  <button class="btn btn-warning btn-sm btn-flat" data-toggle="modal" data-target="#edit<?= $value['id_order'] ?>"><i class="fa fa-pencil"></i></button>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
      <!-- /.box-body -->
    </div>
  </div>

<!--Modal edit -->
<?php foreach ($user as $key => $value) { ?>

  <div class="modal fade" id="edit<?= $value['id_order'] ?>">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Ubah Status</h4>
        </div>
        <div class="modal-body">
          <?php
          echo form_open('orderadmin/edit/' . $value['id_order']);
          ?>

          <!-- //bikin dropdown -->
          <div class="form-group">
            <label>Status</label>
            <div class="form-group has-feedback">
                        <select name="status">
                            <option value="1"> Belum Bayar </option>
                            <option value="2"> Penjemputan </option>
                            <option value="3"> Pengerjaan </option>
                            <option value="4"> Selesai </option>
                        </select>
            </div>
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
