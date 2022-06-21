<?php

class Product_filter_model_pintu extends CI_Model
{


    function fetch_filter_type($type)
    {
        $this->db->distinct();
        $this->db->select($type);
        $this->db->from('tbl_varian_coba');
        $this->db->join('tbl_kelas', 'tbl_kelas.kelas_id = tbl_varian_coba.produk_kelas');
        $this->db->join('tbl_subkategori', 'tbl_subkategori.subkategori_id = tbl_kelas.produk_subkategori');
        $this->db->join('tbl_brand', 'tbl_brand.id_brand = tbl_varian_coba.produk_brand');
        $this->db->where('tbl_varian_coba.produk_kategori', '1');
        return $this->db->get();
    }




    // function fetch_filter_type($type)
    // {
    //     $this->db->distinct();
    //     $this->db->select($type);
    //     $this->db->from('tbl_varian_coba');
    //     $this->db->where('produk_kategori', '1');
    //     return $this->db->get();
    // }

    function make_query($minimum_price, $maximum_price, $brand, $ram, $storage)
    {


        // $query = "SELECT * FROM tbl_varian_coba a  
        // WHERE  a.produk_kategori='1'";

        $query = "SELECT * FROM tbl_varian_coba a JOIN tbl_kelas b ON b.kelas_id=a.produk_kelas
        JOIN tbl_subkategori c ON c.subkategori_id=b.produk_subkategori JOIN tbl_brand d ON d.id_brand=a.produk_brand
        WHERE a.produk_kategori='1'";

        if (isset($minimum_price, $maximum_price) && !empty($minimum_price) &&  !empty($maximum_price)) {
            $query .= "
    AND a.harga_konsumen BETWEEN '" . $minimum_price . "' AND '" . $maximum_price . "'
   ";
        }

        if (isset($brand)) {
            $brand_filter = implode("','", $brand);
            $query .= "
    AND c.subkategori_nama IN('" . $brand_filter . "')
   ";
        }

        if (isset($ram)) {
            $ram_filter = implode("','", $ram);
            $query .= "
    AND b.kelas_nama IN('" . $ram_filter . "')
   ";
        }

        if (isset($storage)) {
            $storage_filter = implode("','", $storage);
            $query .= "
    AND d.brand IN('" . $storage_filter . "')
   ";
        }
        return $query;
    }

    function count_all($minimum_price, $maximum_price, $brand, $ram, $storage)
    {
        $query = $this->make_query($minimum_price, $maximum_price, $brand, $ram, $storage);
        $data = $this->db->query($query);
        return $data->num_rows();
    }

    function fetch_data($limit, $start, $minimum_price, $maximum_price, $brand, $ram, $storage)
    {
        $query = $this->make_query($minimum_price, $maximum_price, $brand, $ram, $storage);

        $query .= ' LIMIT ' . $start . ', ' . $limit;

        $data = $this->db->query($query);

        $output = '';
        if ($data->num_rows() > 0) {
            foreach ($data->result_array() as $row) {
                $output .= '
                <div class="col-lg-4" data-layout="grid-3-full" >
                    <div class="item">
                        <div class="thumb">
                            <a   href="' . base_url() . 'order/produk_kategori/' . $row['varian_nama'] .  '">
                            <img src="' . base_url() . 'assets/user/images/galeri/all_produk/' . $row['varian_cover'] . '" alt="" class="img-responsive " class="image" width="80%">
                            </a>
                        </div>                                                
                        <div class="down-content" >
                        <h4 align="center">
                            <a href="' . base_url() . 'order/produk_kategori/' . $row['varian_nama'] .  '">' . $row['varian_nama'] . '</a>
                        </h4>
                            <span align="center">RP.' . $row['harga_konsumen'] . ' </span>
                        </div>
                    </div>
                </div>';
            }
        } else {
            $output = '<h4>Barang Belum Ada...</h4>';
        }
        return $output;
    }




    //     function fetch_filter_type($type)
    //     {
    //         $this->db->distinct();
    //         $this->db->select($type);
    //         $this->db->from('tbl_produk_varian');
    //         $this->db->where('produk_id', '1');
    //         return $this->db->get();
    //     }

    //     function make_query($minimum_price, $maximum_price, $brand, $ram, $storage)
    //     {


    //         $query = "SELECT * FROM tbl_produk_varian a INNER JOIN tbl_produk b  ON a.produk_id=b.produk_id
    //         WHERE a.product_status = '1' AND a.produk_id='1'";

    //         if (isset($minimum_price, $maximum_price) && !empty($minimum_price) &&  !empty($maximum_price)) {
    //             $query .= "
    //     AND a.product_price BETWEEN '" . $minimum_price . "' AND '" . $maximum_price . "'
    //    ";
    //         }

    //         if (isset($brand)) {
    //             $brand_filter = implode("','", $brand);
    //             $query .= "
    //     AND a.product_jenis IN('" . $brand_filter . "')
    //    ";
    //         }

    //         if (isset($ram)) {
    //             $ram_filter = implode("','", $ram);
    //             $query .= "
    //     AND a.product_tipe IN('" . $ram_filter . "')
    //    ";
    //         }

    //         if (isset($storage)) {
    //             $storage_filter = implode("','", $storage);
    //             $query .= "
    //     AND a.product_brand IN('" . $storage_filter . "')
    //    ";
    //         }
    //         return $query;
    //     }

    //     function count_all($minimum_price, $maximum_price, $brand, $ram, $storage)
    //     {
    //         $query = $this->make_query($minimum_price, $maximum_price, $brand, $ram, $storage);
    //         $data = $this->db->query($query);
    //         return $data->num_rows();
    //     }

    //     function fetch_data($limit, $start, $minimum_price, $maximum_price, $brand, $ram, $storage)
    //     {
    //         $query = $this->make_query($minimum_price, $maximum_price, $brand, $ram, $storage);

    //         $query .= ' LIMIT ' . $start . ', ' . $limit;

    //         $data = $this->db->query($query);

    //         $output = '';
    //         if ($data->num_rows() > 0) {
    //             foreach ($data->result_array() as $row) {
    //                 $output .= '
    //                 <div class="col-lg-4" data-layout="grid-3-full" >
    //                     <div class="item">
    //                         <div class="thumb">
    //                             <a   href="' . base_url() . 'order/produk_kategori/' . $row['varian_nama'] .  '">
    //                                 <img src="' . base_url() . 'assets/images/ourproduk/produk/' . $row['product_image'] . '" alt="" class="img-responsive " class="image" width="80%">
    //                             </a>
    //                         </div>                                                
    //                         <div class="down-content" >
    //                         <h4 align="center">
    //                             <a href="' . base_url() . 'order/produk_kategori/' . $row['varian_nama'] .  '">' . $row['varian_nama'] . '</a>
    //                         </h4>
    //                             <span align="center">RP.' . $row['product_price'] . ' </span>
    //                         </div>
    //                     </div>
    //                 </div>';
    //             }
    //         } else {
    //             $output = '<h3>No Data Found</h3>';
    //         }
    //         return $output;
    //     }



}
