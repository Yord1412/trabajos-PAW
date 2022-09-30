<?php
	if(isset($_POST["action"])){
		switch ($_POST['action']) {
			case 'access':
				$email = strip_tags($_POST['email']);

				$password = strip_tags($_POST['password']);
				$autController = new AutController();
				$autController->login($email,$password);
			break;
			
			default:
				
			break;
		}
	}
	/**
	 * 
	 */
	class AutController
	{
		
		public function login($email,$pwd)
		{
			$curl = curl_init();

			curl_setopt_array($curl, array(
			  CURLOPT_URL => 'https://crud.jonathansoto.mx/api/login?jsegoviano_18@alu.uabcs.mx=0S%25262Y6z9LLWXBf',
			  CURLOPT_RETURNTRANSFER => true,
			  CURLOPT_ENCODING => '',
			  CURLOPT_MAXREDIRS => 10,
			  CURLOPT_TIMEOUT => 0,
			  CURLOPT_FOLLOWLOCATION => true,
			  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			  CURLOPT_CUSTOMREQUEST => 'POST',
			  CURLOPT_POSTFIELDS => array('email' => $email,'password' => $pwd),
			));

			$response = curl_exec($curl);

			curl_close($curl);
			$response = json_decode($response);

			if (isset($response->code) && $response->code > 0) {
				session_start();

				$_SESSION['id'] = $response->data->id;
				$_SESSION['name'] = $response->data->name;
				$_SESSION['lastname'] = $response->data->lastname;
				$_SESSION['avatar'] = $response->data->avatar;
				$_SESSION['role'] = $response->data->role;
				$_SESSION['token'] = $response->data->token;

				header("Location:../products?success");
			}else{
				header("Location:../?error");
			}
		}
	}
?>