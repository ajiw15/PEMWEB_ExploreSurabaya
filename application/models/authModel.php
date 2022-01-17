<?php 

class AuthModel extends CI_Model
{
	public function cek_login($username, $password)
	{
		$this->db->where("username", $username);
		$this->db->where("password", $password);
		$this->db->get('user');
		return $this->db->get('user');
	}

	public function getLoginData($user, $pass)
	{
		$u = $user;
		$p = MD5($pass);

		$query = $this->db->get_where('user', array('username' => $u,'password' => $p));

		if(count($query->result()) > 0)
		{
			foreach($query->result() as $q)
			{
				foreach ($query->result() as $c )
				 {
					$sess_data ['logged_in'] = TRUE;
					$sess_data ['username'] = $c->$username;
					$sess_data ['password'] = $c->$password;
					$sess_data ['level'] = $c->$level;
					$this->session->set_userdata($sess_data);
				}
				redirect('dashboard');
			}
		}else{
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">Maaf Username dan Password Anda Salah<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>');
			redirect('auth');
		}
	}
}