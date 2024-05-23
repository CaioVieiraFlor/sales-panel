<?php

require 'Controller.php';
require PATH_MODEL . '/LoginModel.php';

class LoginController extends Controller {
    public static function index() {
        session_start();
        
        $loginModel = new LoginModel();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {    
            if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])) {
                $email = addslashes($_POST['email']);
                $senha = addslashes($_POST['senha']);
            
                $login = $loginModel->login($email, $senha);
                if (!$login) {
                    echo "
                        <META HTTP-EQUIV=REFRESH CONTENT='0; URL=index.php'>
                        <script type=\"text/javascript\">
                            alert(\"Erro: Login ou senha incorreta!\");
                        </script>
                    ";
                    exit();
                }

                header("Location: HomeController.php");
                exit();
            }
        }

        require PATH_VIEW . 'login/index.php';
    }
}

LoginController::index();