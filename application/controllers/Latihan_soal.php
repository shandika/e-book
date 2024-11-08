<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Latihan_soal extends Admin_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
    public function __construct()
	{
		parent::__construct();
		$this->load->database();
        $this->load->model('M_latihan_soal','lat');
		$this->load->library('form_validation');
		$this->load->helper('form');
	}

	public function index()
	{
		$this->data['title'] 		= 'Latihan Soal';
		$this->data['message'] 		= '';
        
		$this->template->admin_render('latihan_soal/index', $this->data);
	}

    public function ajax_list(){
		if ( ! $this->ion_auth->logged_in() )
        {
            redirect('auth/login', 'refresh');
        }
        else
        {
			$list = $this->lat->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $l) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $l->first_name;
				$row[] = $l->bab;
				$row[] = $l->soal;
				$num_words = 11;
				$words = array();
				$words = explode(" ", $l->jawaban_essay, $num_words);
				$shown_string = "";

				if(count($words) == 11){
				$words[10] = " ... ";
				}

				$shown_string = implode(" ", $words);
				$row[] = $shown_string;
				
                $skor = "";
				$view = "";
				$edit = "";
				$view = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="View" onclick="view_jawaban('."'".$l->kode_jawaban_essay."'".')"><i class="fa feather-zoom-in"></i>View</a>';
                $skor = '<a class="btn btn-sm btn-success" href="javascript:void(0)" title="Beri Nilai" onclick="skor_jawaban('."'".$l->kode_jawaban_essay."'".')"><i class="fa fa-plus"></i> Nilai</a>';
                $edit = '<a class="btn btn-sm btn-warning" href="javascript:void(0)" title="Edit" onclick="edit_jawaban('."'".$l->kode_jawaban_essay."'".')"><i class="fa fa-wrench"></i> Edit</a>';
                
				if ($l->nilai == null || $l->nilai == "") {
                    $tindakan = $view . ' ' . $skor;
                } else {
                    $tindakan = $view . ' ' . $edit;
                }
                
				$row[] = $tindakan;
				$data[] = $row;
			}
			$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->lat->count_all(),
						"recordsFiltered" => $this->lat->count_filtered(),
						"data" => $data,
					);
			//output to json format
			echo json_encode($output);
		}
	}

	public function cek_latihan_soal()
	{
		$data = $this->lat->get_by_id('id_mahasiswa',$this->ion_auth->user()->row()->id)->result();
		echo json_encode($data);
	}

    public function ajax_edit($id)
	{
		$data = $this->lat->get_by_id('kode_jawaban_essay',$id)->row();
		echo json_encode($data);
	}

    public function ajax_add(){
		$this->form_validation->set_error_delimiters('', '');
		$this->form_validation->set_rules('skor','Nilai', 'required');
		if ($this->form_validation->run() == FALSE) {
			$errors = validation_errors();
            echo json_encode(['error'=>$errors]);
		} 
		else {
		  $data = array(
			'nilai'=>$this->input->post('skor')
		); 
		$status = $this->lat->update(array("kode_jawaban_essay" => $this->input->post('kode')),$data);
		echo json_encode(array("status" => $status));
		}	
	}
}
