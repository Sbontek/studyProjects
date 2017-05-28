<?php
		class Users extends CI_Controller
		{
			public function register()
			{
				$data['title'] = 'Sign Up';
				$this->form_validation->set_rules('name', 'Name', 'required');
				$this->form_validation->set_rules('username', 'Username', 'required|callback_check_username_exists');
				$this->form_validation->set_rules('email', 'Email', 'required|valid_email|callback_check_email_exists');
				$this->form_validation->set_rules('password', 'Password', 'required');
				$this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]|required');

				
				if($this->form_validation->run() === FALSE)
				{
					$this->load->view('templates/header');
					$this->load->view('users/register', $data);
					$this->load->view('templates/footer');
					
				}
				else
				{
					//hash pwd
					$enc_password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
					
					$this->user_model->register($enc_password);
					
					//set message
					$this->session->set_flashdata('user_registered', 'You are now registered and can log in');
					
					redirect('posts');
					
				}
			}
			
			public function Login()
			{
				$data['title'] = 'Sign in';

				$this->form_validation->set_rules('username', 'Username', 'required');
				$this->form_validation->set_rules('password', 'Password', 'required');


				
				if($this->form_validation->run() === FALSE)
				{
					$this->load->view('templates/header');
					$this->load->view('users/login', $data);
					$this->load->view('templates/footer');
					
				}
				else
				{
					// get username
					$username = $this->input->post('username');
					//hash pwd
					$password = password_verify($this->input->post('password'), PASSWORD_DEFAULT);
					
					// login user
					$user = $this->user_model->login($username, $password);
					
					if($user)
					{
						// create session
						$user_data = array
						(
							'user_id' => $user->id,
							'username' => $username,
							'privy' => $user->privy,
							'logged_in' => true
						);
						
						$this->session->set_userdata($user_data);
						
						//set message
						$this->session->set_flashdata('user_loggedin', 'You are now logged in');
						
						redirect('');
					}
					else
					{
						//set message
						$this->session->set_flashdata('login_failed', 'Login is invalid');
					
						redirect('users/login');
					}
					
					//set message
					$this->session->set_flashdata('user_loggedin', 'You are now logged in');
					
					redirect('');
					
				}
			}
			
			// log out
			public function logout($username)
			{
				//unset userdata
				$this->session->unset_userdata('logged_in');
				$this->session->unset_userdata('user_id');
				$this->session->unset_userdata('username');
				$this->session->unset_userdata('privy');
				
				$this->session->set_flashdata('user_loggedout', 'You are now logged out');
				
				redirect('users/login');
			}
			
			public function check_username_exists($username)
			{
				$this->form_validation->set_message
				(
					'check_username_exists', 'That username is taken, please choose another one'
				);
				 
				if($this->user_model->check_username_exists($username))
				{
					return true;
				}
				else
				{
					return false;
				}
			}
			
			public function check_email_exists($email)
			{
				$this->form_validation->set_message
				(
					'check_email_exists', 'That email is taken, please choose another one'
				);
				 
				if($this->user_model->check_email_exists($email))
				{
					return true;
				}
				else
				{
					return false;
				}
			}
		}
		
		
?>