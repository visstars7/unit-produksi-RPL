<?php 

    class Hubungi_kami extends CI_CONTROLLER{

        public function __CONSTRUCT(){
            parent:: __CONSTRUCT();
        }

        public function hubungi_kami(){


            $data['title'] = "Unit Produksi RPL | SMKN 1 Boyolangu";

            $data['konten'] = "pages/hubungi/hubungi_konten.php";

            $this->load->view('template/Dashboard/Header_view',$data);
            $this->load->view('template/Dashboard/Dashboard_view');
            $this->load->view('template/Dashboard/Footer_view',$data);

        }

    }