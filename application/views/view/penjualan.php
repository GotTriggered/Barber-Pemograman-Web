        <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tabel <?php echo $judul;?></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <a href="<?php echo base_url();?>Penjualan/form_input"><button type="button" class="btn btn-primary">Input <?php echo $judul;?> <i class="fa fa-plus"></i></button></a>
                <br>
                <br>
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Barber</th>
                    <th>Nama Pelanggan</th>
                    <th>Tanggal Potong</th>
                    <th>Jenis Potong</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>Udin</td>
                    <td>Budi</td>
                    <td>10/23/2023</td>
                    <td>Dewasa, Cukur</td>
                    <td>40.000</td>
                    <td>
                      <a href="#"><button class="btn btn-danger">Hapus <i class="fa fa-trash"></i></button></a>
                      <a href="#"><button class="btn btn-warning">Edit <i class="fa fa-edit"></i></button></a>
                    </td>
                  </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
      </div><!-- /.container-fluid -->
    </div>

      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  
