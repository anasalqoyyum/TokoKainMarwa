<?php defined('BASEPATH') or exit('No direct script access allowed');

class ProfileModel extends CI_Model
{
    private $_table = "tb_user";

    public $id;
    public $nama;
    public $username;
    public $password;
    public $role;

    public function rules()
    {
        return [
            [
                'field' => 'Password',
                'label' => 'Password',
                'rules' => 'required'
            ],

            [
                'field' => 'Nama',
                'label' => 'Nama',
                'rules' => 'required'
            ],

            [
                'field' => 'Username',
                'label' => 'Username',
                'rules' => 'required'
            ]
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->nama = $post["nama"];
        $this->username = $post["username"];
        $this->password = $post["password"];
        $this->role = $post["role"];
        return $this->db->update($this->_table, $this, array('id' => $post['id']));
    }
}