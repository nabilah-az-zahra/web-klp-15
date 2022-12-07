<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

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
		$data['meta'] = [
			'title' => 'MyPage',
		];

		$this->load->view('home', $data);
	}

	public function about()
	{
		$data['meta'] = [
			'title' => 'About MyPage',
		];

		$this->load->view('about', $data);
	}

	public function contact()
	{
		$data['meta'] = [
		'title' => 'Contact Us',
		];
		$this->load->library('form_validation');

		if ($this->input->method() === 'post') {
			$this->load->model('feedback_model');

			$rules = $this->feedback_model->rules();
			$this->form_validation->set_rules($rules);

			if ($this->form_validation->run() == FALSE) {
			return $this->load->view('contact', $data);
			}

			$feedback = [
			'id' => uniqid('', true),
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'message' => $this->input->post('message')
			];

			$feedback_saved = $this->feedback_model->insert($feedback);

			if ($feedback_saved) {
			return $this->load->view('contact_thanks');
			}
		}

		$this->load->view('contact', $data);
	}
}