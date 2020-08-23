<?php

/*
 * IT IS NOT FREE, YOU SHOULD BUY / REFISTER A LICENSE AT HTTPS://MMOSolution.COM
 * CONTACT: toan@MMOSOLUTION.COM 
 * AUTHOR: MMOSOLUTION TEAM AT VIETNAM
 * All code within this file is copyright MMOSOLUTION.COM TEAM | FOUNDED @2012
 * You can not copy or reuse code within this file without written permission.
*/

 class ControllerExtensionPaymentvirtualmerchantpro extends Controller {

    private $error = array();

    public function index() {
        //WWw.MMOsolution.com config data -- DO NOT REMOVE--- 
        $data['MMOS_version'] = '2.5';
        $data['MMOS_code_id'] = 'MMOSOC274';


        $this->load->language('extension/payment/virtualmerchantpro');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('setting/setting');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
            $this->model_setting_setting->editSetting('virtualmerchantpro', $this->request->post);
			
			if(isset($this->request->post['virtualmerchantpro_status'])){
				$payment_virtualmerchantpro_status = $this->request->post['virtualmerchantpro_status'];
			}else{
				$payment_virtualmerchantpro_status = "0";
			}
		    $this->model_setting_setting->editSetting('payment_', array('payment_virtualmerchantpro_status' => $payment_virtualmerchantpro_status));

            $this->session->data['success'] = $this->language->get('text_success');

            if (isset($this->request->get['stay'])) {
                $this->response->redirect($this->url->link('extension/payment/virtualmerchantpro', 'user_token=' . $this->session->data['user_token'], true));
            } else {
                $this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=payment', true));
            }
        }

        $data['heading_title'] = $this->language->get('heading_title');

        $data['entry_merchant_id'] = $this->language->get('entry_merchant_id');
        $data['entry_user_id'] = $this->language->get('entry_user_id');
        $data['entry_ssl_pin'] = $this->language->get('entry_ssl_pin');
        $data['entry_environment'] = $this->language->get('entry_environment');
        $data['entry_paygatelogo'] = $this->language->get('entry_paygatelogo');
        $data['help_paygatelogo'] = $this->language->get('help_paygatelogo');
        $data['entry_config_image'] = $this->language->get('entry_config_image');

        $data['entry_total'] = $this->language->get('entry_total');
        $data['entry_order_status'] = $this->language->get('entry_order_status');
        $data['entry_geo_zone'] = $this->language->get('entry_geo_zone');
        $data['entry_status'] = $this->language->get('entry_status');
        $data['entry_sort_order'] = $this->language->get('entry_sort_order');
        $data['entry_debug'] = $this->language->get('entry_debug');
        $data['entry_merchant_hosted'] = $this->language->get('entry_merchant_hosted');
        $data['help_merchant_hosted'] = $this->language->get('help_merchant_hosted');

        $data['entry_approved_order_status'] = $this->language->get('entry_approved_order_status');
        $data['entry_complete_status'] = $this->language->get('entry_complete_status');
        $data['entry_rejected_status'] = $this->language->get('entry_rejected_status');
        $data['entry_cancelled_status'] = $this->language->get('entry_cancelled_status');
        $data['entry_pending_status'] = $this->language->get('entry_pending_status');
        $data['entry_refunded_status'] = $this->language->get('entry_refunded_status');
        $data['entry_partially_refunded_status'] = $this->language->get('entry_partially_refunded_status');

        $data['virtualmerchantpro_environment_live'] = $this->language->get('virtualmerchantpro_environment_live');
        $data['virtualmerchantpro_environment_test'] = $this->language->get('virtualmerchantpro_environment_test');

        $data['text_edit'] = $this->language->get('text_edit');
        $data['text_enabled'] = $this->language->get('text_enabled');
        $data['text_disabled'] = $this->language->get('text_disabled');
        $data['text_all_zones'] = $this->language->get('text_all_zones');
        $data['text_multi_currencies'] = $this->language->get('text_multi_currencies');
        $data['text_multi_currencies_help'] = $this->language->get('text_multi_currencies_help');

        $data['help_merchant_id'] = $this->language->get('help_merchant_id');
        $data['help_user_id'] = $this->language->get('help_user_id');
        $data['help_ssl_pin'] = $this->language->get('help_ssl_pin');
        $data['entry_live_account'] = $this->language->get('entry_live_account');
        $data['entry_demo_account'] = $this->language->get('entry_demo_account');
        $data['text_live_account'] = $this->language->get('text_live_account');
        $data['text_demo_account'] = $this->language->get('text_demo_account');


        $data['help_total'] = $this->language->get('help_total');
        $data['help_debug'] = $this->language->get('help_debug');

        $data['tab_settings'] = $this->language->get('tab_settings');
        $data['tab_order_status'] = $this->language->get('tab_order_status');
        $data['tab_support'] = $this->language->get('tab_support');

        $data['button_save'] = $this->language->get('button_save');
        $data['btn_save_stay'] = $this->language->get('btn_save_stay');
        $data['button_cancel'] = $this->language->get('button_cancel');

        if (isset($this->session->data['success'])) {
            $data['success'] = $this->session->data['success'];
            unset($this->session->data['success']);
        } else {
            $data['success'] = '';
        }


        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
        }

        if (isset($this->error['merchant_id'])) {
            $data['error_merchant_id'] = $this->error['merchant_id'];
        } else {
            $data['error_merchant_id'] = '';
        }

        if (isset($this->error['user_id'])) {
            $data['error_user_id'] = $this->error['user_id'];
        } else {
            $data['error_user_id'] = '';
        }

        if (isset($this->error['ssl_pin'])) {
            $data['error_ssl_pin'] = $this->error['ssl_pin'];
        } else {
            $data['error_ssl_pin'] = '';
        }
        if (isset($this->error['multi_currency'])) {
            $data['error_multi_currency'] = $this->error['multi_currency'];
        } else {
            $data['error_multi_currency'] = '';
        }


        if (isset($this->request->post['virtualmerchantpro_order_status_id'])) {
            $data['virtualmerchantpro_order_status_id'] = $this->request->post['virtualmerchantpro_order_status_id'];
        } else {
            $data['virtualmerchantpro_order_status_id'] = $this->config->get('virtualmerchantpro_order_status_id');
        }

        if (isset($this->request->post['virtualmerchantpro_complete_status_id'])) {
            $data['virtualmerchantpro_complete_status_id'] = $this->request->post['virtualmerchantpro_complete_status_id'];
        } else {
            $data['virtualmerchantpro_complete_status_id'] = $this->config->get('virtualmerchantpro_complete_status_id');
        }

        if (isset($this->request->post['virtualmerchantpro_rejected_status_id'])) {
            $data['virtualmerchantpro_rejected_status_id'] = $this->request->post['virtualmerchantpro_rejected_status_id'];
        } else {
            $data['virtualmerchantpro_rejected_status_id'] = $this->config->get('virtualmerchantpro_rejected_status_id');
        }

        if (isset($this->request->post['virtualmerchantpro_cancelled_status_id'])) {
            $data['virtualmerchantpro_cancelled_status_id'] = $this->request->post['virtualmerchantpro_cancelled_status_id'];
        } else {
            $data['virtualmerchantpro_cancelled_status_id'] = $this->config->get('virtualmerchantpro_cancelled_status_id');
        }

        if (isset($this->request->post['virtualmerchantpro_pending_status_id'])) {
            $data['virtualmerchantpro_pending_status_id'] = $this->request->post['virtualmerchantpro_pending_status_id'];
        } else {
            $data['virtualmerchantpro_pending_status_id'] = $this->config->get('virtualmerchantpro_pending_status_id');
        }

        if (isset($this->request->post['virtualmerchantpro_refunded_status_id'])) {
            $data['virtualmerchantpro_refunded_status_id'] = $this->request->post['virtualmerchantpro_refunded_status_id'];
        } else {
            $data['virtualmerchantpro_refunded_status_id'] = $this->config->get('virtualmerchantpro_refunded_status_id');
        }

        if (isset($this->request->post['virtualmerchantpro_partially_refunded_status_id'])) {
            $data['virtualmerchantpro_partially_refunded_status_id'] = $this->request->post['virtualmerchantpro_partially_refunded_status_id'];
        } else {
            $data['virtualmerchantpro_partially_refunded_status_id'] = $this->config->get('virtualmerchantpro_partially_refunded_status_id');
        }

        if (isset($this->request->post['virtualmerchantpro_merchant_hosted'])) {
            $data['virtualmerchantpro_merchant_hosted'] = $this->request->post['virtualmerchantpro_merchant_hosted'];
        } else {
            $data['virtualmerchantpro_merchant_hosted'] = $this->config->get('virtualmerchantpro_merchant_hosted');
        }
        if (isset($this->request->post['virtualmerchantpro_merchant_hosted'])) {
            $data['virtualmerchantpro_merchant_hosted'] = $this->request->post['virtualmerchantpro_merchant_hosted'];
        } else {
            $data['virtualmerchantpro_merchant_hosted'] = $this->config->get('virtualmerchantpro_merchant_hosted');
        }
        if (isset($this->request->post['virtualmerchantpro_use_account'])) {
            $data['virtualmerchantpro_use_account'] = $this->request->post['virtualmerchantpro_use_account'];
        } else {
            $data['virtualmerchantpro_use_account'] = $this->config->get('virtualmerchantpro_use_account');
        }
        
        if (isset($this->request->post['virtualmerchantpro_merchant_multi_currency'])) {
            $data['virtualmerchantpro_merchant_multi_currency'] = $this->request->post['virtualmerchantpro_merchant_multi_currency'];
        } else {
            $data['virtualmerchantpro_merchant_multi_currency'] = $this->config->get('virtualmerchantpro_merchant_multi_currency');
        }
        // do not allow show form
        $data['virtualmerchantpro_merchant_hosted'] = 1;


        $this->load->model('tool/image');


        if (isset($this->request->post['virtualmerchantpro_image']) && is_file(DIR_IMAGE . $this->request->post['virtualmerchantpro_image'])) {
            $data['virtualmerchantpro_image'] = $this->request->post['virtualmerchantpro_image'];
        } elseif ($this->config->get('virtualmerchantpro_image') && is_file(DIR_IMAGE . $this->config->get('virtualmerchantpro_image'))) {
            $data['virtualmerchantpro_image'] = $this->config->get('virtualmerchantpro_image');
        } else {
            $data['virtualmerchantpro_image'] = 'no_image.png';
        }

        $data['thumb'] = $this->model_tool_image->resize($data['virtualmerchantpro_image'], 100, 100);

        if (isset($this->request->post['virtualmerchantpro_image_width'])) {
            $data['virtualmerchantpro_image_width'] = $this->request->post['virtualmerchantpro_image_width'];
        } else {
            $data['virtualmerchantpro_image_width'] = $this->config->get('virtualmerchantpro_image_width');
        }

        if (isset($this->request->post['virtualmerchantpro_image_height'])) {
            $data['virtualmerchantpro_image_height'] = $this->request->post['virtualmerchantpro_image_height'];
        } else {
            $data['virtualmerchantpro_image_height'] = $this->config->get('virtualmerchantpro_image_height');
        }

        $data['placeholder'] = $this->model_tool_image->resize('no_image.png', 100, 100);


        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_extension'),
            'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=payment', true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('extension/payment/virtualmerchantpro', 'user_token=' . $this->session->data['user_token'], true)
        );

        $this->load->model('localisation/order_status');
        $data['order_statuses'] = $this->model_localisation_order_status->getOrderStatuses();

        $data['action'] = $this->url->link('extension/payment/virtualmerchantpro', 'user_token=' . $this->session->data['user_token'], true);

        $data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=payment', true);

        if (isset($this->request->post['virtualmerchantpro_ssl_merchant_id'])) {
            $data['virtualmerchantpro_ssl_merchant_id'] = $this->request->post['virtualmerchantpro_ssl_merchant_id'];
        } else {
            $data['virtualmerchantpro_ssl_merchant_id'] = $this->config->get('virtualmerchantpro_ssl_merchant_id');
        }

        if (isset($this->request->post['virtualmerchantpro_ssl_user_id'])) {
            $data['virtualmerchantpro_ssl_user_id'] = $this->request->post['virtualmerchantpro_ssl_user_id'];
        } else {
            $data['virtualmerchantpro_ssl_user_id'] = $this->config->get('virtualmerchantpro_ssl_user_id');
        }

        if (isset($this->request->post['virtualmerchantpro_ssl_pin'])) {
            $data['virtualmerchantpro_ssl_pin'] = $this->request->post['virtualmerchantpro_ssl_pin'];
        } else {
            $data['virtualmerchantpro_ssl_pin'] = $this->config->get('virtualmerchantpro_ssl_pin');
        }
        if (isset($this->request->post['virtualmerchantpro_ssl_merchant_id_test'])) {
            $data['virtualmerchantpro_ssl_merchant_id_test'] = $this->request->post['virtualmerchantpro_ssl_merchant_id_test'];
        } else {
            $data['virtualmerchantpro_ssl_merchant_id_test'] = $this->config->get('virtualmerchantpro_ssl_merchant_id_test');
        }

        if (isset($this->request->post['virtualmerchantpro_ssl_user_id_test'])) {
            $data['virtualmerchantpro_ssl_user_id_test'] = $this->request->post['virtualmerchantpro_ssl_user_id_test'];
        } else {
            $data['virtualmerchantpro_ssl_user_id_test'] = $this->config->get('virtualmerchantpro_ssl_user_id_test');
        }

        if (isset($this->request->post['virtualmerchantpro_ssl_pin_test'])) {
            $data['virtualmerchantpro_ssl_pin_test'] = $this->request->post['virtualmerchantpro_ssl_pin_test'];
        } else {
            $data['virtualmerchantpro_ssl_pin_test'] = $this->config->get('virtualmerchantpro_ssl_pin_test');
        }

        if (isset($this->request->post['virtualmerchantpro_environment'])) {
            $data['virtualmerchantpro_environment'] = $this->request->post['virtualmerchantpro_environment'];
        } else {
            $data['virtualmerchantpro_environment'] = $this->config->get('virtualmerchantpro_environment');
        }

        if (isset($this->request->post['virtualmerchantpro_total'])) {
            $data['virtualmerchantpro_total'] = $this->request->post['virtualmerchantpro_total'];
        } else {
            $data['virtualmerchantpro_total'] = $this->config->get('virtualmerchantpro_total');
        }
        if (isset($this->request->post['virtualmerchantpro_approved_order_status_id'])) {
            $data['virtualmerchantpro_approved_order_status_id'] = $this->request->post['virtualmerchantpro_approved_order_status_id'];
        } else {
            $data['virtualmerchantpro_approved_order_status_id'] = $this->config->get('virtualmerchantpro_approved_order_status_id');
        }


        $this->load->model('localisation/order_status');

        $data['order_statuses'] = $this->model_localisation_order_status->getOrderStatuses();

        if (isset($this->request->post['virtualmerchantpro_geo_zone_id'])) {
            $data['virtualmerchantpro_geo_zone_id'] = $this->request->post['virtualmerchantpro_geo_zone_id'];
        } else {
            $data['virtualmerchantpro_geo_zone_id'] = $this->config->get('virtualmerchantpro_geo_zone_id');
        }

        $this->load->model('localisation/geo_zone');

        $data['geo_zones'] = $this->model_localisation_geo_zone->getGeoZones();

        if (isset($this->request->post['virtualmerchantpro_status'])) {
            $data['virtualmerchantpro_status'] = $this->request->post['virtualmerchantpro_status'];
        } else {
            $data['virtualmerchantpro_status'] = $this->config->get('virtualmerchantpro_status');
        }

        if (isset($this->request->post['virtualmerchantpro_debug'])) {
            $data['virtualmerchantpro_debug'] = $this->request->post['virtualmerchantpro_debug'];
        } else {
            $data['virtualmerchantpro_debug'] = $this->config->get('virtualmerchantpro_debug');
        }

        if (isset($this->request->post['virtualmerchantpro_sort_order'])) {
            $data['virtualmerchantpro_sort_order'] = $this->request->post['virtualmerchantpro_sort_order'];
        } else {
            $data['virtualmerchantpro_sort_order'] = $this->config->get('virtualmerchantpro_sort_order');
        }
		
		$data['clear_log'] = $this->url->link('extension/payment/virtualmerchantpro/clearlog', 'user_token=' . $this->session->data['user_token'], true);
		
		// Log
		$file = DIR_LOGS . 'virtualmerchantpro_debuger.txt';
		if (file_exists($file)) {
			$data['log'] = htmlentities(file_get_contents($file, FILE_USE_INCLUDE_PATH, null));
		} else {
			$data['log'] = '';
		}

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('extension/payment/virtualmerchantpro', $data));
    }
	
	public function clearlog() {
		$this->load->language('extension/payment/virtualmerchantpro');
		$this->document->setTitle($this->language->get('heading_title'));
		if ($this->user->hasPermission('modify', 'extension/payment/virtualmerchantpro')) {
			$handle = fopen(DIR_LOGS . 'virtualmerchantpro_debuger.txt', 'w+');
			fclose($handle);
			$this->session->data['success'] = $this->language->get('text_success');
			$url = '';
			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}
			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}
			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}
			$this->response->redirect($this->url->link('extension/payment/virtualmerchantpro', 'user_token=' . $this->session->data['user_token'] . $url, true));
		} else {
			$this->error['warning'] = $this->language->get('error_permission');
			$this->index();
		}
	}
	
