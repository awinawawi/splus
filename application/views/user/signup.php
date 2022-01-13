<?php $this->load->view('user/header') ?>
<main class="ps-main">
    <div class="ps-section ps-owl-root">
        <div class="ps-container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-md-offset-3">
                    <h3>
                        <center>Bergabung Bersama S-PLUS</center>
                    </h3>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="row">
                        <div class="col-md-12">
                            <p>Lengkapi data yang diperlukan untuk bergabung bersama S-PLUS sebelum mulai membeli produk.</p>
                            <br>
                            <form action="<?=base_url('verify/').$token?>" method="post" id="register">
                                <div class="form-group">
                                    <label for="">Nama Lengkap</label>
                                    <input class="form-control" type="text" name="nama" placeholder="Nama Lengkap" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Nomor Tlp/hp</label>
                                    <input class="form-control" type="number" name="telpon" placeholder="Nomor telpon/handphone" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Tanggal Lahir</label>
                                    <input class="form-control" type="date" name="ttl" placeholder="Tanggal Lahir" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Informasi Alamat</label>
                                    <select name="provinsi" id="provinsi" class="form-control" required>
                                        <option value="null">-- Pilih Provinsi --</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select name="kota" id="kota" class="form-control" required>
                                        <option value="null">-- Pilih Kota --</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select name="kecamatan" id="kecamatan" class="form-control" required>
                                        <option value="null">-- Pilih Kecamatan --</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select name="kelurahan" id="kelurahan" class="form-control" required>
                                        <option value="null">-- Pilih Kelurahan --</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="text" name="kodepos" placeholder="Kodepos" required>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="alamat" id="alamat" cols="50" rows="2" placeholder="Alamat Lengkap" required></textarea>
                                </div>
                                <br><br>
                                <!-- informasi akun -->
                                <div class="form-group">
                                    <label for="">Informasi Akun</label>
                                    <input class="form-control" type="email" name="email" placeholder="Alamat email" value="<?=$email?>" readonly required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="text" name="username" placeholder="Username" required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="password" name="password" placeholder="Password" required>
                                </div>
                                <div class="form-group text-center">
                                    <button class="ps-btn" type="submit" name="signup">Simpan <i class="fa fa-angle-right"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#register :input').prop('disabled',true);
        $.get("<?=base_url('ajax/wilayah/provinsi/0')?>",function(response){
            $('#provinsi').html(response);
            $('#register :input').prop('disabled',false);
            getkot();
        });
        $('#provinsi').change(function(){
            getkot();
        });
        $('#kota').change(function(){
            getkec();
        });
        $('#kecamatan').change(function(){
            getkel();
        })

        // Fungsi get data wilayah
        function getkot(){
            var id = $('#provinsi option:selected').attr('id');
            $('#register :input').prop('disabled',true);
            $.get("<?=base_url('ajax/wilayah/kota/')?>"+id,
                function (response) {
                    $('#kota').html(response);
                    $('#register :input').prop('disabled',false);
                    getkec();
                }
            );
        }

        function getkec(){
            var id = $('#kota option:selected').attr('id');
            $('#register :input').prop('disabled',true);
            $.get("<?=base_url('ajax/wilayah/kecamatan/')?>"+id,
                function (response) {
                    $('#kecamatan').html(response);
                    $('#register :input').prop('disabled',false);
                    getkel();
                }
            );
        }

        function getkel(){
            var id = $('#kecamatan option:selected').attr('id');
            $('#register :input').prop('disabled',true);
            $.get("<?=base_url('ajax/wilayah/kelurahan/')?>"+id,
                function (response) {
                    $('#kelurahan').html(response);
                    $('#register :input').prop('disabled',false);
                }
            );
        }
    </script>

    <?php $this->load->view('user/footer') ?>