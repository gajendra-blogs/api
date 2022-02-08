
<?php
header("Content-Type:application/json");
//$data=json_decode($json_response);
if (isset($_GET['id']) && $_GET['id']!="") 
            {
            include('db.php');
            $id = $_GET['id'];
            
            $result = mysqli_query($con, "SELECT * FROM `signup` WHERE ID=$id");
            if(mysqli_num_rows($result)>0)
                {
            $row = mysqli_fetch_array($result);
            $name = $row['NAME'];
            $dob = $row['DOB'];
            $email = $row['EMAIL'];
            $pwd = $row['PASSWORD'];
            response($id, $name,$dob, $email,$pwd);
           
            mysqli_close($con);
            } 
            else {
                response(NULL, NULL, NULL,200,"No Record Found");
            }
            }
else
            {
            response(NULL, NULL,NULL, 400,"Request is invalid");
            }
            

function response($id,$name,$date,$email, $number)
            {
            $response['id'] = $id;
            $response['name'] = $name;
            $response['dob'] = $date;
            $response['email'] = $email;
            $response['password'] = $number;
            $json_response = json_encode($response);
            echo $json_response;
           // echo $data->id;
            }
?>