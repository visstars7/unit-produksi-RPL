<?php 

    class Portofolio extends CI_CONTROLLER{

        public function __CONSTRUCT(){
            parent::__CONSTRUCT();
        }

        public function portofolio(){

            $data['title'] = "Unit Produksi RPL | SMKN 1 Boyolangu";
            
            $data['konten'] = "pages/portofolio/portofolio_konten";

            $this->load->view('template/Dashboard/Header_view',$data);
            $this->load->view('template/Dashboard/Dashboard_view');
            $this->load->view('template/Dashboard/Footer_view');

        }

    }