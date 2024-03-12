<?php
class Log extends Controller {
	public function index()
	{
		$data['title'] = 'Login';
		$this->view('login/index', $data);
	}

    public function login(){
        $username = $_POST['username'];
        $password = $_POST['password'];
    
        $data['login'] = $this->model('LogModel')->getUser($username, $password);
    
        session_start();

        if ($data['login'] == NULL) {
            Flasher::setMessage('Gagal', 'login', 'danger');
            header("Location:" . base_url . "/404");
            exit;
        } else {
            foreach ($data['login'] as $row) {
                $_SESSION['name'] = $row['name'];
                $_SESSION['role'] = $row['role'];
                $_SESSION['id'] = $row['id'];

                header("Location: " . base_url);
            }
        }
        
    }
    
    public function logout()
	{
		session_start();
        unset($_SESSION['name']);
        session_destroy();
        header('Location:'.base_url);
	}
}