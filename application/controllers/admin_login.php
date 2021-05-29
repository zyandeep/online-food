
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin_login extends CI_Controller{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->database(); 
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('admin_login_model');
    }
    
    private function logged_in()
    {
        if( ! $this->session->userdata('authenticated')){
            redirect('admin_login/index');
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
            $this->load->view('admin_login', $data);
        } 
        else {
            $email = $this->security->xss_clean($this->input->post('email'));
            $password = $this->security->xss_clean($this->input->post('password'));
            
            $user = $this->admin_login_model->login($email, $password);
            
            if($user){
                $userdata = array(
                    'admin_id' => $user->admin_id,
                    'user_name' => $user->user_name,
                    'mobile' => $user->mobile_no,
                    'authenticated' => TRUE
                );
                
                $this->session->set_userdata($userdata);
                
                redirect('admin_Dashboard');
            }
            else {
                $this->session->set_flashdata('message', 'Invalid email or password');
                redirect('admin_login/index');
            }
        }
    }
    
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('admin_login/index');
    }
}
?>
