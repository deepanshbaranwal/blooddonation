<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');
if (!function_exists('_layout'))
{  
   function _layout($layout)
   {
   		$CI = &get_instance();
   		foreach ($layout as $value) {
   			$CI->load->view($value['layout'],$value['data']);  
   		}
   }
}
    