<section class="content-header">
    <h1>Paket
    </h1>
</section>
<!-- Main content -->
<section class="content">
    <?php
    if (session()->getFlashdata('pesan')) {
        echo '<div class="alert alert-success alert-sm" role="alert">';
        echo session()->getFlashdata('pesan');
        echo '</div>';
    }
    ?>
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>01</h3>
                    <p>Regular</p>
                </div>
                <div class="icon">
                    <i class="fa fa-shopping-cart"></i>
                </div>
                <div class="small-box-footer">
                    <button type="button" class="btn btn-box-tool" data-toggle="modal" data-target="#reguler"><i class="fa fa-arrow-circle-right"></i> Order Now</button>
                </div>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>02</h3>
                    <p>Express</p>
                </div>
                <div class="icon">
                    <i class="fa fa-rocket"></i>
                </div>
                <div class="small-box-footer">
                    <button type="button" class="btn btn-box-tool" data-toggle="modal" data-target="#express"><i class="fa fa-arrow-circle-right"></i> Order Now</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.content -->

<div class="modal fade" id="reguler">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Regular</h4>
            </div>
            <div class="modal-body">

                <?php
                echo form_open('order/addreguler');
                ?>

                <div class="form-group">
                    <label>Jenis</label>
                    <div class="form-group has-feedback">
                        <select name="jenis">
                            <option value="1"> Cuci </option>
                            <option value="2"> Gosok </option>
                            <option value="3"> Lengkap </option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label>Berat</label>
                    <input name="berat" class="form-control" placeholder="Kilogram" required>
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input name="alamat" class="form-control" placeholder="Alamat" required>
                </div>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success btn-flat">Order</button>
            </div>
            <?php echo form_close() ?>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<div class="modal fade" id="express">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Express</h4>
            </div>
            <div class="modal-body">

                <?php
                echo form_open('order/addexpress');
                ?>

                <div class="form-group">
                    <label>Jenis</label>
                    <div class="form-group has-feedback">
                        <select name="jenis">
                            <option value="1"> Cuci </option>
                            <option value="2"> Gosok </option>
                            <option value="3"> Lengkap </option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label>Berat</label>
                    <input name="berat" class="form-control" placeholder="Kilogram" required>
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input name="alamat" class="form-control" placeholder="Alamat" required>
                </div>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success btn-flat">Order</button>
            </div>
            <?php echo form_close() ?>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>