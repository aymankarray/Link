<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';



class Passation extends BaseController {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('academy_formation_model');
        $this->load->model('user_cariere_model');
        $this->load->model('user_diplome_model');
        $this->load->model('ressource_model');

        $this->isLoggedInPub();   
    }
    



	public function NewPassation()
		        {	                
		                $this->global['pageTitle'] = 'Passation';
		                $data["Experience"] = $this->user_cariere_model->carrierListing($this->vendorId);   
		           		$data["Diplome"] = $this->user_diplome_model->diplomeListing($this->vendorId) ;
		           		


		           		$data["ExperienceA"] = $this->user_cariere_model->carrierAutreListing($this->vendorId) ;
		           		$data["ExperienceP"] = $this->user_cariere_model->carrierProListing($this->vendorId) ;
 						
 						        $data["Roles"] = $this->user_model->getUserAllRoles() ; 
       							 $data["Clubs"] = $this->user_model->getClubs() ;


		           		$data["ressourceInfo"] = $this->ressource_model->ressourceListingBUser($this->vendorId);


		        		$this->loadViews("club/passation/new", $this->global, $data, NULL);  
		        }  


  

	
		
		
}