<?php
include('config.php');
// class Connect extends PDO{
//     public function _construct()
//     {
//         parent::__construct("mysql:host=localhost:3307;dbname=api",'root','',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
//         $this->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//         $this->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
//      }
// }
// class API 
// {
//     function Select(){
//         $db =new connect;
//         $users = array();
//         $data = $db->prepare('SELECT * FROM user ORDER BY id');
//         $data->execute();
//         while ($OutputData =$data->fetch(PDO::FETCH_ASSOC)) {
//             $users[$OutputData['id']] = array(
//                 'id'=> $OutputData['id'],
//                 'name'=> $OutputData['name'],
//                 'age'=> $OutputData['age'],
//             );
//         }
//         return json_encode($users);

//     }
// }

// $API =new API;
// header('Content-type: application/json');
// echo $API->Select();
$id=rand(0,25);
//$json_response = md5($id);
//echo md5('name');

$html='<a href="api.php?id='.$id.'">get api</a>';


//$raw_password = md5($_POST['password']);
//$password = mysqli_real_escape_string($conn, $raw_password);

echo $html;
?>
<!-- <form action="http://localhost/rest%20api/api.php?id=2" method="post">
    <input type="text" value="[id]">
    <button type="submit">submit</button>
</form> -->