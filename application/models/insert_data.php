<?php
public function insertData(){
 $data= array("name" => $this->input->post('name'),"price" => $this->input->post('price'));
 $qry = $this->db->insert('Table Name',$data);
 if($qry){
 echo '1';
 }else{
 echo '0';
 }
 }
}
?>
