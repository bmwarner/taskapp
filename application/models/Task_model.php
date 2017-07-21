<?php
class Task_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_task($slug = FALSE)
    {
        if ($slug === FALSE)
        {
            $query = $this->db->get('task');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('task', array('slug' => $slug));
        return $query->row_array();
    }
    
    public function get_task_by_id($id = 0)
    {
        if ($id === 0)
        {
            $query = $this->db->get('task');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('task', array('id' => $id));
        return $query->row_array();
    }
    
    public function set_task($id = 0)
    {
        $this->load->helper('url');
 
        $slug = url_title($this->input->post('title'), 'dash', TRUE);
 
        $data = array(
            'title' => $this->input->post('title'),
            'status' => $this->input->post('status'),
            'slug' => $slug,
        );
        
        if ($id == 0) {
            return $this->db->insert('task', $data);
        } else {
            $this->db->where('id', $id);
            return $this->db->update('task', $data);
        }
    }
    
    public function delete_task($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('task');
    }
}
