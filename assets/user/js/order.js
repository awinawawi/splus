let baseUrl = 'https://localhost/splus/';
function getVarian(varian){
    $.post(baseUrl+"get_product_varian",{
        'varian' : varian,
    },function(result){
        let data = JSON.parse(result);
        $('#order_varian_warna').empty();
        for(let i=0; i < data.length; i++){
            let html = '<option value="'+data[i]['varian_id']+'">'+data[i]['varian_warna']+'</option>';
            $('#order_varian_warna').append(html);
        }
        // $('#order_image').attr("src",baseUrl+"assets/user/images/kategori/splus-shade/"+data[0]['varian_gambar_utama']);
        // $('#order_image_varian').attr("src",baseUrl+"assets/user/images/kategori/splus-shade/"+data[0]['varian_gambar_warna']);
        $('#order_image').attr("src",baseUrl+"assets/user/images/kategori/produk/pintu/"+data[0]['varian_gambar_utama']);
        $('#order_image_varian').attr("src",baseUrl+"assets/user/images/kategori/produk/pintu/"+data[0]['varian_gambar_warna']);
        $('#order_image_varian_label').html(data[0]['varian_warna'])
        let ukuran = data[0]['varian_ukuran'].split("x");
        if($('#order_varian_ukuran_lebar').val() == ''){ $('#order_varian_ukuran_lebar').val(ukuran[0]); }
        if($('#order_varian_ukuran_tinggi').val() == ''){ $('#order_varian_ukuran_tinggi').val(ukuran[1]); }
        $('#order_varian_harga_meter').html("Rp "+currency(data[0]['varian_harga_meter']));
        $('#order_varian_harga_meter_value').val(data[0]['varian_harga_meter']);
        $('#order_varian_warna_value').val(data[0]['varian_warna']);
        getNewPrice();
    });
}

function getPrice(price){
    $.post(baseUrl+"get_product_varian_price",{
        'varian' : price,
    },function(result){
        let data = JSON.parse(result);
        // $('#order_image').attr("src",baseUrl+"assets/user/images/kategori/splus-shade/"+data[0]['varian_gambar_utama']);
        // $('#order_image_varian').attr("src",baseUrl+"assets/user/images/kategori/splus-shade/"+data[0]['varian_gambar_warna']);
        $('#order_image').attr("src",baseUrl+"assets/user/images/kategori/produk/pintu/"+data[0]['varian_gambar_utama']);
        $('#order_image_varian').attr("src",baseUrl+"assets/user/images/kategori/produk/pintu/"+data[0]['varian_gambar_warna']);
        $('#order_image_varian_label').html(data[0]['varian_warna'])
        let ukuran = data[0]['varian_ukuran'].split("x");
        if($('#order_varian_ukuran_lebar').val() === null){ $('#order_varian_ukuran_lebar').val(ukuran[0]); }
        if($('#order_varian_ukuran_tinggi').val() === null){ $('#order_varian_ukuran_tinggi').val(ukuran[1]); }
        $('#order_varian_harga_meter').html("Rp "+currency(data[0]['varian_harga_meter']));
        $('#order_varian_harga_meter_value').val(data[0]['varian_harga_meter']);
        getNewPrice();
    });
}

function getNewPrice(){
    let lebar   = $('#order_varian_ukuran_lebar').val();
    let tinggi  = $('#order_varian_ukuran_tinggi').val();
    let harga   = $('#order_varian_harga_meter_value').val();
    let jumlah  = $('#order_produk_jumlah').val();
    let total   = ((Number(lebar)/1000)*(Number(tinggi)/1000)) * Number(harga) * Number(jumlah);
    $('#order_varian_harga').html(currency(total));
    $('#order_varian_harga_value').val(total);
}

function currency(currency){
    var	number_string = currency.toString(),
        sisa 	= number_string.length % 3,
        rupiah 	= number_string.substr(0, sisa),
        ribuan 	= number_string.substr(sisa).match(/\d{3}/g);
            
    if (ribuan) {
        separator = sisa ? '.' : '';
        rupiah += separator + ribuan.join('.');
    }

    return rupiah;
}

$(window).load(function(){
    let varian      = $('#order_tipe').val();
    getVarian(varian);
    getProvince();
    userSession();
});

$('#order_tipe').on("change",function(){
    let varian = $(this).val();
    getVarian(varian);
});

//new subkategori
$(window).load(function(){
    let varian      = $('#order_subkategori').val();
    getVarian(varian);
    getProvince();
    userSession();
});

$('#order_subkategori').on("change",function(){
    let varian = $(this).val();
    getVarian(varian);
});

//end



$('#order_varian_warna').on("change", function(){
    let varian = $(this).val();
    $('#order_varian_warna_value').val($('#order_varian_warna option:selected').text());
    getPrice(varian);
});

$('#order_varian_ukuran_lebar,#order_varian_ukuran_tinggi').on("keyup", function(){
    getNewPrice();
});

// Address and Shipment
function getProvince(){
    $.get(baseUrl+"ajax_order_get_province", function(result){
        let province = JSON.parse(result);
        for(let i=0; i < province.length; i++){
            let html = '<option value="'+province[i]['province']+'" data-id="'+province[i]['province_id']+'">'+province[i]['province']+'</option>';
            $('#ajax_order_address_province').append(html);
        }
        getCity(province[0]['province_id']);
    });
}

