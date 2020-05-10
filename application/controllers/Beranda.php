<?php 

    class Beranda extends CI_CONTROLLER{

        public function __CONSTRUCT(){
            parent::__CONSTRUCT();
        }

        public function Beranda(){

            $data['title'] = "Unit Produksi RPL | SMKN 1 Boyolangu";
            $data['konten'] = 'pages/beranda/beranda_konten';

            $this->load->view('template/Dashboard/Header_view',$data);
            $this->load->view('template/Dashboard/Dashboard_view',$data);
            $this->load->view('template/Dashboard/Footer_view',$data);

        }

    }