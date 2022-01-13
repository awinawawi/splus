<?php $this->load->view('user/header') ?>
<main class="ps-main pt-40 ">
    <div class="ps-section ps-owl-root">
        <div class="ps-container pb-80">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-title text-center">Segera lakukan pembayaran</div>
                        </div>
                        <div class="panel-body text-center">
                            <p style="font-size:30px">Rp <?=number_format($data['amount'])?></p>
                            <p>   No Virtual Account <br> <b><?=$data['bank_code']?></b> : <?=$data['virtual_account_number']?> </p>
                            <p>Status : <b id="status"><?=$data['status']?></b></p>
                        </div>
                    </div>
                    <input type="hidden" id="external_id" value="<?=$data['external_id']?>">
                    <input type="hidden" id="amount" value="<?=$data['amount']?>">
                    <center><button type="button" class="btn btn-default btn-flat btn-small demobayar">DEMO PEMBAYARAN</button></center>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('.demobayar').click(function(){
            $('.demobayar').prop('disabled','true');
            var id = $('#external_id').val();
            var am = $('#amount').val();
            $.get("<?=base_url('testing/pembayaran/')?>"+id+"/"+am,function(response){ });
        });

        setInterval(() => {
            var id = $('#external_id').val();
            $.get("<?=base_url('testing/cek_pembayaran/')?>"+id,function(response){
                if(response === 'paid'){
                    $('.panel').removeClass('panel-default');
                    $('.panel').addClass('panel-success');
                    $('.panel-title').html('Pembayaran Berhasil');
                    $('#status').html('DIBAYAR');
                }
            })
        }, 5000);
    </script>
<?php $this->load->view('user/footer') ?>