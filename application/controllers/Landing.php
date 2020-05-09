<?php 

    class Landing extends CI_CONTROLLER{

        public function index(){

            $data['title'] = "Unit Produksi RPL | SMKN 1 Boyolangu";

            $this->load->view('template/landing/Header_view',$data);

            $this->load->view('template/landing/Landing_view');

            $this->load->view('template/landing/Footer_view');

        }

    }