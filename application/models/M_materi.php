<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_materi extends CI_Model {
	var $table = 'peserta';
	var $column_order = array(null,'id_peserta','nama_lengkap','jenis_kelamin','tgl_lahir','status_gizi',null); //set column field database for datatable orderable
	var $column_search = array('id_peserta','nama_lengkap','jenis_kelamin'); //set column field database for datatable searchable just firstname , lastname , address are searchable
	var $order = array('nama_lengkap' => 'asc'); // default order 

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	private function _get_datatables_query($id)
	{
        $this->db->from($this->table);
        $this->db->join('event', 'event.id_event = peserta.id_event_fk', "left");
        $this->db->join('karyawan', 'karyawan.id_karyawan = peserta.id_karyawan_fk', "left");
        $this->db->where('peserta.id_event_fk', $id);

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

	function get_datatables($id)
	{
		$this->_get_datatables_query($id);
		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}

	function count_filtered($id)
	{
		$this->_get_datatables_query($id);
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_all($id)
	{
		$this->db->from($this->table);
        $this->db->join('event', 'event.id_event = peserta.id_event_fk', "left");
        $this->db->join('karyawan', 'karyawan.id_karyawan = peserta.id_karyawan_fk', "left");
        $this->db->where('peserta.id_event_fk', $id);
		return $this->db->count_all_results();
	}

    public function get_detail($id)
	{
		$this->db->from($this->table);
        $this->db->join('event', 'event.id_event = peserta.id_event_fk', "left");
        $this->db->join('karyawan', 'karyawan.id_karyawan = peserta.id_karyawan_fk', "left");
        $this->db->where('peserta.id_peserta', $id);
		$query = $this->db->get();
		return $query->row();
	}

	public function get_by_id_antropometri($where,$id)
	{
		$this->db->from('pemeriksaan_antropometri');
		$this->db->where($where,$id);
		$query = $this->db->get();

		return $query->row();
	}

    public function get_by_id_komposisi($where,$id)
	{
		$this->db->from('komposisi_tubuh');
		$this->db->where($where,$id);
		$query = $this->db->get();

		return $query->row();
	}

	public function get_by_id_soap($where,$id)
	{
		$this->db->from('soap_gizi');
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

	public function cek_lab($id)
	{
		$this->db->from('pemeriksaan_lab');
		$this->db->where('id_peserta_fk', $id);
		$query = $this->db->count_all_results();

		return $query;
	}

	public function get_lab($id)
	{
		$this->db->from('pemeriksaan_lab');
		$this->db->where('id_peserta_fk', $id);
		$query = $this->db->get();

		return $query->row();
	}

	public function cek_ekg($id)
	{
		$this->db->from('pemeriksaan_ekg');
		$this->db->where('id_peserta_fk', $id);
		$query = $this->db->count_all_results();

		return $query;
	}

	public function get_ekg($id)
	{
		$this->db->from('pemeriksaan_ekg');
		$this->db->where('id_peserta_fk', $id);
		$query = $this->db->get();

		return $query->row();
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

	public function save_antropometri($data)
	{
		if($this->db->insert('pemeriksaan_antropometri', $data)){
			return true;
		}else{
			return false;
		}
	}

    public function save_komposisi($data)
	{
		if($this->db->insert('komposisi_tubuh', $data)){
			return true;
		}else{
			return false;
		}
	}

	public function save_soap($data)
	{
		if($this->db->insert('soap_gizi', $data)){
			return true;
		}else{
			return false;
		}
	}

	public function update_antropometri($where, $data)
	{
		if($this->db->update('pemeriksaan_antropometri', $data, $where)){
			return true;
		}else{
			return false;
		}
	}

    public function update_komposisi($where, $data)
	{
		if($this->db->update('komposisi_tubuh', $data, $where)){
			return true;
		}else{
			return false;
		}
	}

    public function update_status_gizi($where, $update)
	{
		if($this->db->update($this->table, $update, $where)){
			return true;
		}else{
			return false;
		}
	}

	public function update_soap($where, $update)
	{
		if($this->db->update('soap_gizi', $update, $where)){
			return true;
		}else{
			return false;
		}
	}

    public function select_batch($searchTerm = "")
    {
        $this->db->select('*');
        $this->db->where("batch like '%" . $searchTerm . "%' ");
        $this->db->order_by('batch', 'asc');
        $this->db->limit('10');
        $fetched_records = $this->db->get('event');
        $databatch = $fetched_records->result_array();
 
        $data = array();
        foreach ($databatch as $batch) {
            $data[] = array("id" => $batch['id_event'], "text" => $batch['batch']);
        }
        return $data;
    }

}
