<?php

class WisataModel extends CI_Model
{
	public function get_data($table)
	{
	return $this->db->get($table);
	}

	public function tambah_wisata()
	{

		$data = [
			"nama_wisata" => $this->input->post('nama_wisata', true),
			"deskripsi" => $this->input->post('deskripsi', true),
			"kode_kategori" => $this->input->post('kode_kategori', true),
			"kode_fasilitas" => $this->input->post('kode_fasilitas', true),
			"buka" => $this->input->post('buka', true),
			"tutup" => $this->input->post('tutup', true)
		];

		$this->db->insert('destinasi', $data);
	}

	public function hapus_wisata($id)
	{

		$this->db->delete('destinasi', ['id_destinasi' => $id]);
	}

	public function getWisataById($id)
	{
		return $this->db->get_where('destinasi', ['id_destinasi' => $id])->row_array();
	}

	
	public function ubah_wisata()
	{
		$data = [
			"nama_wisata" => $this->input->post('nama_wisata', true),
			"deskripsi" => $this->input->post('deskripsi', true),
			"kode_kategori" => $this->input->post('kode_kategori', true),
			"kode_fasilitas" => $this->input->post('kode_fasilitas', true),
			"buka" => $this->input->post('buka', true),
			"tutup" => $this->input->post('tutup', true)
		];
		$this->db->where('id_destinasi', $this->input->post('id_destinasi'));
		$this->db->update('destinasi', $data);
	}
}