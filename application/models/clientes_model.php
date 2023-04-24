<?php

class Clientes_model extends CI_Model{
    public function Listar()
    {
        return $this->db->get("tb_clientes")->result_array();
    }

    public function Store($cliente)
    {
       $this->db->insert("tb_clientes",$cliente);
    }
}