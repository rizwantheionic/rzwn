<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Methods: PUT, GET, POST, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Origin, Content-Type, Authorization, Accept, X-Requested-With, x-xsrf-token");
header("Content-Type: application/json; charset=utf-8");

    include "../config.php";
    $data = array();

    $query = mysqli_query($kon, "SELECT * FROM tbl_nilai order by no_urut");

    while($rows = mysqli_fetch_array($query)){
        $data[] = array(
            'no_urut' => $rows['no_urut'],
            'subject' => $rows['subject'],
            'score' => $rows['score'],
            'point' => $rows['point']
        );
    }

    if($query){
        $result = json_encode(array('success'=>true, 'result'=>$data));
    }else{
        $result = json_encode(array('success'=>false));
    }
    echo $result;

?>
