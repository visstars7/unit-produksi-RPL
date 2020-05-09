<?php 

    class Dashboard extends CI_CONTROLLER{

        public function Beranda(){

            $data['title'] = "Unit Produksi RPL | SMKN 1 Boyolangu";

            $this->load->view('template/Dashboard/Header_view',$data);
            $this->load->view('template/Dashboard/Dashboard_view');
            $this->load->view('template/Dashboard/Footer_view');

        }

    }