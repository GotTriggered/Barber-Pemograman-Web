<!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form <?php echo $nama_form;?></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label>Nama Barber</label>
                    <input type="text" class="form-control" id="id_barber" placeholder="Isi Nama Barber">
                  </div>
                  <div class="form-group">
                    <label>Nama Pelanggan</label>
                    <input type="text" class="form-control" id="id_pelanggan" placeholder="Isi Nama Pelanggan">
                  </div>
                  <div class="form-group">
                    <label>Tanggal</label>
                      <div class="input-group date" id="reservationdate" data-target-input="nearest">
                          <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                          <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                              <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                          </div>
                      </div>
                  </div>
                  <div class="form-group">
                    <label>Jenis Potong :</label>
                    <select class="form-control" name="jenis">
                      <option>Anak Anak</option>
                      <option>Anak Anak + Cukur</option>
                      <option >Dewasa</option>
                      <option >Dewasa + Cukur</option>
                    </select>
                  </div>
                  <div class="form-group">
                      <label>Harga</label>
                      <input type="text" class="form-control" id="harga" placeholder="" disabled>
                    </div>
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->