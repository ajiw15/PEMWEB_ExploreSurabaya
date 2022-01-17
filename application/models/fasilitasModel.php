<?php

class FasilitasModel extends CI_Model
{

	public function tampil_fasilitas()
	{
		return $this->db->get('fasilitas')->result_array();
	}

	public function tambah_fasilitas()
	{
		$data = [
			"kode_fasilitas" => $this->input->post('kode_fasilitas', true),
			"nama_fasilitas" => $this->input->post('nama_fasilitas', true)
		];

		$this->db->insert('fasilitas', $data);
	}

	public function hapus_fasilitas($id)
	{
		$this->db->delete('fasilitas',['id_fasilitas' => $id]);
	}

	public function getFasilitasById($id)
	{
		return $this->db->get_where('fasilitas', ['id_fasilitas' => $id])->row_array();
	}

	
	public function ubah_fasilitas()
	{
		$data = [
			"kode_fasilitas" => $this->input->post('kode_fasilitas', true),
			"nama_fasilitas" => $this->input->post('nama_fasilitas', true)
		];
		$this->db->where('id_fasilitas', $this->input->post('id_fasilitas'));
		$this->db->update('fasilitas', $data);
	}
}