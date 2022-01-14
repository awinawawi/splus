<?php
class M_login extends CI_Model
{
    function cekadmin($username, $password)
    {

        //$hasil = $this->db->query("SELECT * FROM tbl_pengguna WHERE pengguna_username='$username' AND pengguna_password=md5('$password')");
        $hasil = $this->db->query("SELECT * FROM tbl_pengguna WHERE pengguna_username='smtechtex@splusindonesia.co.id' AND pengguna_password=MD5('smtt@2511')");
        return $hasil;
    }
}
