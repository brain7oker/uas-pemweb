<?php 
    class Home extends CI_Controller{
        function index(){
            redirect(base_url().'../index.html');
        }
    }
?>