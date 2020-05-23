
<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';


class Chat extends BaseController {

			 public function __construct()
			    {
			        parent::__construct();

								$this->load->model('chat_model');
								
			        $this->isLoggedIn();   
			    }

				public function chatListing()
			    {	

			    		$data['userId']  = $this->vendorId ; 

			    	    $data['ChatRecords'] = $this->chat_model->ChatListing($this->vendorId) ;

			    	    	foreach ($data['ChatRecords'] as $key ) {                
				                        $key->ChatPartListing             = $this->chat_model->ChatPartListing($key->disscussionId);
				                        $key->messageListing              = $this->chat_model->messageListing($key->disscussionId) ; 
				                  }


                        $this->loadViews("chat/list", $this->global, $data, NULL);   

				}

			 public function addMessage($disscussionId)
			    {	

			    		

                      $messageInfo = array(        
                                                             'senderId' => 'La Foundationa publier une nouveauté' ,
                                                             'createDTM' => date('Y-m-d H:i:s') , 
                                                             'senderId' => $this->vendorId ,
                                                             'disscussionId' => $disscussionId ,
                                                             'text' =>  $this->input->post('message')
                                                             );                                           
                       return   $this->chat_model->addNew($messageInfo) ;

				}







}
?>
