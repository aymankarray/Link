<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';



class Academy extends BaseController {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('Academy_formation_model');
        
        $this->isLoggedInPub();   
    }
    

	public function formationListing()
		        {
						
		               
 					      
            			$data['count'] = "" ; 

		                $this->global['pageTitle'] = 'Academy';
		            	$data['Fromations'] = "" ;
		                $this->loadViews("academy/list", $this->global, $data, NULL);   
		        		

		        }
        		


	public function NewFormation()
		        {
		                
		                $this->global['pageTitle'] = 'Formation';
		           		$this->global['active'] = 'actu';
					    $data['FromationsTypes'] = "" ; 
		           		
		           		
		        		$this->loadViews("academy/newFormation", $this->global, $data, NULL);  
		        		  
		          
		        }  


    public function addNewA()
		        {
		                
		               $Titre = $this->input->post('titre');
		               $Description = $this->input->post('description');		       
			   		   $lien = $this->input->post('lien');

			   		   $target_dir = "uploads/Actu/";
	                    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	                    $uploadOk = 1;
	                    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

						if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file) ){
			   		   $actuInfo = array(
		                 'titre' =>  $Titre, 
		                 'description' => $Description ,
		                 'image' => basename($_FILES["fileToUpload"]["name"])  , 
		                 'lien' => $lien ,
		                 'createdBy' => $this->vendorId ,
		                 'createdDate'=> date('Y-m-d H:i:s')
		                     );

			   		   $resultat = $this->actualite_model->addNew($actuInfo);
			   		   

		        		  
		        		}
		        		redirect('user') ;  
		          
		        }    

				public function Show($actuId)
		        {
		                $data['actuInfo'] =  $this->actualite_model->actuById($actuId);
		                 $this->global['pageTitle'] = $data['actuInfo']->titre  ;
		           		 
		           		 $this->global['active'] = 'actu';
		        		 $this->loadViews("actu/view", $this->global, $data  , NULL); 
		        		  
		          
		        }  
		
}