<?php

class ControllerCatalogTzmodule extends Controller {
	private $error = array();

	public function index(){
		$this->load->language('catalog/tzmodule');
		$this->load->model('catalog/tzmodule');
		$this->document->setTitle($this->language->get('heading_title'));

		$data['heading_title'] = $this->language->get('heading_title);
		$data['button_text'] = $this->language->get('button_text');
		$data['core_category'] = $this->language->get('core_category');
		$data['second_category'] = $this->language->get('second_category');
		$data['commentary_column'] = $this->language->get('commentary_column');
		$data['action_column'] = $this->language->get('action_column');

		$this->load->model('setting/setting');
		

		$this->response->setOutput($this->load->view('catalog/tzmodule', $data));
	}
}