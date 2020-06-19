<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';



class Passation extends BaseController {

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
		            	$data['Fromations'] = $this->passation_model->passationListing() ;
		                $this->loadViews("club/passation/list", $this->global, $data, NULL);   
		        }
        		


	public function NewPassation()
		        {
		                
		                $this->global['pageTitle'] = 'Passation';

		                $data['Fromations'] = "" ;
		           		
		           		
		        		$this->loadViews("club/passation/new", $this->global, $data, NULL);  
		        		  
		          
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
		           		 $data['chapters'] = $this->academy_formation_model->formationChaptersInfo($formationId) ; 
		           		
		        		 $this->loadViews("academy/formation/view", $this->global, $data  , NULL); 
		        		  
		          
		        }  


		public function part($formationId)
		        {
		              $formationInfo = array(
		                 'formationId' =>  $formationId, 
		                 'createdBy' => $this->vendorId ,
		                 'userId' => $this->vendorId ,
		                 'createdDTM'=> date('Y-m-d H:i:s'),
		                 'certif' => 0 
		                     );
		           		
		              $resultat = $this->academy_formation_model->addNewPart($formationInfo);


		        		redirect('Academy/Exam/'.$resultat) ;   
		          
		        }  


		public function Exam($partId)
		        {
					

		     $data['questions'] = $this->academy_formation_model->formationQuizsInfo($partId) ; 
			$data['Formation'] = $this->academy_formation_model->formationInfo($data['questions'][0]->formationId) ;


		           $this->loadViews("academy/quiz/view", $this->global, $data  , NULL); 
		        }  


		public function Result($partId)
		        {
		           $note = $this->input->get('note');
		           if($note > 70)
		            {
		             $formationInfo = array(
		                 'note' =>  $formationId, 
		                 'certif' => 2, 
		                 'certifDTM'=> date('Y-m-d H:i:s'),
		                     );
		            }
		             else
		            {
		             	$formationInfo = array(
		                 'note' =>  $formationId, 
		                 'certif' => 1, 
		                     );
		            }

		           $this->academy_formation_model->editPart($participantInfo, $partId) ; 

		           redirect("certificat/".$partId); 
		        }  


		     public function certificat($partId)
		        {
		           
				   $data['certificat'] = $this->academy_formation_model->formationQuizsInfo($partId) ;


		           $this->loadViews("academy/certificat/view".$data['certificat'][0]->label , $this->global, $data  , NULL); 
		           
		        }  
		
		
}