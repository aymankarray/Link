<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';



class Task extends BaseController {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');

        $this->isLoggedInPub();   
    }

    function index()
    {
      $this->loadViews('task/list', $this->global, Null, NULL) ; 
    }
    



           
      



       
		
}