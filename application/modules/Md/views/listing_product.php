<link rel="stylesheet" href="<?php echo base_url('bower_components/AdminLTE/plugins/datatables/dataTables.bootstrap.css') ?>">
<div class="box">
  <!-- /.box-header -->
  <div class="box-body">
    <table id="dataTable" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>Kode</th>
          <th>Nama</th>
          <th>Harga Beli</th>
          <th>Harga Jual</th>
          <th>Stok</th>
          <th>Terjual</th>
          <th>Kode Opr.</th>
        </tr>
      </thead>
      <tbody>
          <?php $no = 1 ?>
          <?php foreach ($datalist as $data): ?>
            <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $data->kode_produk ?></td>
              <td><?php echo $data->nama_produk ?></td>
              <td><?php echo $data->harga_beli ?></td>
              <td><?php echo $data->harga_jual ?></td>
              <td><?php echo $data->stok ?></td>
              <td><?php echo $data->counter ?></td>
              <td><?php echo $data->kode_opr ?></td>
            </tr>
          <?php endforeach ?>
      </tbody>
      <tfoot>
      <tr>
          <th>No</th>
          <th>Kode</th>
          <th>Nama</th>
          <th>Harga Beli</th>
          <th>Harga Jual</th>
          <th>Stok</th>
          <th>Terjual</th>
          <th>Kode Opr.</th>
        </tr>
      </tfoot>
    </table>
  </div>
  <!-- /.box-body -->
</div>