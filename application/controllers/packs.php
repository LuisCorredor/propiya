<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Packs extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	public function index()
	{
		$data = array(

			"pack" => (object) array(

				"free" => (object) array(
					"titulo"  => "Free",
					"precio"  => "$0",
					"periodo" => "Una (1) publicación por mes.",
					"info"    => array(
						"Una publicación al mes.",
						"30 d&iacute;as disponibles."
					)
				),

				"silver" => (object) array(
					"titulo"  => "Silver",
					"precio"  => "$35",
					"periodo" => "Quince (15) publicaciones por mes.",
					"info"    => array(
						"15 publicaciones al mes.",
						"30 d&iacute;as disponibles."
					)
				),

				"gold" => (object) array(
					"titulo"  => "Gold",
					"precio"  => "$50",
					"periodo" => "Publicaciones sin límite por mes.",
					"info"    => array(
						"Publicaciones ilimitadas por mes.",
						"30 d&iacute;as disponibles."
					)
				)

			)

		);

		$this->load->view("packs", $data);
	}

}
?>