//	public function clearlog() {
//		$this->load->language('tool/log');
//
//		if (!$this->user->hasPermission('modify', 'tool/log')) {
//			$this->session->data['error'] = $this->language->get('error_permission');
//		} else {
//			$file = DIR_LOGS . 'virtualmerchantpro_debuger.txt';
//
//			$handle = fopen($file, 'w+');
//
//			fclose($handle);
//
//			$this->session->data['success'] = $this->language->get('text_success');
//		}
//
//		$this->response->redirect($this->url->link('extension/payment/virtualmerchantpro', 'user_token=' . $this->session->data['user_token'], true));
//	}

    public function install() {
        
    }

    public function uninstall() {
        
    }

    protected function validate() {
        if (!$this->user->hasPermission('modify', 'extension/payment/virtualmerchantpro')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        if (!$this->request->post['virtualmerchantpro_ssl_merchant_id']) {
            $this->error['merchant_id'] = $this->language->get('error_merchant_id');
        }

        if (!$this->request->post['virtualmerchantpro_ssl_user_id']) {
            $this->error['user_id'] = $this->language->get('error_user_id');
        }

        if (!$this->request->post['virtualmerchantpro_ssl_pin']) {
            $this->error['ssl_pin'] = $this->language->get('error_ssl_pin');
        }
        
        $this->load->model('localisation/currency');
        $currencies = $this->model_localisation_currency->getCurrencies();

        $total_currency = 0;

        foreach ($currencies as $currency) {
            if ($currency['status']) {
                $total_currency++;
            }
        }

        if ($total_currency > 1 && $this->request->post['virtualmerchantpro_status'] == 1 && $this->request->post['virtualmerchantpro_merchant_multi_currency'] == 0) {
                $this->error['multi_currency'] = $this->language->get('error_multi_currency');
        }

        return !$this->error;
    }

}
