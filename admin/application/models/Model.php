 <?php
    class Model extends CI_model{

        public function select_one_only($table,$where){
            $this->db->from($table);
            $this->db->where($where);
            $q = $this->db->get();
            return $q->row();
        }
        public function select_all_where($table,$where){
            $this->db->from($table);
            $this->db->where($where);
            $q = $this->db->get();
            return $q->result();
        }

        public function update1($table, $where, $data){
            $this->db->where($where);
            $this->db->update($table, $data);
            if($this->db->affected_rows())
                { return true; }
            else
                { return false; }
        }

        public function insert_one($table, $data){
          $this->db->insert($table,$data);
          if($this->db->affected_rows()){
            return $this->db->insert_id();
          }else{ 
            return false; 
          }
        }
        public function select_all_join($select, $table, $where, $limit, $start, $joins, $find_in_set){
            $this->db->select($select);
            $this->db->from($table);
            if($limit){
            $this->db->limit($limit, $start);
            }
            foreach($joins as $join){
            $this->db->join($join['table'], $join['condition'], $join['joinType']);   
            }
            if($find_in_set){
            $this->db->where('find_in_set(' . $find_in_set['value'] . ',' . $find_in_set['byColumn'] . ') <> 0');
            }
            $this->db->where($where);
            $q = $this->db->get();
            return $q->result();
        }

        public function select_one_join($select, $table, $where, $limit, $start, $joins, $find_in_set){
            $this->db->select($select);
            $this->db->from($table);
            if($limit){
            $this->db->limit($limit, $start);
            }
            foreach($joins as $join){
            $this->db->join($join['table'], $join['condition'], $join['joinType']);   
            }
            if($find_in_set){
            $this->db->where($find_in_set);
            }
            $this->db->where($where);
            $q = $this->db->get();
            return $q->row();
        }
    }