<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_materi extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
        $this->load->model('M_materi','materi');
        $this->load->model('M_controller_bab','bab');
        $this->load->model('M_controller_subbab','subbab');
		$this->load->library('form_validation');
		$this->load->helper('form');
	}

	public function index()
	{
		$this->data['title']    = 'Controller Materi';
		$this->data['message']  = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

		$this->template->admin_render('controller_materi/index', $this->data);
	}

    public function ajax_list_bab(){
		if ( ! $this->ion_auth->logged_in() )
        {
            redirect('auth/login', 'refresh');
        }
        else
        {
			
			$list = $this->bab->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $bab) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $bab->bab;
				$aktif = "";
				if ($bab->status_bab == 1) {
					$aktif = '<a href="javascript:void(0)" title="Nonkatifkan" onclick="inactivate_bab('."'".$bab->id_controller_bab."'".')">Aktif</a>';
				} else {
					$aktif = '<a href="javascript:void(0)" title="Aktifkan" onclick="activate_bab('."'".$bab->id_controller_bab."'".')">Inaktif</a>';
				}
				$row[] = $aktif;
				
                $edit = "";
				$delete = "";
				$view = "";
				$view = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="View" onclick="view_evidence('."'".$bab->id_controller_bab."'".')"><i class="glyphicon glyphicon-magnifier"></i>View</a>';
                $edit = '<a class="btn btn-sm btn-warning" href="javascript:void(0)" title="Edit" onclick="edit_evidence('."'".$bab->id_controller_bab."'".')"><i class="fa fa-wrench"></i> Edit</a>';
                $delete =  '<a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_evidence('."'".$bab->id_controller_bab."'".')"><i class="glyphicon glyphicon-trash"></i>Delete</a>';
                
				$tindakan = $edit;
				$row[] = $tindakan;
				$data[] = $row;
			}
			$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->bab->count_all(),
						"recordsFiltered" => $this->bab->count_filtered(),
						"data" => $data,
					);
			//output to json format
			echo json_encode($output);
		}
	}

	public function ajax_list_subbab(){
		if ( ! $this->ion_auth->logged_in() )
        {
            redirect('auth/login', 'refresh');
        }
        else
        {
			
			$list = $this->subbab->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $bab) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $bab->bab;
				$row[] = $bab->subbab;
				$aktif = "";
				if ($bab->status_subbab == 1) {
					$aktif = '<a href="javascript:void(0)" title="Nonkatifkan" onclick="inactivate_subbab('."'".$bab->id_controller_subbab."'".')">Aktif</a>';
				} else {
					$aktif = '<a href="javascript:void(0)" title="Aktifkan" onclick="activate_subbab('."'".$bab->id_controller_subbab."'".')">Inaktif</a>';
				}
				$row[] = $aktif;
				
                $edit = "";
                $edit = '<a class="btn btn-sm btn-warning" href="javascript:void(0)" title="Edit" onclick="edit_evidence('."'".$bab->id_controller_subbab."'".')"><i class="fa fa-wrench"></i> Edit</a>';
                
				$tindakan = $edit;
				$row[] = $tindakan;
				$data[] = $row;
			}
			$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->subbab->count_all(),
						"recordsFiltered" => $this->subbab->count_filtered(),
						"data" => $data,
					);
			//output to json format
			echo json_encode($output);
		}
	}

	public function cek_materi()
	{
		$id = $this->input->get("id");
		$bab = $this->bab->get_all();
		$subbab = $this->subbab->get_all_by_id("bab_fk", $id);

		echo json_encode(array("bab" => $bab, "subbab" => $subbab));
	}

	public function activate_bab()
	{
		$id = $this->input->post('id');
		$data = array(
			"status_bab" => "1"
		);
		$update = $this->bab->activate(array('id_controller_bab' => $id), $data);
		if ($update) {
			echo json_encode(array("status" => true));
		} else {
			echo json_encode(array("status" => false));
		}
	}

	public function inactivate_bab()
	{
		$id = $this->input->post('id');
		$data = array(
			"status_bab" => "0"
		);
		$update = $this->bab->activate(array('id_controller_bab' => $id), $data);
		if ($update) {
			echo json_encode(array("status" => true));
		} else {
			echo json_encode(array("status" => false));
		}
	}

	public function activate_subbab()
	{
		$id = $this->input->post('id');
		$data = array(
			"status_subbab" => "1"
		);
		$update = $this->subbab->activate(array('id_controller_subbab' => $id), $data);
		if ($update) {
			echo json_encode(array("status" => true));
		} else {
			echo json_encode(array("status" => false));
		}
	}

	public function inactivate_subbab()
	{
		$id = $this->input->post('id');
		$data = array(
			"status_subbab" => "0"
		);
		$update = $this->subbab->activate(array('id_controller_subbab' => $id), $data);
		if ($update) {
			echo json_encode(array("status" => true));
		} else {
			echo json_encode(array("status" => false));
		}
	}

}
