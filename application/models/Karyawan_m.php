<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Karyawan_m extends CI_Model
{
	public function getAllKaryawan()
	{
		return $this->db->get('tb_karyawan')->result_array();
	}

	public function tambahData()
	{
		$data = [
			'nip' => $this->input->post('nip'),
			'nama' => $this->input->post('nama', true),
			'jabatan' => $this->input->post('jabatan', true),
			'alamat' => $this->input->post('alamat', true),
		];
		$this->db->insert('tb_karyawan', $data);
	}

	public function deleteDataKaryawan($id)
	{
		// $this->db->where('id', $id);
		$this->db->delete('tb_karyawan', ['id' => $id]);
	}

	public function getKaryawanById($id)
	{
		return $this->db->get_where('tb_karyawan', ['id' => $id])->row_array();
	}

	public function updateData()
	{
		$data = [
			'nip' => $this->input->post('nip'),
			'nama' => $this->input->post('nama', true),
			'jabatan' => $this->input->post('jabatan', true),
			'alamat' => $this->input->post('alamat', true),
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('tb_karyawan', $data);
	}

	public function cariDataKaryawan()
	{
		$keyword = $this->input->post('keyword', true);
		$this->db->like('nip', $keyword);
		$this->db->or_like('nama', $keyword);
		$this->db->or_like('jabatan', $keyword);
		$this->db->or_like('alamat', $keyword);
		return $this->db->get('tb_karyawan')->result_array();
	}

	public function getKaryawan($limit, $start)
	{
		return $this->db->get('tb_karyawan', $limit, $start)->result_array();
	}

	public function countAllKaryawan()
	{
		return $this->db->get('tb_karyawan')->num_rows();
	}
}
