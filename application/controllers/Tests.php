<?php 
	class Tests extends CI_Controller
	{	
		public function index()
		{
			$data['title'] = 'Tests';
			
			$data['tests'] = $this->test_model->get_tests();
			
			$this->load->view('templates/header');
			$this->load->view('tests/index', $data);
			$this->load->view('templates/footer');
		}
	
		public function create()
		{
			if(!$this->session->userdata('logged_in'))
			{
				redirect('users/login');
			}
			$data['title'] = 'Create Test';
			
			$this->form_validation->set_rules('name', 'Name', 'required');
			
			if($this->form_validation->run() === FALSE)
			{
				$this->load->view('templates/header');
				$this->load->view('tests/create', $data);
				$this->load->view('templates/footer');
			}
			else
			{
				$this->test_model->create_test();
				$this->session->set_flashdata('test_created', 'Your test has been created');
				redirect('tests');
			}
		}
		
		public function posts($id)
		{
			$data['title'] = $this->test_model->get_test($id)->name;
			
			$data['posts'] = $this->post_model->get_posts_by_category($id);
			
			$this->load->view('templates/header');
			$this->load->view('posts/index', $data);
			$this->load->view('templates/footer');
		}
		
		public function delete($id)
		{
			if(!$this->session->userdata('logged_in'))
			{
				redirect('users/login');
			}
			$this->test_model->delete_test($id);
			
			$this->session->set_flashdata('test_deleted', 'Your test has been deleted');
			
			redirect('test');
		}
	}