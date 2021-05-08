
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('login_model');
    }
    
    private function logged_in()
    {
        if( ! $this->session->userdata('authenticated')){
            redirect('login/index');
        }
    }
    
    public function index()
    {
        $data['title'] = "Login";
        
        $this->form_validation->set_rules('email', 'email', 'trim|required');
        $this->form_validation->set_rules('password', 'password', 'required');

       // $this->form_validation->set_rules('email','Email','required|valid_email|is_unique[users.email]');
        
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        
        if($this->form_validation->run() == false){
           // $this->load->view('header', $data);
            $this->load->view('login_view', $data);
           // $this->load->view('footer', $data);
        } 
        else {
            $email = $this->security->xss_clean($this->input->post('email'));
            $password = $this->security->xss_clean($this->input->post('password'));
            
            $user = $this->login_model->login($email, $password);
            
            if($user){
                $userdata = array(
                    'customer_id' => $user->id,
                    'name' => $user->name,
                    'mobile' => $user->mobile,
                    'authenticated' => TRUE
                );
                
                $this->session->set_userdata($userdata);
                
                redirect('dashboard');
            }
            else {
                $this->session->set_flashdata('message', 'Invalid email or password');
                redirect('login/index');
            }
        }
    }
    
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login/index');
    }
}
?>
