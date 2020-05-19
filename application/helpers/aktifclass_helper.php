<?php 

    function aktifclass($data = '')
    {

        $ci =& get_instance();

        if($ci->router->fetch_class() == $data)
        {
            return "active";
        }
        else
        {
            return false;
        }

    }