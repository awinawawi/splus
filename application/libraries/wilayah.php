<?php

class Wilayah {

    function get_token(){
        $url = "https://x.rajaapi.com/poe";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $data = json_decode(curl_exec($ch));
        return $data->token;
    }

    function get_provinsi(){
        $token = $this->get_token();
        $url = "https://x.rajaapi.com/MeP7c5ne$token/m/wilayah/provinsi";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $data = json_decode(curl_exec($ch));
        foreach($data->data as $d){
            echo "<option value=\"".$d->name."\" id=\"".$d->id."\">".$d->name."</option>";
        }
    }

    function get_kota($id_provinsi){
        $token = $this->get_token();
        $url = "https://x.rajaapi.com/MeP7c5ne$token/m/wilayah/kabupaten?idpropinsi=$id_provinsi";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $data = json_decode(curl_exec($ch));
        foreach($data->data as $d){
            echo "<option value=\"".$d->name."\" id=\"".$d->id."\">".$d->name."</option>";
        }
    }

    function get_kecamatan($id_kecamatan){
        $token = $this->get_token();
        $url = "https://x.rajaapi.com/MeP7c5ne$token/m/wilayah/kecamatan?idkabupaten=$id_kecamatan";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $data = json_decode(curl_exec($ch));
        foreach($data->data as $d){
            echo "<option value=\"".$d->name."\" id=\"".$d->id."\">".$d->name."</option>";
        }
    }

    function get_kelurahan($id_kelurahan){
        $token = $this->get_token();
        $url = "https://x.rajaapi.com/MeP7c5ne$token/m/wilayah/kelurahan?idkecamatan=$id_kelurahan";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $data = json_decode(curl_exec($ch));
        foreach($data->data as $d){
            echo "<option value=\"".$d->name."\" id=\"".$d->id."\">".$d->name."</option>";
        }
    }

    function get_kodepos()
    {
        
    }
}