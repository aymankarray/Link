
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chat extends BaseController {

			 public function __construct()
			    {
			        parent::__construct();

								$this->load->model('chat_model');
								
			        $this->isLoggedIn();   
			    }

				public function chatListing()
			    {

			    	    $data['reservationRecords'] = $this->chat_model->ChatListing() ;

			    	    	foreach ($data['reservationRecords'] as $key ) {                
				                        $key->ChatPartListing             = $this->chat_model->ChatPartListing($key->disscussionId);
				                        $key->messageListing              = $this->chat_model->messageListing($key->disscussionId) ; 
				                  }


                        $this->loadViews("chat/list", $this->global, $data, NULL);   

				}






}
?>
