<?php 

    class Notfound extends CI_CONTROLLER{

        public function __CONSTRUCT(){
            parent::__CONSTRUCT();
        }

        public function index(){

            $data['heading'] = "Page Not Found!";
            $data['message'] = "The page you requested was not found.";

            $this->load->view('errors/html/error_404',$data);

        }

    }