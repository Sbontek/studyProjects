<?php 
	class Test_model extends CI_Model
	{
		public function __construct()
		{
			$this->load->database();
		}
		
		public function create_test()
		{
			$data = array
			(
				'test_name' => $this->input->post('name'),
				'user_id' => $this->session->userdata('user_id')
			);
			
			return $this->db->insert('tests', $data);
		}
		
		public function get_tests()
		{
			$this->db->order_by('test_name');
			$query = $this->db->get('tests');
			return $query->result_array();
		}
		
		public function get_test($id)
		{
			$query = $this->db->get_where('tests', array('id' => $id));
			return $query->row();
		}
		
		public function delete_test($id)
		{
			$this->db->where('test_id', $id);
			$this->db->delete('tests');
			return true;
		}
	}