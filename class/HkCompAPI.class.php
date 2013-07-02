<?php

///////////////////////////////////////////////////////////////
// @ HkCompAPI Class Used for interacting with the Harkable API
// @ 15th February 2013
// @ Author: Ashley Ford
// @ ashley@harkable.com
//////////////////////////////////////////////////////////////

class HkCompAPI {
 
	 function save($campaign){
			
			    // create curl resource
		        $ch = curl_init();
		        
		        // check for a campaign name
		        if($campaign==''){        
			        return array('_campaign'=>'campaign name is missing');
			        exit();	        
		        }
		        
		        $_POST['_campaign'] = $campaign;
		
		        // set options
		        curl_setopt($ch, CURLOPT_URL, "https://harkable-clients.pagodabox.com/ign_api/api.php");
		        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
		        curl_setopt($ch, CURLOPT_USERPWD, 'admin:igngames');
		        curl_setopt($ch, CURLOPT_POST, 1);
		        curl_setopt($ch, CURLOPT_POSTFIELDS, $_POST);
				curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		        
		        $output = curl_exec($ch);
		
		        // close curl resource to free up resource
		        curl_close($ch);
		        // return the result
		        return unserialize($output);	     
		                    
		}
		
	public function validate($validation) {
	
			$this->errors = array();
			
			for ($i = 0; $i < count($validation); $i ++) {
				$v = $validation[$i];
						
				$field 	 = $v[0];
				$label	 = $v[1];
				$rule	 = $v[2];
				
				$value = $_POST[$field];
				
				switch ($rule) {
					case 'required':
						if (strlen($value) == 0) {
							array_push($this->errors, "$label");
						}
						break;
					case 'valid_email':
						if (! preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", $value)) {
							array_push($this->errors, "$label");
						}
						break;
					case 'over_18':		
						$age_int = intval(substr(date('Ymd') - date('Ymd', strtotime($value)), 0, -4));				
						if ($age_int < 18){
							array_push($this->errors, "$label");									
						}
						break;	
					case 'captcha':				
						if (strlen($value) > 0){
							array_push($this->errors, "$label");									
						}
						break;							
										
				}
			}
			
			if (count($this->errors) > 0) {
				return $this->errors;
			} else {
				return FALSE;
			}
		}

 
}