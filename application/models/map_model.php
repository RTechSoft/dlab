<?php
	class Map_model extends CI_Model
	{
		public function __construct()
		{
			$this->load->database();
		}
		
		//getters  for selecting everything from the db
		public function getHospitals()
		{
			$sql = "SELECT * FROM hospitals";
			
			return $this->db->query($sql);
		}
		public function getFirestations()
		{
			$sql = "SELECT * FROM firestations";
			
			return $this->db->query($sql);
		}
		public function getPolice()
		{
			$sql = "SELECT * FROM police";
			
			return $this->db->query($sql);
		}
		public function getSchools()
		{
			$sql = "SELECT * FROM schools";
			
			return $this->db->query($sql);
		}
		public function getOrgs()
		{
			$sql = "SELECT * FROM organization";
			
			return $this->db->query($sql);
		}
}