function getCity(id){
    $('#ajax_order_address_city').empty();
    let base = '<option value="0">-- Pilih Kota/Kab --</option>';
    $('#ajax_order_address_city').append(base);
    $('#ajax_order_address_district').empty();
    let bases = '<option value="0">-- Pilih Kecamatan --</option>';
    $('#ajax_order_address_district').append(bases);
    $.get(baseUrl+"ajax_order_get_city/"+id, function(result){
        let city = JSON.parse(result);
        for(let i=0; i < city.length; i++){
            let html = '<option value="'+city[i]['type']+' '+city[i]['city_name']+'" data-id="'+city[i]['city_id']+'">'+city[i]['type']+' '+city[i]['city_name']+'</option>';
            $('#ajax_order_address_city').append(html);
        }
    });
}

function getDistrict(id){
    $('#ajax_order_address_district').empty();
    let base = '<option value="0">-- Pilih Kecamatan --</option>';
    $('#ajax_order_address_district').append(base);
    $.get(baseUrl+"ajax_order_get_district/"+id, function(result){
        let district    = JSON.parse(result);
        for(let i=0; i < district.length; i++){
            let html = '<option value="'+district[i]['subdistrict_name']+'" data-id="'+district[i]['subdistrict_id']+'">'+district[i]['subdistrict_name']+'</option>';
            $('#ajax_order_address_district').append(html);
        }
    });
}

function getCost(courier){
    let destination = $('#ajax_order_address_district option:selected').attr('data-id');
    $.post(baseUrl+"ajax_order_get_cost",{
        'destination'   : destination,
        'courier'       : courier
    },function(result){
        $('#result_courier_'+courier).html(result)
    })

}

$('div').delegate(".btn_courier_cost","click", function(){
    let kurir   = $(this).val().split(',');
    let cost = Number(kurir[2]);
    let harga = Number($('#cart_total_harga_produk').val());
    $('#cart_total_order').text(currency(cost+harga));
    $('#cart_total_order_value').val(cost+harga);
})

$('#ajax_order_address_province').on("change", function(){
    let province = $('#ajax_order_address_province option:selected').attr('data-id');
    getCity(province);
});

$('#ajax_order_address_city').on("change", function(){
    let city = $('#ajax_order_address_city option:selected').attr('data-id');
    getDistrict(city);
});

$('#ajax_order_address_district').on("change", function(){
    getCost('jne');getCost('jnt');getCost('tiki');getCost('sicepat');
    getCost('wahana');getCost('pahala');
});


var dateRange   = new Date().setDate(new Date().getDate()+15);
var dateFormat  = new Date(dateRange);
var dateToStr   = new Date(dateFormat).toISOString().split("T")[0];

// Create date order
$('#tanggal_pengiriman').datepicker({
    startDate: ""+dateToStr.split("-")[1]+"/"+dateToStr.split("-")[2]+"/"+dateToStr.split("-")[0]+"",
    todayHighlight: true
});

$('#tanggal_pengiriman').datepicker().on("changeDate",function(e){
    var dateFormat = new Date(e.date).toISOString().split("T")[0];
    $('#tanggal_pengiriman_value').val(dateFormat);
});

// Pesan Sekarang
// Pesan Sekarang
$('#pesanSekarang').on('click', function(e){
    e.preventDefault();
    $data = $('#formOrder').serialize();
    $.ajax({
        url         : baseUrl+'create-order',
        type        : 'POST',
        processData : false,
        cache       : false,
        data        : $data 
    }).done(function(response){
        $('#pesanSekarangModal').click();
        $('#faktur-pembelian').text(response);
        $('#pesanSekarang').css('display','none');
        $('#pesanSekarangModal').removeClass('hide');
    }).fail(function(xhr,response,status){
        $err = JSON.parse(xhr.responseText);
        alert($err.status);
    });
})

// Increase or Decreas Function
$('.btn-number').click(function(e){
    e.preventDefault();
    
    fieldName = $(this).attr('data-field');
    type      = $(this).attr('data-type');
    var input = $("input[name='"+fieldName+"']");
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
        if(type == 'minus') {
            
            if(currentVal > input.attr('min')) {
                input.val(currentVal - 1).change();
                getNewPrice();
            } 
            if(parseInt(input.val()) == input.attr('min')) {
                $(this).attr('disabled', true);
            }

        } else if(type == 'plus') {

            if(currentVal < input.attr('max')) {
                input.val(currentVal + 1).change();
                getNewPrice();
            }
            if(parseInt(input.val()) == input.attr('max')) {
                $(this).attr('disabled', true);
            }

        }
    } else {
        input.val(0);
    }
});
$('.input-number').focusin(function(){
   $(this).data('oldValue', $(this).val());
});
$('.input-number').change(function() {
    
    minValue =  parseInt($(this).attr('min'));
    maxValue =  parseInt($(this).attr('max'));
    valueCurrent = parseInt($(this).val());
    
    name = $(this).attr('name');
    if(valueCurrent >= minValue) {
        $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Maaf, kurang dari batas minimum.');
        $(this).val($(this).data('oldValue'));
    }
    if(valueCurrent <= maxValue) {
        $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Maaf, sudah melebihi batas maksimal.');
        $(this).val($(this).data('oldValue'));
    }
    
    
});
$(".input-number").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) || 
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });

function userSession()
{
    if(localStorage.getItem("user_session") === null){
        let session = Math.random().toString(9).substring(2);
        localStorage.setItem("user_session",session);
    }else{
        $('#user_session_id').val(localStorage.getItem("user_session"));
        $.post('ajax_post_user_session', {session_id:localStorage.getItem("user_session")}, function(){});
    }
}