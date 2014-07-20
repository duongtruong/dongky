<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
    
    class Home extends MX_Controller{
        
        public $data;
        
        public function __construct(){
           parent::__construct();   
       }

       public function index(){          
           $this->data['user'] = 'Duong Van Truong';
           $this->data['template'] = 'Vhome';
           $this->load->view('layout/layout',$this->data);
       }
       
       public function user(){          
            $this->data['template'] = 'Dương văn Trường';
            $this->load->view('Vhome2',$this->data);
       }
       
    }