<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_buku extends CI_Model {
	var $table = 'controller_bab';
	var $column_order = array(null,'bab','status_bab',null); //set column field database for datatable orderable
	var $column_search = array('bab','status_bab'); //set column field database for datatable searchable just firstname , lastname , address are searchable
	var $order = array('id_controller_bab' => 'asc'); // default order 

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	private function _get_datatables_query()
	{
		
		$this->db->from($this->table);

		$i = 0;
	
		foreach ($this->column_search as $item) // loop column 
		{
			if($_POST['search']['value']) // if datatable send POST for search
			{
				
				if($i===0) // first loop
				{
					$this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
					$this->db->like($item, $_POST['search']['value']);
				}
				else
				{
					$this->db->or_like($item, $_POST['search']['value']);
				}

				if(count($this->column_search) - 1 == $i) //last loop
					$this->db->group_end(); //close bracket
			}
			$i++;
		}
		
		if(isset($_POST['order'])) // here order processing
		{
			$this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		} 
		else if(isset($this->order))
		{
			$order = $this->order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}

	function get_datatables()
	{
		$this->_get_datatables_query();
		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}

	function count_filtered()
	{
		$this->_get_datatables_query();
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_all()
	{
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}

	public function get_by_id($where,$id)
	{
		$this->db->from($this->table);
		$this->db->where($where,$id);
		$query = $this->db->get();

		return $query->row();
	}
	
	public function get_all()
	{
		$this->db->from($this->table);
		$query = $this->db->get();

		return $query->result();
	}
	
	public function search($value)
	{
		$this->db->from($this->table);
		$i = 0;
		foreach ($this->column_search as $item) // loop column 
		{
			if($value) // if datatable send POST for search
			{
				if($i===0) // first loop
				{
					$this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
					$this->db->like($item, $value);
				}
				else
				{
					$this->db->or_like($item, $value);
				}

				if(count($this->column_search) - 1 == $i) //last loop
					$this->db->group_end(); //close bracket
			}
			$i++;
		}
		$query = $this->db->get();

		return $query->result();
	}

	public function save($data)
	{
		if($this->db->insert($this->table, $data)){
			return true;
		}else{
			return false;
		}
	}

	public function update($where, $data)
	{
		if($this->db->update($this->table, $data, $where)){
			return true;
		}else{
			return false;
		}
	}

	public function delete_by_id($where,$id)
	{
		$this->db->where($where, $id);
		if($this->db->delete($this->table)){
			return true;
		}else{
			return false;
		}
	}

    public function cek_jawaban_soal($where_cek)
	{
		$this->db->from("jawaban_mahasiswa");
        $this->db->join("jawaban", "jawaban_mahasiswa.id_jawaban_fk=jawaban.id_jawaban", "left");
		$this->db->where($where_cek);
		$query = $this->db->get();

		return $query->num_rows();
	}

    public function cek_jawaban_essay($where_cek)
	{
		$this->db->from("jawaban_essay");
		$this->db->where($where_cek);
		$query = $this->db->get();

		return $query;
	}

    public function get_jawaban_soal($where_cek)
	{
		$this->db->from("jawaban_mahasiswa");
        $this->db->join("jawaban", "jawaban_mahasiswa.id_jawaban_fk=jawaban.id_jawaban", "left");
		$this->db->where($where_cek);
		$query = $this->db->get();

		return $query->row();
	}

    public function get_soal($where,$id)
	{
		$this->db->from("soal");
		$this->db->where($where,$id);
		$query = $this->db->get();

		return $query->row();
	}

    public function get_jawaban($where)
	{
		$this->db->from("jawaban");
		$this->db->where($where);
		$query = $this->db->get();

		return $query;
	}

    public function get_jawaban_benar($where)
	{
		$this->db->from("jawaban");
		$this->db->where($where);
		$query = $this->db->get();

		return $query;
	}

    public function save_jawaban($data)
	{
		if($this->db->insert("jawaban_mahasiswa", $data)){
			return true;
		}else{
			return false;
		}
	}

    public function save_essay($data)
	{
		if($this->db->insert("jawaban_essay", $data)){
			return true;
		}else{
			return false;
		}
	}

    public function save_ujian_soal($data)
	{
		if($this->db->insert("ujian_soal", $data)){
			return true;
		}else{
			return false;
		}
	}

    public function cek_ujian_soal($bagian, $mahasiswa)
	{
		$this->db->from("ujian_soal");
		$this->db->where("bagian", $bagian);
		$this->db->where("id_mahasiswa", $mahasiswa);
		$query = $this->db->get();

		return $query->num_rows();
	}

    public function get_soal_angket()
	{
		$this->db->from("soal_angket");
		$this->db->order_by("id_soal", "asc");
		$query = $this->db->get();

		return $query->result();
	}

    public function get_jawaban_angket($mahasiswa)
	{
		$this->db->from("ujian_soal");
		$this->db->where("bagian", 3);
		$this->db->where("id_mahasiswa", $mahasiswa);
        $this->db->order_by("soal", "asc");
		$query = $this->db->get();

		return $query->result();
	}

    public function get_jawaban_ujian_soal_1($mahasiswa)
	{
		$this->db->from("ujian_soal");
		$this->db->where("bagian", 1);
		$this->db->where("id_mahasiswa", $mahasiswa);
        $this->db->order_by("soal", "asc");
		$query = $this->db->get();

		return $query->result();
	}

    public function get_jawaban_ujian_soal_2($mahasiswa)
	{
		$this->db->from("ujian_soal");
		$this->db->where("bagian", 2);
		$this->db->where("id_mahasiswa", $mahasiswa);
        $this->db->order_by("soal", "asc");
		$query = $this->db->get();

		return $query->result();
	}
}
?>