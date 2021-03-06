<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

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
	public function index()
	{
		$data['title'] = 'Halaman|Utama';
		$this->load->view('templets/sidebar', $data);
		$this->load->view('utama');
		$this->load->view('templets/footer');
	}
	public function dashboard()
	{
		$data['title'] = 'Halaman|Dashboard';
		$this->load->view('templets/sidebar', $data);
		$this->load->view('dashboard');
		$this->load->view('templets/footer');
	}
	public function mahasiswa()
	{
		$data['title'] = 'Halaman|Info';
		$this->load->view('templets/sidebar', $data);
		$this->load->view('mahasiswa');
		$this->load->view('templets/footer');
	}
	public function jadwalsemester()
	{
		$data['title'] = 'Halaman|Semester';
		$this->load->view('templets/sidebar', $data);
		$this->load->view('jadwalsemester');
		$this->load->view('templets/footer');
	}
}
