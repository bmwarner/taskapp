<?php
class Task extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('task_model');
        $this->load->helper('url_helper');
    }
 
    public function index()
    {
        $data['task'] = $this->task_model->get_task();
 
        $this->load->view('templates/header', $data);
        $this->load->view('task/index', $data);
        $this->load->view('templates/footer');
    }
 
    public function view($slug = NULL)
    {
        $data['task_item'] = $this->task_model->get_task($slug);
        
        if (empty($data['task_item']))
        {
            show_404();
        }
 
        $data['title'] = $data['task_item']['title'];
 
        $this->load->view('templates/header', $data);
        $this->load->view('task/view', $data);
        $this->load->view('templates/footer');
    }
    
    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
 
        $data['title'] = 'Create a task';
 
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
 
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('task/create');
            $this->load->view('templates/footer');
 
        }
        else
        {
            $this->task_model->set_task();
            $this->load->view('templates/header', $data);
            $this->load->view('task/success');
            $this->load->view('templates/footer');
        }
    }
    
    public function edit()
    {
        $id = $this->uri->segment(3);
        
        if (empty($id))
        {
            show_404();
        }
        
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        $data['title'] = 'Edit a task';        
        $data['task_item'] = $this->task_model->get_task_by_id($id);
        
        $this->form_validation->set_rules('title', 'Title', 'required');
 
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('task/edit', $data);
            $this->load->view('templates/footer');
 
        }
        else
        {
            $this->task_model->set_task($id);
            redirect( base_url() . 'index.php/task');
        }
    }
    
    public function delete()
    {
        $id = $this->uri->segment(3);
        
        if (empty($id))
        {
            show_404();
        }
                
        $task_item = $this->task_model->get_task_by_id($id);
        
        $this->task_model->delete_task($id);        
        redirect( base_url() . 'index.php/task');        
    }

}
