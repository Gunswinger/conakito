<h1 class="mt-5 mb-5 text-center"><strong>Payment Shop Konakito</strong></h1>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th width="10%">No</th>
                        <th width="34%">Product</th>
                        <th width="15%">Quantity</th>
                        <th width="13%">Berat</th>
                        <th width="15%">Subtotal</th>
                        <th width="15%">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 0;
                    foreach ($this->cart->contents() as $items) :
                        $i++;
                        ?>
                        <tr>
                            <td><?= $i ?></td>
                            <td><?= $items['name'] ?></td>
                            <td><?= $items['qty'] ?></td>
                            <td><?= $items['berat'] * $items['qty'] ?> Gram</td>
                            <td><?= number_format($items['price'], 0, ',', '.') ?></td>
                            <td><?= number_format($items['subtotal'], 0, ',', '.') ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td class="text-right" colspan="5">
                            <?php if ($this->cart->total_items() > 0) { ?>
                                <strong>Total Rp.
                            <td><?= number_format($this->cart->total(), 0, ',', '.'); ?></td></strong>
                        <?php } ?>
                        </td>
                    </tr>
                    <!-- <tr>
                        <td class="text-right" colspan="5">
                            <strong>Biaya Ongkir Rp.
                        <td>50.000</td></strong>
                        <td></td>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right" colspan="5">
                            <strong>Grand Total Rp.

                           <td> </td> </strong>
                        </td>
                    </tr> -->
                </tfoot>
            </table>
        </div>
        <div class="col-md-12">
            <form class="payment" method="post" action="<?= base_url('payment/send'); ?>">
                <div class="form-group">
                    <label class="control-label col-sm-6">Nomor Invoice : </label>
                    <div class="col-sm-6">
                        <? foreach ($invoice as $row) : ?>
                            <input type="text" class="form-control" name="id_invoice" value="<?= $row->id_invoice; ?>">

                        <?php endforeach; ?>
                    </div>
                </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label col-sm-2">Bank Pengirim:</label>
                <div class="col-md-6">
                    <select class="form-control" name="bank_pengirim">
                        <option value=""> Pilih Bank</option>
                        <option value="MANDIRI"> MANDIRI </option>
                        <option value="BCA"> BCA </option>
                        <option value="BRI"> BRI </option>
                        <option value="BNI"> BNI </option>
                    </select>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label col-sm-6">Nomor Rekening Pengirim:</label>
                <div class="col-sm-6">
                    <input type="number" class="form-control" name="norek_pengirim">
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label col-sm-2">Nama Pengirim:</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="nama_pengirim">
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label col-sm-2">Tanggal Pengirim:</label>
                <div class="col-sm-6">
                    <input type="date" class="form-control" name="tanggal_pengirim">
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label col-sm-2">Jumlah Transfer:</label>
                <div class="col-sm-6">
                    <?php if ($this->cart->total_items() > 0) { ?>
                        <input type="text" class="form-control" name="jumlah_transfer" value="<?= number_format($this->cart->total(), 0, ',', '.'); ?>">
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label col-sm-6">Upload Bukti Pembayaran:</label>
                <div class="col-sm-6">
                    <input type="file" class="form-control" name="bukti_pembayaran">
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="mb-5 footBtn">
                <a href="<?= base_url('invoice/checkOut'); ?>" class="btn btn-primary orderBtn"><i class="glyphicon glyphicon-menu-right"></i>Back</a>
                <button type="submit" onclick="sweet()" class="btn btn-success orderBtn">SEND<i class="glyphicon glyphicon-menu-right"></i></button>
            </div>
        </div>
    </div>
    </from>
</div>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    function sweet() {
        swal("Pembayaran Terkirim!", "Pesanan anda sedang di proses", "success");
    }
</script>