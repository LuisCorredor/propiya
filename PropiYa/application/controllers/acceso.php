<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Acceso extends CI_Controller {

	function __construct() {
        parent::__construct();
    }

	public function index()
	{
		/*
			Cargar formulario de registro
			e inicio de sesión.
		*/
		$this->load->view('acceso');
	}

	public function iniciar()
    {
	
        $email = $this->input->post("email");
        $pass = $this->input->post("pass");
        $pass = sha1($pass);
        
        $this->db->where('email',$email);
        
        $query = $this->db->get('usuarios');
            if($query->num_rows() == 1)
                {
                
                $this->db->where("email", $email);
                $query = $this->db->get('datos_personales');
                
                //$sql = "SELECT * FROM datos_personales WHERE email = '.$email.'";
                //$this->db->query($sql, array(); https://www.codeigniter.com/userguide3/database/queries.html
                
                $array = array(
                    "logged" => true,
                    "id"     => $query->result()["id"],
                    "user"   => $email,
                    "nombre" => $query->result()["nombre"],
                    "telefono" => $query->result()["telefono"],
                    "acerca" => $query->result()["acerca"],
                    "pack"   => "free"
                );
                    $this->session->set_userdata($array);
                    redirect('perfil');
                } else {
                    redirect('acceso');
                }
	}
    
	public function cerrar()
	{
		/*
			Destruir sesión y redireccionar
			al login / register.
		*/
		$this->session->sess_destroy();
		redirect('acceso');
	}

	public function activado()
	{
		/*
			Cargar formulario de registro
			e inicio de sesión informando que
			la cuenta fue activada.
		*/
		$this->load->view('success-register');
	}

	public function activar()
	{
		$token = $this->uri->segment(3);

		if ($token != "" && strlen($token) == 50)
		{
			/*
				Obtener ID de usuario según
				Token ingresado.
			*/
			$this->db->from("tokens");
			$this->db->where("token", $token);
			$query = $this->db->get();
			$result = $query->result_array();

			/*
				Convertir array 2d a array común.
			*/
			$result = array_shift($result);
			$user   = $result["user"];
			
			/*
				Activar cuenta de usuario según
				el ID obtenido.
			*/
			$this->db->where("id", $user);
			$this->db->update("usuarios", array(
				"activado" => "1"
			));

			/*
				Rediccionar registro / inicio de
				sesión informando que la cuenta fue
				activada.
			*/
			redirect("/acceso/activado");
		}
		else
		{
			/*
				Redireccionar al formulario de 
				registro / login si no se detectó 
				un Token correcto.
			*/
			redirect("/acceso");
		}
	}
}
