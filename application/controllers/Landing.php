<?php 

    class Landing extends CI_CONTROLLER{

        public function index(){

            $data['title'] = "Unit Produksi RPL";

            $this->load->view('template/home/Header_view',$data);

            $this->load->view('template/landing/Landing_view');

            $this->load->view('template/home/Footer_view');

        }

    }