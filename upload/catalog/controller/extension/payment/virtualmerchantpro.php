<?php

/*
 * IT IS NOT FREE, YOU SHOULD BUY / REFISTER A LICENSE AT HTTPS://MMOSolution.COM
 * CONTACT: toan@MMOSOLUTION.COM 
 * AUTHOR: MMOSOLUTION TEAM AT VIETNAM
 * All code within this file is copyright MMOSOLUTION.COM TEAM | FOUNDED @2012
 * You can not copy or reuse code within this file without written permission.
*/

 class ControllerExtensionPaymentvirtualmerchantpro extends Controller {

    private $virtualmerchantpro = array();
    private $error = array();

    public function __construct($registry) {
        parent::__construct($registry);
        $this->load->model('setting/setting');
        $this->load->model('checkout/order');
        $this->load->language('extension/payment/virtualmerchantpro');
        $this->virtualmerchantpro = $this->model_setting_setting->getSetting('virtualmerchantpro');
    }

    public function index() {
        $this->load->model('setting/setting');

        $order_info = $this->model_checkout_order->getOrder($this->session->data['order_id']);

        $data['text_credit_card'] = $this->language->get('text_credit_card');
        $data['entry_cc_number'] = $this->language->get('entry_cc_number');
        $data['entry_cc_expire'] = $this->language->get('entry_cc_expire');
        $data['entry_name_on_cart'] = $this->language->get('entry_name_on_cart');
        $data['entry_cc_cvv2'] = $this->language->get('entry_cc_cvv2');
        $data['help_cc_cvv2'] = $this->language->get('help_cc_cvv2');
        $data['button_another_payment'] = $this->language->get('button_another_payment');
        $data['button_paynow'] = $this->language->get('button_paynow');
        $data['text_testmode'] = $this->language->get('text_testmode');
        $data['text_processing'] = $this->language->get('text_processing');

        $data['testmode'] = $this->virtualmerchantpro['virtualmerchantpro_environment'] == 0 ? true : FALSE;
        $data['virtualmerchantpro_merchant_hosted'] = $this->virtualmerchantpro['virtualmerchantpro_merchant_hosted'];

        $data['fields'] = array();
        $data['button_confirm'] = $this->language->get('button_confirm');

        $data['ccname'] = $order_info['firstname'] . ' ' . $order_info['lastname'];


        if (date('m') == 12) {
            $data['yyyy'] = date('Y', strtotime("+1 year"));
            $data['yy'] = date('y', strtotime("+1 year"));
        } else {
            $data['yyyy'] = date('Y');
            $data['yy'] = date('y');
        }
        $data['action'] = $this->url->link('extension/payment/virtualmerchantpro/checkout', '', true);

        $output = $this->load->view('extension/payment/virtualmerchantpro', $data);

        return $output;
    }

    public function checkout() {
        $json = array();
        if ($this->request->server['REQUEST_METHOD'] == 'POST' && isset($this->session->data['order_id']) && $this->validate()) {
            //if (isset($this->session->data['order_id'])) {
            $order_info = $this->model_checkout_order->getOrder($this->session->data['order_id']);

           	$taxes = $this->cart->getTaxes();
				$total_tax = 0;
				foreach($taxes as $tax){
					$total_tax += $tax;
				}

            $salesTax = $this->currency->format($total_tax, $order_info['currency_code'], $order_info['currency_value'], false);
            $amount = $this->currency->format($order_info['total'], $order_info['currency_code'], $order_info['currency_value'], FALSE);

            $data['fields'] = array();

            if ($this->config->get('virtualmerchantpro_use_account') == 1) {
                $data['action'] = 'https://api.convergepay.com/VirtualMerchant/processxml.do';
//                $data['action'] = 'https://www.myvirtualmerchant.com/VirtualMerchant/process.do';
                $data['fields']['ssl_merchant_id'] = trim($this->virtualmerchantpro['virtualmerchantpro_ssl_merchant_id']);
                $data['fields']['ssl_user_id'] = trim($this->virtualmerchantpro['virtualmerchantpro_ssl_user_id']);
                $data['fields']['ssl_pin'] = trim($this->virtualmerchantpro['virtualmerchantpro_ssl_pin']);
            } else {
                $data['action'] = 'https://api.demo.convergepay.com/VirtualMerchantDemo/processxml.do';
//                $data['action'] = 'https://demo.myvirtualmerchant.com/VirtualMerchantDemo/process.do';
                $data['fields']['ssl_merchant_id'] = trim($this->virtualmerchantpro['virtualmerchantpro_ssl_merchant_id_test']);
                $data['fields']['ssl_user_id'] = trim($this->virtualmerchantpro['virtualmerchantpro_ssl_user_id_test']);
                $data['fields']['ssl_pin'] = trim($this->virtualmerchantpro['virtualmerchantpro_ssl_pin_test']);
            }

            $data['fields']['ssl_invoice_number'] = $this->session->data['order_id'];
            $data['fields']['ssl_cvv2cvc2_indicator'] = '1';
            $data['fields']['ssl_transaction_type'] = 'ccsale';
            $data['fields']['ssl_customer_code'] = $this->customer->isLogged() ? $this->customer->getId() : 0;

            $data['fields']['ssl_amount'] = $amount;
            $data['fields']['ssl_salestax'] = $salesTax;
            
            if($this->config->get('virtualmerchantpro_merchant_multi_currency')){
                $data['fields']['ssl_transaction_currency'] = $order_info['currency_code'];
            }
            
            
            $data['fields']['ssl_description'] = 'Marbletilesale Order ID #' . $this->session->data['order_id'];

            $data['fields']['ssl_company'] = $order_info['payment_company'];

            $data['fields']['ssl_avs_address'] = substr($order_info['payment_address_1'], 0, 30);
            $data['fields']['ssl_address2'] = substr($order_info['payment_address_2'], 0, 30);
            $data['fields']['ssl_city'] = $order_info['payment_city'];
            $data['fields']['ssl_state'] = $order_info['payment_zone'];
            $data['fields']['ssl_country'] = $order_info['payment_country'];
            $data['fields']['ssl_avs_zip'] = str_pad(substr($order_info['payment_postcode'], 0, 5), 5, '0');
            $data['fields']['ssl_phone'] = $order_info['telephone'];
            $data['fields']['ssl_email'] = $order_info['email'];

            if ($this->cart->hasShipping()) {
                $data['fields']['ssl_ship_to_company'] = $order_info['shipping_company'];
                $data['fields']['ssl_ship_to_first_name'] = $order_info['shipping_firstname'];
                $data['fields']['ssl_ship_to_last_name'] = $order_info['shipping_lastname'];
                $data['fields']['ssl_ship_to_address1'] = substr($order_info['shipping_address_1'], 0, 30);
                $data['fields']['ssl_ship_to_address2'] = substr($order_info['shipping_address_2'], 0, 30);
                $data['fields']['ssl_ship_to_city'] = $order_info['shipping_city'];
                $data['fields']['ssl_ship_to_state'] = $order_info['shipping_zone'];
                $data['fields']['ssl_ship_to_country'] = $order_info['shipping_country'];
                $data['fields']['ssl_ship_to_zip'] = str_pad(substr($order_info['shipping_postcode'], 0, 5), 5, '0');
                $data['fields']['ssl_ship_to_phone'] = $order_info['telephone'];
            }
            $data['fields']['ssl_result_format'] = 'ASCII';

            if ($this->config->get('virtualmerchantpro_environment') == 0) {
                $data['fields']['ssl_test_mode'] = 'true';
            } else {
                $data['fields']['ssl_test_mode'] = 'false';
            }
            if ($this->config->get('virtual_merchant_hosted')) {
                $data['fields']['ssl_show_form'] = 'true';
            } else {
                $data['fields']['ssl_show_form'] = 'false';
            }

            $data['fields']['ssl_card_number'] = trim($this->request->post['ssl_card_number']);
            $data['fields']['ssl_exp_date'] = trim($this->request->post['exp_month']) . trim($this->request->post['exp_year']);
            $data['fields']['ssl_cvv2cvc2'] = trim($this->request->post['ssl_cvv2cvc2']);

            $ccnames = explode(' ', $this->request->post['ssl_ccname']);

            $data['fields']['ssl_first_name'] = $ccnames[0];
            unset($ccnames[0]);
            $data['fields']['ssl_last_name'] = implode(' ', $ccnames);

            $resutls = $this->processxml($data);
		
            if (isset($resutls['ssl_result_message']) && isset($resutls['ssl_invoice_number'])) {
                if ($resutls['ssl_result_message'] == 'APPROVED' || $resutls['ssl_result_message'] == 'APPROVAL') {
                    $this->db->query("UPDATE `" . DB_PREFIX . "order` SET payment_firstname = '" . $this->db->escape($data['fields']['ssl_first_name']) . "', payment_lastname='" . $this->db->escape($data['fields']['ssl_last_name']) . "' WHERE order_id = '" . (int) $resutls['ssl_invoice_number'] . "'");
                    $comment = 'Transaction ID: ' . $resutls['ssl_txn_id'];
                    $this->model_checkout_order->addOrderHistory($resutls['ssl_invoice_number'], $this->config->get('virtualmerchantpro_approved_order_status_id'), $comment, true);
                    $json['redirect_auto'] = $this->url->link('checkout/success', '', true);
                    $json['success'] = sprintf($this->language->get('success'), $json['redirect_auto']);
                
                } else {
                    $json['error'] = $resutls['ssl_result_message'];
                }
            } elseif(isset($resutls['errorMessage'])) {
		$json['error'] = $resutls['errorMessage'];
            } else {
                $json['error'] = 'Something was wrong! Please try again!!';
            }
        } else {
             $message = '';
             $i = 1;
             foreach ($this->error as $error) {
                 $message .= $error ;
                 if($i < count($this->error)) {
                     $message .= ' , ';
                 }
                 $i++;
             }
             $json['error'] = $message;
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    private function validate() {

        if (empty($this->request->post['ssl_ccname']) || (utf8_strlen(trim($this->request->post['ssl_ccname'])) < 4)) {
            $this->error['ssl_ccname'] = $this->language->get('error_ccname');
        }

        if (empty($this->request->post['ssl_card_number']) || (!$this->luhn_check(trim($this->request->post['ssl_card_number'])))) {
            $this->error['ssl_card_number'] = $this->language->get('error_card_number');
        }
        if (empty($this->request->post['ssl_cvv2cvc2']) || (utf8_strlen(trim($this->request->post['ssl_cvv2cvc2'])) < 3 || utf8_strlen(trim($this->request->post['ssl_cvv2cvc2'])) > 4 )) {
            $this->error['ssl_cvv2cvc2'] = $this->language->get('error_cvv2cvc2');
        }

        if (empty($this->request->post['exp_year']) || ( (int) $this->request->post['exp_year'] < date('y'))) {
            $this->error['exp_year'] = $this->language->get('error_exp_year');
        } else {
            if (empty($this->request->post['exp_month']) || ( (int) $this->request->post['exp_month'] < 1 || (int) $this->request->post['exp_month'] > 12 )) {
                $this->error['exp_month'] = $this->language->get('error_exp_month');
            }
            if ($this->request->post['exp_year'] == date('y')) {
                if ((int) $this->request->post['exp_month'] < date('m')) {
                    $this->error['exp_month'] = $this->language->get('error_exp_month');
                }
            }
        }
        return !$this->error;
    }

    public function success() {
        $order_id = $this->session->data['order_id'];

        if (isset($this->request->post['transaction_id'])) {
            $virtualmerchantpro_transaction_id = $this->request->post['transaction_id'];
        } elseif (isset($this->request->get['transaction_id'])) {
            $virtualmerchantpro_transaction_id = $this->request->get['transaction_id'];
        } else {
            $virtualmerchantpro_transaction_id = '';
        }

        $this->load->model('checkout/order');

        $order_info = $this->model_checkout_order->getOrder($order_id);

        if ($order_info) {
            $this->load->model('extension/payment/virtualmerchantpro');

            $virtualmerchantpro_order_info = $this->model_extension_payment_virtualmerchantpro->getG2aOrder($order_id);

            $this->model_extension_payment_virtualmerchantpro->updateOrder($virtualmerchantpro_order_info['virtualmerchantpro_order_id'], $virtualmerchantpro_transaction_id, 'payment', $order_info);

            $this->model_checkout_order->addOrderHistory($order_id, $this->config->get('virtualmerchantpro_order_status_id'));
        }

        $this->response->redirect($this->url->link('checkout/success'));
    }

    public function ipn() {
        $this->write_log(json_encode($this->request->request), 'ipn');

        if (isset($this->request->get['user_token']) && hash_equals($this->config->get('virtualmerchantpro_ssl_user_id_user_token'), $this->request->get['user_token'])) {
            $this->model_extension_payment_virtualmerchantpro->logger('user_token success');

            if (isset($this->request->post['userOrderId'])) {
                $virtualmerchantpro_order = $this->model_extension_payment_virtualmerchantpro->getG2aOrder($this->request->post['userOrderId']);

                $string = $virtualmerchantpro_order['virtualmerchantpro_transaction_id'] . $virtualmerchantpro_order['order_id'] . round($virtualmerchantpro_order['total'], 2) . html_entity_decode($this->config->get('virtualmerchantpro_ssl_user_id'));
                $hash = hash('sha256', $string);
                if ($hash != $this->request->post['hash']) {
                    $this->model_extension_payment_virtualmerchantpro->logger('Hashes do not match, possible tampering!');
                    return;
                }

                switch ($this->request->post['status']) {
                    case 'complete':
                        $order_status_id = $this->config->get('virtualmerchantpro_complete_status_id');
                        break;
                    case 'rejected':
                        $order_status_id = $this->config->get('virtualmerchantpro_rejected_status_id');
                        break;
                    case 'canceled':
                        $order_status_id = $this->config->get('virtualmerchantpro_cancelled_status_id');
                        break;
                    case 'partial_refunded':
                        $order_status_id = $this->config->get('virtualmerchantpro_partially_refunded_status_id');
                        break;
                    case 'refunded':
                        $order_status_id = $this->config->get('virtualmerchantpro_refunded_status_id');
                        break;
                }

                $this->load->model('checkout/order');
                $this->model_checkout_order->addOrderHistory($this->request->post['userOrderId'], $order_status_id);
            }
        }
    }

    private function write_log($data, $name) {
        if ($this->virtualmerchantpro['virtualmerchantpro_debug']) {
            $filename = DIR_LOGS . 'virtualmerchantpro_debuger.txt';
            $write = $name . ' ------> ' . date("Y-m-d H:i:s") . "\n";
            $write .= $data . "\n";
            file_put_contents($filename, $write, FILE_APPEND | LOCK_EX);
        }
    }

    private function luhn_check($number) {

        //  $number = substr($number, 0, 4);
// Strip any non-digits (useful for credit card numbers with spaces and hyphens)
        $number = preg_replace('/\D/', '', $number);

// Set the string length and parity
        $number_length = strlen($number);
        $parity = $number_length % 2;

// Loop through each digit and do the maths
        $total = 0;
        for ($i = 0; $i < $number_length; $i++) {
            $digit = $number[$i];
// Multiply alternate digits by two
            if ($i % 2 == $parity) {
                $digit *= 2;
// If the sum is two digits, add them together (in effect)
                if ($digit > 9) {
                    $digit -= 9;
                }
            }
// Total up the digits
            $total += $digit;
        }

// If the total mod 10 equals 0, the number is valid
        return ($total % 10 == 0) ? TRUE : FALSE;
    }

     private function stringrepair($str) {
		
		return html_entity_decode($str, ENT_QUOTES, 'UTF-8');
		
	}
	
    private function processxml($data_query = '') {
        $xml = "<txn>\n";
        foreach ($data_query['fields'] as $key => $field) {
            $xml .= "<" . $this->stringrepair($key) . ">" . $this->stringrepair($field) . "</" . $this->stringrepair($key) . ">\n";
        }
        $xml .= "</txn>";
		
		$xml_log = "<txn>\n";
        foreach ($data_query['fields'] as $key => $field) {
			
			if($key == 'ssl_card_number'){
				$length = strlen($field) - 8;
				$field = substr($field, 0, 4).str_pad('', $length ,"*",STR_PAD_BOTH) . substr($field, -4); 
			}
			
			if($key == 'ssl_cvv2cvc2'){
				$length = strlen($field);
				$field = str_pad('', $length ,"*",STR_PAD_BOTH); 
			}
			
            $xml_log .= "<" . $this->stringrepair($key) . ">" . $this->stringrepair($field) . "</" . $this->stringrepair($key) . ">\n";
        }
        $xml_log .= "</txn>";
      
	  $this->write_log($xml_log, 'processxml POST data');
		
		
        $this->write_log($data_query['action'], 'POST URL: ');

        $postData = "xmldata=" . URLEncode($xml);


        $session = curl_init();
        $header[] = "Content-Length: " . strlen($postData);
        $header[] = "Content-Type: application/x-www-form-urlencoded";
        curl_setopt($session, CURLOPT_SSL_VERIFYPEER, false);

        curl_setopt($session, CURLOPT_URL, $data_query['action']);

        curl_setopt($session, CURLOPT_POST, true);

        curl_setopt($session, CURLOPT_POSTFIELDS, $postData);

        curl_setopt($session, CURLOPT_HEADER, FALSE);

        curl_setopt($session, CURLOPT_HTTPHEADER, $header);

        curl_setopt($session, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($session);

        curl_close($session);

        $this->write_log($response, 'processxml RESPONSIVE data');

        $xml = simplexml_load_string($response, "SimpleXMLElement", LIBXML_NOCDATA);
        $json = json_encode($xml);
        return json_decode($json, TRUE);
    }

    private function checkoutcurl($data_query = '') {

        $queryString = http_build_query($data_query['fields']);
        $this->write_log($queryString, 'CURL data');
        $this->write_log($data_query['action'], 'CURL action');

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $data_query['action']);
        curl_setopt($ch, CURLOPT_POST, 1);
        // curl_setopt($ch, CURLOPT_POSTFIELDS, $queryString . "&ssl_merchant_id=$ssl_merchant_id" . "&ssl_user_id=$ssl_user_id" . "&ssl_pin=$ssl_pin" . "&ssl_transaction_type=$ssl_transaction_type" . "&ssl_cvv2cvc2_indicator=$ssl_cvv2cvc2_indicator" . "&ssl_result_format=$ssl_result_format" . "&ssl_test_mode=$ssl_test_mode" . "&ssl_receipt_link_method=$ssl_receipt_link_method" . "&ssl_receipt_link_url=$ssl_receipt_link_url");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $queryString);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_VERBOSE, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);

        curl_close($ch);

        $this->write_log($result, 'CURL resurlt');

        return $result;
    }

}
