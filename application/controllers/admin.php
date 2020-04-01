<?php
class Admin extends CI_Controller
{
    public function index()
    {
        // echo "i am in admin controller";
        

        //validations
        // $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'User Name', 'required|alpha_numeric');
        $this->form_validation->set_rules('password', 'Password', 'required|max_length[10]');
        $this->form_validation->set_error_delimiters('<div class="text-danger"></div>');

        // if($this->form_validation->run())
        // {
        //     $adminname = $this->input->post('username');
        //     $adminpass = $this->input->post('password');
            
        //     $this->load->model('LoginModel', 'lm');
        //     $id = $this->lm->validate($adminname, $adminpass);
            
        //     if($id)
        //     {
        //         // echo "data is there";
        //         $this->session->set_userdata('id', $id);
        //         // return redirect('admin/dashboard');
        //         $this->load->view('admin/admin_dashboard');
        //     }
        //     else
        //     {
        //         echo "data is not there";
        //     }
        //     $username = $this->input->post('username');
        //     $userpass = $this->input->post('password');

        //     $this->load->model('LoginModel', 'lm');
        //     $id = $this->lm->validateUser($username, $userpass);
        //     $get_data = $this->db->where(['userName'=>$username, 'password'=>$userpass])
        //                      ->get('users');
        //     $q = $get_data->row()->status;
            
        //     if($id && $q == 1)
        //     {
                
        //         // echo "data is there";
        //         $this->session->set_userdata('id', $id);
        //         // return redirect('admin/dashboard');
        //         $this->load->view('users/user_dashboard1');
                
        //     }
        //     elseif($id && $q == 0)
        //     {
                
        //         // echo "data is there";
        //         $this->session->set_userdata('id', $id);
        //         // return redirect('admin/dashboard');
        //         $this->load->view('users/user_dashboard0');
        //         return $id;
        //     }
        // }
        // else
        // {
        //     $this->load->view('admin/login');
        // }
    }
    // public function dashboard()
    // {
    //     $this->load->view('admin/admin_dashboard');
    // }
}
?>