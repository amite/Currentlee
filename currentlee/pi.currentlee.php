<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Currentlee Plugin
 * Copyright Adam Wiggall, http://turnandface.com
 */

$plugin_info       = array(
   'pi_name'        => 'Currentlee',
   'pi_version'     => '1.0',
   'pi_author'      => 'Adam Wiggall',
   'pi_author_url'  => 'http://turnandface.com',
   'pi_description' => 'Returns the current page URL or URI.',
   'pi_usage'       => Currentlee::usage()
   );

/**
 * Memberlist Class
 *
 * @package			ExpressionEngine
 * @category		Plugin
 * @author			Adam Wiggall
 * @copyright		Copyright (c) 2010, Adam Wiggall
 * @link			http://turnandface.com
 */


class Currentlee
{
	
var $return_data = '';
	
	public function Currentlee()
	{
		$this->EE =& get_instance();
		$this->EE->load->helper('url');


		$type = ($this->EE->TMPL->fetch_param('type')) ? strtolower(($this->EE->TMPL->fetch_param('type'))) : 'uri';
		
		if ($type === 'url') 
		{
			$tagdata = current_url();
		}
		else
		{
			$tagdata = uri_string();
		}
		
		$this->return_data = $tagdata;
	}

	// --------------------------------------------------------------------

		/**
		 * Usage
		 *
		 * This function describes how the plugin is used.
		 *
		 * @access	public
		 * @return	string
		 */

	  //  Make sure and use output buffering

	  function usage()
	  {
	  ob_start(); 
	  ?>
		The Currentlee Plugin returns the URL or URI of the current page. Use the 'type' parameter to specify what you need.
	
		e.g.

		{exp:currentlee} returns current page URI (default) - (/segment_1/segment_2/ ...)
	
		{exp:currentlee type="uri"} returns the same as above (redundant)
	
		{exp:currentlee type="url"} returns the current page URL (http://www.example.com/segment_1/segment_2/ ...)

	  <?php
	  $buffer = ob_get_contents();

	  ob_end_clean(); 

	  return $buffer;
	  }
	  // END

}
/* End of file pi.currentlee.php */
/* Location: ./system/expressionengine/third_party/currentlee/pi.currentlee.php */