<?php

class Product_filter_model_interior extends CI_Model
{
    function fetch_filter_type($type)
    {
        $this->db->distinct();
        $this->db->select($type);
        $this->db->from('tbl_produk_varian');
        $this->db->where('produk_id', '3');
        return $this->db->get();
    }

    function make_query($minimum_price, $maximum_price, $brand, $ram, $storage)
    {
        //         $query = "
        //   SELECT * FROM tbl_product_splus a INNER JOIN tbl_produk b  ON a.product_kategori=b.produk_id
        //   WHERE a.product_status = '1' and a.product_kategori='3'
        //   ";

        $query = "SELECT * FROM tbl_produk_varian a INNER JOIN tbl_produk b  ON a.produk_id=b.produk_id
WHERE a.product_status = '1' AND a.produk_id='3'";

        if (isset($minimum_price, $maximum_price) && !empty($minimum_price) &&  !empty($maximum_price)) {
            $query .= "
    AND a.product_price BETWEEN '" . $minimum_price . "' AND '" . $maximum_price . "'
   ";
        }

        if (isset($brand)) {
            $brand_filter = implode("','", $brand);
            $query .= "
    AND a.product_jenis IN('" . $brand_filter . "')
   ";
        }

        if (isset($ram)) {
            $ram_filter = implode("','", $ram);
            $query .= "
    AND a.product_tipe IN('" . $ram_filter . "')
   ";
        }

        if (isset($storage)) {
            $storage_filter = implode("','", $storage);
            $query .= "
    AND a.product_brand IN('" . $storage_filter . "')
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
                                <img src="' . base_url() . 'assets/images/ourproduk/produk/' . $row['product_image'] . '" alt="" class="img-responsive " class="image" width="80%">
                            </a>
                        </div>                                                
                        <div class="down-content" >
                        <h4 align="center">
                            <a href="' . base_url() . 'order/produk_kategori/' . $row['varian_nama'] .  '">' . $row['product_name'] . '</a>
                        </h4>
                            <span align="center">RP.' . $row['product_price'] . ' </span>
                        </div>
                    </div>
                </div>';
            }
        } else {
            $output = '<h3>No Data Found</h3>';
        }
        return $output;
    }
}
