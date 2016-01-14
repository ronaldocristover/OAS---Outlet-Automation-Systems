<link rel="stylesheet" href="<?php echo base_url('bower_components/AdminLTE/plugins/datatables/dataTables.bootstrap.css') ?>">
<div class="box">
  <!-- /.box-header -->
  <div class="box-body">
    <table id="dataTable" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>Jam</th>
          <th>Produk</th>
          <th>Tujuan</th>
          <th>Reseller</th>
          <th>Saldo Awal / Akhir</th>
          <th>Harga Beli</th>
          <th>Profit</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
          <?php $no = 1 ?>
          <?php foreach ($datalist as $data): ?>
            <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $data->datetime_transaksi ?></td>
              <td><?php echo $data->kode_produk ?></td>
              <td><?php echo $data->tujuan ?></td>
              <td><?php echo $data->kode_reseller ?></td>
              <td><?php echo $data->deposit_awal . " / " . $data->deposit_akhir  ?></td>
              <td><?php echo $data->harga_beli ?></td>
              <td><?php echo ($data->harga_beli - $data->harga_dasar) ?></td>
              <td>
                  <?php if ($data->status == 1): ?>
                    <i class="fa fa-check" style="color:green"></i>
                  <?php else: ?>
                    <i class="fa fa-times txt-red" style="color:red"></i>
                  <?php endif ?>
              </td>
            </tr>
          <?php endforeach ?>
      </tbody>
      <tfoot>
      <tr>
          <th>No</th>
          <th>Jam</th>
          <th>Produk</th>
          <th>Tujuan</th>
          <th>Reseller</th>
          <th>Saldo Awal / Akhir</th>
          <th>Harga Beli</th>
          <th>Profit</th>
          <th>Status</th>
        </tr>
      </tfoot>
    </table>
  </div>
  <!-- /.box-body -->
</div>