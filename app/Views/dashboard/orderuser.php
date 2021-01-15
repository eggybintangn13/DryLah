<br>
<div class="row">
    <div class="col-sm-12">
        <div class="box box-primary box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">Data <?= $title ?></h3>

                <div class="box-tools pull-right">
                    <a href="<?= base_url('order') ?>"><i class="fa fa-plus"></i> Tambah Order</a>
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
                            <th width="50px">No</th>
                            <th>Jenis</th>
                            <th>Paket</th>
                            <th>Berat</th>
                            <th>Status</th>
                            <th>Total Bayar</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($user as $key => $value) { ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                   <td><?php if ($value['jenis']  == 1) {
                                            echo 'Cuci';
                                        } elseif ($value['level'] == 2) {
                                            echo 'Gosok';
                                        } else {
                                            echo 'Lengkap';
                                        } ?></td>
                                   <td><?php if ($value['paket']  == 1) {
                                            echo 'Reguler';
                                        } else {
                                            echo 'Express';
                                        } ?></td>
                                <td><?= $value['berat'] ?> kg</td>
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
                                <td>Rp. <?= $value['total_bayar'] ?></td>
                                <td class="text-center">
                                <button class="btn btn-warning btn-sm btn-flat" data-toggle="modal" data-target="#checkout"><i class="fa fa-shopping-cart"></i></button>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
    </div>
</div>

<!--Modal edit -->
    <div class="modal fade" id="checkout">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Cara Bayar</h4>
                </div>
                <div class="modal-body">

                    <ul>
                        <li>Pembayaran melalui rekening Mandiri 9000045083566</li>
                        <li>Diharapkan menambahkan catatan "Nama anda"</li>
                    </ul>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success pull-left btn-flat" data-dismiss="modal">Oke</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

<!-- /.modal edit-->