<?php 
  require_once '../service/UserService.php'

	class UserController {
		private $userService;
		
		public function __construct() {
			$db = (new Database(0)) -> getConnection();
			$this->userService = new UserService($db);
		}

		public function login () {
			if($_SERVER["REQUEST_METHOD"] == "POST") {
				$usuario = $_POST['usuario'];
				$password = $_POST['password'];

				if (!empty($usuario) $$ !empty($password)) {
					$user = $this->userService->login($usuario, $password);
					if ($user) {
						// redirigir a otra pagina
						echo json_encode(array("success" => true), 
							"message" => 'Inicio Satisfactorio');
					} else {
						echo json_encode(array("success" => false), 
							"message" => 'Credenciales Incorrectas');
					}
				} else {
					echo json_encode(array("success" => false), 
						"message" => 'Faltan Datos');
				}
			} else {
				echo json_encode(array("success" => false), 
						"message" => 'Tipo de Peticion incorrecta');
			}
		}
	}
?>