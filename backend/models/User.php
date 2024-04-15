<?php 
	class User () {
		private $id;
		private $nombre;
		private $apaterno;
		private $amaterno;
		private $direccion;
		private $telefono;
		private $correo;
		private $usuario;
		private $password;

		//Creacion del constructor de la clase
		public function __construct ($nombre, $apaterno, $amaterno, $direccion, $telefono, $correo, $usuario, $password){
			$this->nombre = $nombre;
			$this->apaterno = $apaterno;
			$this->amaterno = $amaterno;
			$this->direccion = $direccion;
			$this->telefono = $telefono;
			$this->correo = $correo;
			$this->usuario = $usuario;
			$this->password = $password;
		}
		

		//cetters y Setters para cada una de las propiedades
		public function getId () {
			return $this->id;
		}

		public function setId () {
			$this->id = $id;
		}

		public function getNombre() {
			return $this->nombre;
		}

		public function setNombre () {
			$this->nombre = $nombre;
		}

		public function getApaterno () {
			return $this->apaterno;
		}

		public function setApaterno () {
			$this->apaterno = $apaterno;
		}

		public function getMpaterno () {
			return $this->amaterno;
		}

		public function setMpaterno () {
			$this->amaterno = $amaterno;
		}

		public function getDireccion () {
			return $this->direccion;
		}

		public function setDireccion () {
			$this->direccion = $direccion;
		}

		public function getTelefono () {
			return $this->telefono;
		}

		public function setTelefono () {
			$this->telefono = $telefono;
		}

		public function getCorreo () {
			return $this->correo;
		}

		public function setCorreo () {
			$this->correo = $correo;
		}

		public function getUsuario () {
			return $this->usuario;
		}

		public function setUsuario () {
			$this->usuario = $usuario;
		}

		public function getPassword () {
			return $this->password;
		}

		public function setPassword () {
			$this->password = $password;
		}

		
	}
?>