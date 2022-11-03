<?php
class Appmodel extends CI_Model{
public function select_one_only($table,$where){
    $this->db->from($table);
    $this->db->where($where);
    $q = $this->db->get();
    return $q->row();
}
public function update($table, $where, $data){
    $this->db->where($where);
    $this->db->update($table, $data);
    if($this->db->affected_rows()){ return true; }else{ return false; }
}

public function delete_one($table, $where){
    $q = $this->db->where($where)->delete($table);
    if($q){return true;}
} 

public function delete_batch($table, $batch, $where = []){
    if($batch){
      $this->db->where_not_in($batch[0], $batch[1]);
    }
    if($where){
    $this->db->where($where);
    }
    $q = $this->db->delete($table);
    if($q){return true;}
} 

public function delete_all($table){
  $q = $this->db->empty_table($table);
  if($q){return true;}
}


public function insert_one($table, $data){
  $this->db->insert($table, $data);
  if($this->db->affected_rows()){
    return $this->db->insert_id(); 
  }else{ 
    return false; 
  }
}

public function insert_batch($table, $data){
  $this->db->insert_batch($table, $data);
  if($this->db->affected_rows()){
    return $this->db->insert_id(); 
  }else{ 
    return false; 
  }
}

public function select_all($table, $where, $queries = []){
   
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

   if(isset($queries['where_in']) && !empty($queries['where_in'])){
   $this->db->where_in($queries['where_in'][0], $queries['where_in'][1]); 
   }

   if(isset($queries['like']) && !empty($queries['like'])){
   $this->db->where($queries['like']); 
   }

   if(isset($queries['limit'])){
   $this->db->limit($queries['limit'][1], $queries['limit'][0]);
   }
   
   if(isset($queries['order'])){
   $this->db->order_by($queries['order'][0], $queries['order'][1]);
   }

   if(isset($queries['group'])){
   $this->db->group_by($queries['group']);
   }

   $query = $this->db->from($table)->get();
   $data = $query->result();
   $rows = $query->num_rows();

   $return = [];
   if(isset($queries['return'])){
    $return = $queries['return'];
   }

   if($return == 'both'){
    $return = [
        'data'  => $data,
        'rows'  => $rows
    ];
   }elseif($return == 'rows'){
    $return = $rows;
   }else{
    $return = $data;
   }
   return $return;
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

   if(isset($queries['like']) && !empty($queries['like'])){
   $this->db->where($queries['like']); 
   }
   if(isset($queries['limit'])){
   $this->db->limit($queries['limit'][1], $queries['limit'][0]);
   }
   if(isset($queries['order'])){
   $this->db->order_by($queries['order'][0], $queries['order'][1]);
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
 
 public function num_rows($table, $where, $queries = []){


   if(isset($queries['joins'])){
    foreach($queries['joins'] as $join){
     $this->db->join($join['table'], $join['condition'], $join['joinType']);   
    }
   }

   $this->db->where($where); 

   if(isset($queries['like']) && !empty($queries['like'])){
   $this->db->where($queries['like']); 
   }

   if(isset($queries['limit'])){
   $this->db->limit($queries['limit'][1], $queries['limit'][0]);
   }
   
   if(isset($queries['order'])){
   $this->db->order_by($queries['order'][0], $queries['order'][1]);
   }

   if(isset($queries['group'])){
   $this->db->group_by($queries['group']);
   }
  $query = $this->db->from($table)->get();
  return $query->num_rows();
 }
 
 
 
 public function fcm_notification($post, $route){
            $insert_data = [
                'title'         => $post['title'],
                'body'          => $post['body'],
                'image'         => $post['image'],
                'create_date'   => date('Y-m-d H:i')
            ];
            
            $registration_ids = [];
            $devices = $this->select_all('register_device', []);
            foreach($devices as $device){
                $registration_ids[] = $device->device_id;
            }
    
            $url = 'https://fcm.googleapis.com/fcm/send';
            $api_key = 'AAAAJ-qw14Q:APA91bFAb5A69HHOiCuXa4NWSWd-PgWGzy-wwQ60tK6gSCxyTvFgdI1DTD4mcqmeF8oEfyaZjAjrWnZhqGM-aYs_cT31mLV4bM-jHX3cIVGRbN1IbuB977E5O6xwV30vpqmwfo03DpCe';
                        
            $fields = array (
                'registration_ids' => $registration_ids,
                'notification'  => [
                    'title'         => $post['title'],
                    'body'          => $post['body'],
                    'sound'         => 'default',  
                    'click_action'  => "FCM_PLUGIN_ACTIVITY",
                    'icon'          => "fcm_push_icon",
                ],
                'data' => $post,
                'priority'                  => 'high',
                'restricted_package_name'   => ''
            );
            
            if(!empty($post['image'])){
               $fields['notification']['image'] = base_url('assets/images/'.$post['image']);
            }
    
            //header includes Content type and api key
            $headers = array(
                'Content-Type:application/json',
                'Authorization:key='.$api_key
            );
                        
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
            $result = curl_exec($ch);
            if ($result === FALSE) {
                $insert_data['status'] = 'error';
            }else{
                $insert_data['status'] = 'success';
            }
            curl_close($ch);
            if(isset($post['flag'])){
            $insert_data['flag'] = 'true';
            }
            
            if(isset($route)){
            $insert_data['route'] = $route;
            }
            $this->insert_one('notification', $insert_data);
    }

}


 ?>