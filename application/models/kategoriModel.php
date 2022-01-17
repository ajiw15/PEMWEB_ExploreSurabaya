<?php

class KategoriModel extends CI_Model
{

	public function tampil_kategori()
	{
		return $this->db->get('kategori')->result_array();
	}

	public function tambah_kategori()
	{
		$data = [
			"kode_kategori" => $this->input->post('kode_kategori', true),
			"nama_kategori" => $this->input->post('nama_kategori', true)
		];

		$this->db->insert('kategori', $data);
	}

	public function hapus_kategori($id)
	{

		$this->db->delete('kategori', ['id_kategori' => $id]);
	}

	public function getKategoriById($id)
	{
		return $this->db->get_where('kategori', ['id_kategori' => $id])->row_array();
	}

	public function ubah_kategori()
	{
		$data = [
			"kode_kategori" => $this->input->post('kode_kategori', true),
			"nama_kategori" => $this->input->post('nama_kategori', true)
		];
		$this->db->where('id_kategori', $this->input->post('id_kategori'));
		$this->db->update('kategori', $data);
	}

}