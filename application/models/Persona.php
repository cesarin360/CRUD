<?php

use LDAP\Result;

    class Persona extends CI_Model {
        public function agregar($Persona)
        {
            $this->db->insert('personas',$Persona);
        }
        public function seleccionar_todo()
        {
            $this->db->select('*');
            $this->db->from('personas');
            return $this->db->get()->result();
        }
        public function eliminar($id)
	    {
		    $this->db->where('id', $id);
		    $this->db->delete('personas');
	    }

        public function actualizar($Persona, $id)
        {
            $this->db->where('id', $id);
            $this->db->update('personas', $Persona);

        }
    }
?>