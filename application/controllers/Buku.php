<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends Admin_Controller {

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
        $this->load->model('M_buku','buku');
        $this->load->model('M_controller_bab','bab');
		$this->load->library('form_validation');
		$this->load->helper('form');
	}

	public function index()
	{
		$this->data['title'] 		= 'Sampul';
		$this->data['message'] 		= '';
        
		$this->template->admin_render('sampul/index', $this->data);
	}

    public function bab1()
	{
		$this->data['title'] 		= 'BAB 1';
		$this->data['message'] 		= '';
		$this->data['soal_angket'] 	= $this->buku->get_soal_angket();
        $bab = $this->bab->get_by_id("id_controller_bab", 1);
        if($bab->status_bab == 0){
            $this->session->set_flashdata('message', "Halaman Terkunci");
			redirect('/', 'refresh');
        } else {
            $this->template->admin_render('buku/bab_1', $this->data);
        }
	}

    public function bab2()
	{
		$this->data['title'] 		= 'BAB 2';
		$this->data['message'] 		= '';
		$this->data['soal_angket'] 	= $this->buku->get_soal_angket();
		$bab = $this->bab->get_by_id("id_controller_bab", 2);
        if($bab->status_bab == 0){
            $this->session->set_flashdata('message', "Halaman Terkunci");
			redirect('/', 'refresh');
        } else {
            $this->template->admin_render('buku/bab_2', $this->data);
        }
	}

    public function bab3()
	{
		$this->data['title'] 		= 'BAB 3';
		$this->data['message'] 		= '';
		$this->data['soal_angket'] 	= $this->buku->get_soal_angket();
        $bab = $this->bab->get_by_id("id_controller_bab", 3);
        if($bab->status_bab == 0){
            $this->session->set_flashdata('message', "Halaman Terkunci");
			redirect('/', 'refresh');
        } else {
            $this->template->admin_render('buku/bab_3', $this->data);
        }
	}

    public function soal_akhir()
	{
		$this->data['title'] 		= 'SOAL AKHIR';
		$this->data['message'] 		= '';
		$this->data['soal_angket'] 	= $this->buku->get_soal_angket();
        $bab = $this->bab->get_by_id("id_controller_bab", 4);
        if($bab->status_bab == 0){
            $this->session->set_flashdata('message', "Halaman Terkunci");
			redirect('/', 'refresh');
        } else {
            $this->template->admin_render('buku/soal_akhir', $this->data);
        }
	}

    public function buka_soal()
    {
        $id = $this->input->get("id");
        $where_cek = array(
            "jawaban_mahasiswa.id_soal" => $id,
            "id_mahasiswa" => $this->ion_auth->user()->row()->id
        );
        $cek = $this->buku->cek_jawaban_soal($where_cek);
        $soal = $this->buku->get_soal("id_soal",$id);
        $where = array(
            "id_soal"   => $id
        );
        $jawaban = $this->buku->get_jawaban($where)->result();
        if ($cek > 0) {
            $jawaban_soal = $this->buku->get_jawaban_soal($where_cek);
            echo json_encode(array("status" => TRUE, "soal" => $soal, "jawaban" => $jawaban, "jawaban_soal" => $jawaban_soal));
        } else {
            echo json_encode(array("status" => FALSE, "soal" => $soal, "jawaban" => $jawaban));
        }
    }

    public function kunci_jawaban()
    {
        $id_soal = $this->input->post("id_soal");
        $where_cek = array(
            "jawaban_mahasiswa.id_soal" => $id_soal,
            "id_mahasiswa" => $this->ion_auth->user()->row()->id
        );
        $cek = $this->buku->cek_jawaban_soal($where_cek);
        if ($cek > 0) {
            echo json_encode(array("status" => FALSE));
        } else {
            $jawaban = $this->input->post("input");
            $alasan = $this->input->post("alasan");
            $soal = $this->buku->get_soal("id_soal",$id_soal);
            $where = array(
                "id_jawaban"    => $jawaban,
                "id_soal"       => $id_soal
            );
            $status = $this->buku->get_jawaban($where)->row();
            $status_jawaban = $status->status;
            $bab = $soal->bab;
            $data = array(
                "kode_jawaban"      => date("Ymdhis").$this->ion_auth->user()->row()->id.$id_soal,
                "id_soal"           => $id_soal,
                "id_jawaban_fk"     => $jawaban,
                "status_jawaban"    => $status_jawaban,
                "alasan"            => $alasan,
                "id_mahasiswa"      => $this->ion_auth->user()->row()->id
            );
            if ($this->buku->save_jawaban($data)) {
                echo json_encode(array("status" => TRUE));
            }
        }
        
    }

    public function tampilkan_jawaban()
    {
        $id_soal = $this->input->get("id_soal");
        $where_cek = array(
            "jawaban_mahasiswa.id_soal" => $id_soal,
            "id_mahasiswa" => $this->ion_auth->user()->row()->id
        );
        $cek = $this->buku->cek_jawaban_soal($where_cek);
        if ($cek > 0) {
            $where = array(
                "jawaban_mahasiswa.id_soal" => $id_soal,
                "id_mahasiswa" => $this->ion_auth->user()->row()->id,
            );
            $jawaban_mahasiswa = $this->buku->get_jawaban_soal($where);
            $where_jawaban = array(
                "id_soal"       => $id_soal,
                "status"        => "1"
            );
            $jawaban = $this->buku->get_jawaban_benar($where_jawaban)->row();
            echo json_encode(array("status" => TRUE, "jawaban" => $jawaban, "jawaban_mahasiswa" => $jawaban_mahasiswa));
        } else {
            echo json_encode(array("status" => FALSE));
        }
        
    }

    public function simpan_essay()
    {
        $soal       = $this->input->post("soal");
        $bab        = $this->input->post("bab");
        $jawaban    = $this->input->post("jawaban");
        $where_cek = array(
            "soal" => $soal,
            "bab"  => $bab,
            "id_mahasiswa" => $this->ion_auth->user()->row()->id
        );
        $cek = $this->buku->cek_jawaban_essay($where_cek)->num_rows();
        $data_essay = $this->buku->cek_jawaban_essay($where_cek)->row();
        if ($cek > 0) {
            echo json_encode(array("status" => FALSE, "jawaban" => $data_essay));
        } else {
            $data = array(
                "kode_jawaban_essay" => date("Ymdhis").$soal.$bab.$this->ion_auth->user()->row()->id,
                "soal"               => $soal,
                "bab"                => $bab,
                "jawaban_essay"      => $jawaban,
                "id_mahasiswa"       => $this->ion_auth->user()->row()->id
            );
            if ($this->buku->save_essay($data)) {
                echo json_encode(array("status" => TRUE));
            }
        }
        
    }

    public function get_jawaban_ujian_soal()
    {
        $angket = $this->buku->get_jawaban_angket($this->ion_auth->user()->row()->id);
        $satu = $this->buku->get_jawaban_ujian_soal_1($this->ion_auth->user()->row()->id);
        $dua = $this->buku->get_jawaban_ujian_soal_2($this->ion_auth->user()->row()->id);
        echo json_encode(array("angket" => $angket, "satu" => $satu, "dua" => $dua));
    }

    public function simpan_ujian_soal()
    {
        $counter = "";
        $bagian = $this->input->post('bagian');
        $cek = $this->buku->cek_ujian_soal($bagian, $this->ion_auth->user()->row()->id);
        if ($cek > 0) {
            echo json_encode(array("status" => FALSE));
        } else {
            if ($bagian == 1) {
                $counter = 16;
            } elseif($bagian == 2) {
                $counter = 11;
            } else {
                $counter = 21;
            }
            for ($i=1; $i < $counter ; $i++) { 
                $soal = $this->input->post('soal_'.$bagian.'_'.$i.'');
                $data = array(
                    "kode_ujian_soal"       => date("Ymdhis").$bagian.$i.$this->ion_auth->user()->row()->id,
                    "soal"                  => $i,
                    "bagian"                => $bagian,
                    "jawaban_ujian_soal"    => $soal,
                    "id_mahasiswa"          => $this->ion_auth->user()->row()->id
                );
                $this->buku->save_ujian_soal($data);
            }
            echo json_encode(array("status" => TRUE));
        }
    }
}
