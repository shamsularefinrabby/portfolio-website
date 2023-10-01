<?php

function connect_to_db(){
    $hostname="localhost";
    $username="root";
    $password="";
    $db_name="panda";

    return $db_connect= mysqli_connect($hostname,$username,$password,$db_name);

}

function panda_all($table_name){
    $select_query= "SELECT * FROM $table_name";
    return $result= mysqli_query(connect_to_db(),$select_query);

}
function panda_number_of($table_name,$how_many){
    $select_query= "SELECT * FROM $table_name limit $how_many";
    return $result= mysqli_query(connect_to_db(),$select_query);

}
function panda_single($table_name,$id){
    $single_select_query= "SELECT * FROM $table_name where id='$id'";
    return $result= mysqli_fetch_assoc(mysqli_query(connect_to_db(),$single_select_query));

}


function panda_insert($table_name, $field_name, $field_variable){
    $insert_query= "INSERT INTO $table_name ($field_name) VALUES ($field_variable)";
    return mysqli_query(connect_to_db(),$insert_query);



}

function panda_delete($table_name, $field_variable){
        $delete_query= "DELETE FROM $table_name WHERE id=($field_variable)";
        mysqli_query(connect_to_db(),$delete_query);
    

}

function panda_update($table_name,$field_name,$field_value,$id){
    
    $field_array = explode(",",$field_name);
    $feild_value_array = explode(",",$field_value);
    $update_str = "";
    $field_name_length= count($field_array);
    $field_value_length= count($feild_value_array);
    
    if($field_name_length == $field_value_length){
   
        for($i=0 ; $i<$field_name_length ; $i++){
            $update_str .= $field_array[$i] . "= '"  . $feild_value_array[$i]."',";
            
        }
        $update_str= trim($update_str,",");

        $update_query= "UPDATE $table_name SET $update_str WHERE id=$id";
        return mysqli_query(connect_to_db(),$update_query);
    }
    else{
        echo "somethis is wrong!";
    }
    
}

function panda_image_delete($table_name,$field_name,$field_value,$image_name,$file_name){
        $select_query="SELECT * FROM $table_name WHERE $field_name=$field_value";
        $db_result= mysqli_query(connect_to_db(),$select_query);
        $after_assoc= mysqli_fetch_assoc($db_result)[$image_name];
        $link= __DIR__."/img/". $file_name ."/". $after_assoc;
        unlink($link);

        $delete_query= "DELETE FROM $table_name WHERE $field_name=$field_value";
        return mysqli_query(connect_to_db(),$delete_query);

    
}

function panda_setup($table_name,$setup_name){
    $setup_query = "SELECT setup_value FROM $table_name WHERE setup_name='$setup_name'";
    return mysqli_fetch_assoc(mysqli_query(connect_to_db(),$setup_query))['setup_value'];
}

?>