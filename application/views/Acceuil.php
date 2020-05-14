<?php   

                                                $url = base_url().'Posts/Comments/'.$record->postId;
                                  
                                                $content = file_get_contents($url); 
                                            

                                                $json = json_decode($content, true);
                                                    

                                                   echo count($json) ;
                                               ?>  