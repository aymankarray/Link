<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';



class Academy extends BaseController {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('academy_formation_model');
        
        $this->isLoggedInPub();   
    }
    

	public function formationListing()
		        {
 					      
            			$data['count'] = "" ; 
		                $this->global['pageTitle'] = 'Academy';
		            	$data['Fromations'] = $this->academy_formation_model->formationListing() ;
		                $this->loadViews("academy/list", $this->global, $data, NULL);   
		        }
        		


	public function NewFormation()
		        {
		                
		                $this->global['pageTitle'] = 'Formation';
		           		$this->global['active'] = 'actu';
					    $data['FromationsTypes'] = "" ; 
		           		
		           		
		        		$this->loadViews("academy/formation/new", $this->global, $data, NULL);  
		        		  
		          
		        }  


    public function addNewF()
		        {
		                
		               $label = $this->input->post('label');
		               $Description = $this->input->post('description');
		               $type = $this->input->post('description');		       
			   		   	
 						$filenameCC = date('d_M_Y_H_i_s_'); 
			   		   $target_dir = "uploads/Academy/".$filenameCC;
	                    $target_file = $target_dir . basename($_FILES["affiche"]["name"]);
	                    $uploadOk = 1;
	                    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

						if(move_uploaded_file($_FILES["affiche"]["tmp_name"], $target_file) ){
			   		   $formationInfo = array(
		                 'label' =>  $label, 
		                 'description' => $Description ,
		                 'affiche' => $filenameCC.basename($_FILES["affiche"]["name"]) , 
		                 'type' => $type ,
		                 'createdBy' => $this->vendorId ,
		                 'createdDTM'=> date('Y-m-d H:i:s')
		                     );

			   		   $resultat = $this->academy_formation_model->addNew($formationInfo);
			   		   

		        		  
		        		}
		        		redirect('user') ;  
		          
		        }    

		public function formation($formationId)
		        {
		                $data['formationInfo'] =  $this->academy_formation_model->formationInfo($formationId);
		                 $this->global['pageTitle'] = $data['formationInfo']->label  ;
		           		 $data['chapters'] = Null ; 
		           		
		        		 $this->loadViews("academy/formation/view", $this->global, $data  , NULL); 
		        		  
		          
		        }  
		
}