<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Karyawan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Karyawan_m', 'karyawan'); // Load Karyawan_Model ke controller ini
		$this->load->library('form_validation');
		$this->load->library('pagination');
	}
	public function index()
	{
		$data['title'] = 'Data | Karyawan';
		$data['karyawan'] = $this->karyawan->getAllKaryawan();

		// config pagination
		$config['base_url'] = 'http://localhost:8080/uas_ci_shofian_al_fikri/karyawan/index';
		$config['total_rows'] = $this->karyawan->countAllKaryawan();
		$config['per_page'] = 5;
		// styling
		$config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
		$config['full_tag_close'] = ' </ul></nav>';

		$config['first_link'] = 'Awal';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Akhir';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';

		$config['attributes'] = array('class' => 'page-link');

		$data['start'] = $this->uri->segment(3);
		// initialize
		$this->pagination->initialize($config);
		$data['karyawan'] = $this->karyawan->getKaryawan($config['per_page'], $data['start']);

		if ($this->input->post('keyword')) {
			$data['karyawan'] = $this->karyawan->cariDataKaryawan();
		}
		$this->load->view('template/header', $data);
		$this->load->view('karyawan/index', $data);
		$this->load->view('template/footer');
	}

	public function tambah()
	{
		$data['title'] = 'Form Tambah Data';
		$this->form_validation->set_rules('nip', 'Nip', 'required|numeric|max_length[10]');
		$this->form_validation->set_rules('nama', 'nama', 'required|max_length[50]');
		$this->form_validation->set_rules('jabatan', 'jabatan', 'required|max_length[50]');
		$this->form_validation->set_rules('alamat', 'alamat', 'required');
		if ($this->form_validation->run() == false) {
			$this->load->view('template/header', $data);
			$this->load->view('karyawan/tambah', $data);
			$this->load->view('template/footer');
		} else {
			$this->karyawan->tambahData();
			$this->session->set_flashdata('message', 'Ditambahkan!');
			redirect('karyawan');
		}
	}

	public function delete($id)
	{
		$this->karyawan->deleteDataKaryawan($id);
		$this->session->set_flashdata('message', 'Dihapus!');
		redirect('karyawan');
	}

	public function detail($id)
	{
		$data['title'] = 'Detail Data Karyawan';
		$data['karyawan'] = $this->karyawan->getKaryawanById($id);
		$this->load->view('template/header', $data);
		$this->load->view('karyawan/detail', $data);
		$this->load->view('template/footer');
	}

	public function update($id)
	{
		$data['title'] = 'Form Update Data';
		$data['karyawan'] = $this->karyawan->getKaryawanById($id);
		$this->form_validation->set_rules('nip', 'Nip', 'required|numeric|max_length[10]');
		$this->form_validation->set_rules('nama', 'nama', 'required|max_length[50]');
		$this->form_validation->set_rules('jabatan', 'jabatan', 'required|max_length[50]');
		$this->form_validation->set_rules('alamat', 'alamat', 'required');
		if ($this->form_validation->run() == false) {
			$this->load->view('template/header', $data);
			$this->load->view('karyawan/update', $data);
			$this->load->view('template/footer');
		} else {
			$this->karyawan->updateData();
			$this->session->set_flashdata('message', 'Diupdate!');
			redirect('karyawan');
		}
	}
}
