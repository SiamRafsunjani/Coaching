<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller{

    function __construct(){

        parent::__construct();

        $this->check_isvalidated();
        $this->load->model('Adminmodel');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('bcrypt');
    }

    public function index(){

        $this->load->view('Admin_home');        
    }

    private function check_isvalidated(){

        if(! $this->session->userdata('validated')){

            redirect('index.php/Adminlogin');
        }
    }

    public function show_admins()
    {
        $data['result'] = $this->Adminmodel->get_admins();
        $this->load->view('Admins',$data);
    }    

    public function add_admins()
    {   
        $branches = $this->Adminmodel->branchdd();
        $data['branch'][0] = "Select a branch"; 
        foreach ($branches as $key => $value) {
            $data['branch'][$value['branch_id']] = $value['branch_name'];
        }
        $this->form_validation->set_rules('adminname', 'Name', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('name', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required||matches[passconf]');


        if ($this->form_validation->run() == FALSE || $this->input->post('branch') == '0' || is_int ($this->input->post('phone')))
        {   
            $data['error'] = 'Select a Branch';
            $this->load->view('Add_admin',$data);       
        }    
        else
        {      
            $password = $this->bcrypt->hash_password($this->input->post('password')); 
            $data = array(
                'name' => $this->input->post('adminname'),
                'address' => $this->input->post('address'),
                'phone' => $this->input->post('phone'),
                'username' => $this->input->post('name'),
                'password' => $password,
                'email' => $this->input->post('email'),
                'branch_id' => $this->input->post('branch')
                );
            $this->Adminmodel->insert_admin($data);
            redirect('index.php/Admin/show_admins');
        }
        

    }

    public function update_admins( $admin_id = NULL )
    {
        $branches = $this->Adminmodel->branchdd();
        $data['admin_detail'] = $this->Adminmodel->admin_detail($admin_id);
        $data['branch'][0] = "Select a branch"; 
        foreach ($branches as $key => $value) {
            $data['branch'][$value['branch_id']] = $value['branch_name'];
        }

        $this->form_validation->set_rules('adminname', 'Name', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('name', 'Username', 'required');


        if ($this->form_validation->run() == FALSE || $this->input->post('branch') == '0' || is_int ($this->input->post('phone')))
        {   
            $data['error'] = 'Select a Branch';
            $this->load->view('edit_admin', $data);       
        }    
        else
        {   
            if ($_POST['password'] != "") {
                if ($_POST['password'] == $_POST['passconf']) {
                    $password = $this->bcrypt->hash_password($this->input->post('password')); 
                    $data['admin'] = array(
                        'name' => $this->input->post('adminname'),
                        'address' => $this->input->post('address'),
                        'phone' => $this->input->post('phone'),
                        'username' => $this->input->post('name'),
                        'password' => $password,
                        'email' => $this->input->post('email'),
                        'branch_id' => $this->input->post('branch')
                        );
                    $this->Adminmodel->edit_admin($admin_id, $data['admin']);
                    redirect('index.php/Admin/show_admins'); 
                } else {
                    $this->load->view('edit_admin', $data);       
                }     
            } else {
                $data['admin'] = array(
                    'name' => $this->input->post('adminname'),
                    'address' => $this->input->post('address'),
                    'phone' => $this->input->post('phone'),
                    'username' => $this->input->post('name'),
                    'email' => $this->input->post('email'),
                    'branch_id' => $this->input->post('branch')
                    );
                $this->Adminmodel->edit_admin($admin_id, $data['admin']);
                redirect('index.php/Admin/show_admins'); 
            }
        }
    }

    public function delete_admins( $admin_id = NULL )
    {
        $admin = array(
            'active' => 0
            );
        $this->Adminmodel->edit_admin($admin_id, $admin);
        redirect('index.php/Admin/show_admins'); 
    }


    public function do_logout(){

        $this->session->sess_destroy();

        redirect('index.php/Adminlogin');

    }

}

?>