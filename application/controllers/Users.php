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
			
			function check_username_exists($username)
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
			
			function check_email_exists($email)
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