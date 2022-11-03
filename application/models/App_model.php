<?php  

 class App_model extends CI_Model{

 	public function select_all($table, $where, $filters=[]){

 		$this->db->where($where);

    if(isset($filters['order'])){

      $this->db->order_by($filters['order'][0], $filters['order'][1]);

    }
    if(isset($filters['limit'])){
   $this->db->limit($filters['limit'][1], $filters['limit'][0]);
   }

   if(isset($filters['where_in']) && !empty($filters['where_in'])){

      $this->db->where_in($filters['where_in'][0], $filters['where_in'][1]); 

   }



 		$query = $this->db->from($table)->get(); 		

 		     return $query->result();

 	 }



    public function insert_one($table, $data){

      $this->db->insert($table, $data);

      if($this->db->affected_rows()){

        return $this->db->insert_id(); 

      }else{ 

        return false; 

      }

}

    public function delete($table, $where){

            $q = $this->db->where($where)

                            ->delete($table);

            if($q){return true;}

        }



         public function select_one($table, $where, $queries = []){



   $select = '*';

   if(isset($queries['select'])){

   $select = $queries['select']; 

   }



   $this->db->select($select);



   if(isset($queries['joins'])){

    foreach($queries['joins'] as $join){

     $this->db->join($join['table'], $join['condition'], $join['joinType']);   

    }

   }



   if($where){

   $this->db->where($where); 

   }

   

   if(isset($queries['likes']) && !empty($queries['likes'])){

   $this->db->like($queries['likes']); 

   }



   if(isset($queries['orlikes']) && !empty($queries['orlikes'])){

   $this->db->or_like($queries['orlikes']); 

   }



   if(isset($queries['limit'])){

   $this->db->limit($queries['limit'][1], $queries['limit'][0]);

   }



   if(isset($queries['group'])){

   $this->db->group_by($queries['group']);

   }



   $query = $this->db->from($table)->get();

   $data = $query->row();

   $rows = $query->num_rows();



   $return = [];

   if(isset($queries['return'])){

    $return = $queries['return'];

   }



   if($return == 'both' && $data && $rows){

    $return = [

        'data'  => $data,

        'rows'  => $rows

    ];

   }elseif($return == 'rows' && $rows){

    $return = $rows;

   }elseif($data){

    $return = $data;

   }

   return $return;

 }

 public function update($table, $where, $data){

    $this->db->where($where);

    $this->db->update($table, $data);
    if($this->db->affected_rows()){ return true; }
    else{
     return false; 
   }

}





 }

 ?>