<?php

class ModelExtensionPaymentvirtualmerchantpro extends Model {

    public function getMethod($address, $total) {
		
        $this->load->language('extension/payment/virtualmerchantpro');

        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "zone_to_geo_zone WHERE geo_zone_id = '" . (int) $this->config->get('virtualmerchantpro_geo_zone_id') . "' AND country_id = '" . (int) $address['country_id'] . "' AND (zone_id = '" . (int) $address['zone_id'] . "' OR zone_id = '0')");

        if ($this->config->get('virtualmerchantpro_total') > 0 && $this->config->get('virtualmerchantpro_total') > $total) {
            $status = false;
        } elseif (!$this->config->get('virtualmerchantpro_geo_zone_id')) {
            $status = true;
        } elseif ($query->num_rows) {
            $status = true;
        } else {
            $status = false;
        }

        $method_data = array();
        $image = '';
      
        /*
        if (!empty($this->config->get('virtualmerchantpro_image')) && file_exists(DIR_IMAGE . $this->config->get('virtualmerchantpro_image'))) {
            $this->load->model('tool/image');
            $src = $this->config->get('virtualmerchantpro_image');
            $w = $this->config->get('virtualmerchantpro_image_width');
            $h = $this->config->get('virtualmerchantpro_image_height');
            $image = '<br><img class="pull-left" src="' . $this->model_tool_image->resize($src, $w, $h) . '" alt="virtualmerchantpro Image" />';
        }*/

        if ($status) {
            $method_data = array(
                'code' => 'virtualmerchantpro',
                'title' => $this->language->get('text_title') . $image,
                'terms' => '',
                'sort_order' => $this->config->get('virtualmerchantpro_sort_order')
            );
        }

        return $method_data;
    }


    public function logger($message) {
        if ($this->config->get('virtualmerchantpro_debug') == 1) {
            $log = new Log('virtualmerchantpro_debug.log');
            $backtrace = debug_backtrace();
            $log->write('Origin: ' . $backtrace[6]['class'] . '::' . $backtrace[6]['function']);
            $log->write(print_r($message, 1));
        }
    }
}
