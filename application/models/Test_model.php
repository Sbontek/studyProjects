<?php 
	class Test_model extends CI_Model
	{
		public function __construct()
		{
			$this->load->database();
		}
		
		public function get_subsections($test_id)
		{
			$this->db->select('*');
			$this->db->from('test_subsection');
			$this->db->where('test_subsection.test_id', $test_id);
			$query = $this->db->get();
			return $query->result();
		}
		
		public function get_questions($test_id, $question_offset)
		{
			$this->db->select('*');
			$this->db->from('questions');
			$this->db->where('test_subsection.test_id', $test_id);
			$this->db->join('test_subsection', 'test_subsection.test_subsection_id = questions.subsection_id');
			$this->db->limit(1, $question_offset);
			$query = $this->db->get();
			return $query->result();
		}
		
		public function get_answers($question_id)
		{
			$this->db->select('*');
			$this->db->from('answers');
			$this->db->where('answers.question_id', $question_id);
			$query = $this->db->get();
			return $query->result();
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
		

	}