<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');

        if ($this->session->userdata('is_logged_in') == False) {
            redirect("Login");
        }
        // $this->load->model('import_model','reservs');
        $this->load->model('dash_model','dashmod');


    }


    function index()
    {


        $data['title'] = "Home";
        $data['order_count'] = $this->dashmod->get_count_data();
        // $data['reserve_count'] = $this->reservs->count_all();
        // $data['shows_count'] = $this->shows->count_all();


        // $this->load->view('Templets/admintemplet/header', $data);
        $this->load->view('dashboard',$data);
        // $this->load->view('Templets/footer');
    }
}
