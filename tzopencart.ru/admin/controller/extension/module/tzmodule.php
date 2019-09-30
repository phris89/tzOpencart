<?php

class ControllerExtensionModuleTzmodule extends Controller {

	private $error = array();

	public function index(){
		$this->load->model('extension/module/tzmodule');

		if (($this->request->server['REQUEST_METHOD'] == 'POST')) {
			$this->model_extension_module_tzmodule->SaveSettings();
			$this->session->data['success'] = 'Настройки сохранены';
			$this->response->redirect($this->url->link('catalog/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
		}

		$data = array();
		$data['module_tzmodule_status'] = $this->model_extension_module_tzmodule->LoadSettings();

		$data += $this->load->language('extension/module/tzmodule');
		$data += $this->GetBreadCrumbs();

		$data['action'] = $this->url->link('extension/module/tzmodule', 'user_token=' . $this->session->data['user_token'], true);
    	$data['cancel'] = $this->url->link('catalog/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/tzmodule', $data));
	}

	private function GetBreadCrumbs() {
		$data = array();
		$data['breadcrumbs'] = array();
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/module/tzmodule', 'user_token=' . $this->session->data['user_token'], true)
		);
		return $data;
	}
}
