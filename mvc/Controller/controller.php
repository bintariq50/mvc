<?php
date_default_timezone_set('Asia/Karachi');
include 'C:\xampp\htdocs\mvc\Model\model.php';
session_start();

class Controller extends Database{
    public function __construct(){
        parent::__construct();
        if (isset($_SERVER['PATH_INFO'])) {
            switch ($_SERVER['PATH_INFO']) {
                case '/index':
                    include 'View/index.php';
                    break;
                case '/register':
                    include 'View/header.php';
                    include 'View/addemp.php';
                    include 'View/footer.php';
                    if(isset($_POST['submit'])){

                            // passing
                            // $obj = new database();
                            // $columns =['username'=> $username,'email'=>$email_emp,'pass'=>$pass_emp,'userrole'=>$user_role,'name'=>$name,'city'=>$city, 'region'=>$region,'country'=>$country,'postbox'=>$postbox,'phone'=>"0".$phone,'salary'=>$salary,'dept'=>$dept,'address'=>$address];
                            // $obj->insert('emp_datas',$columns);
                        
                        
                        $insert_data=[
                            'username' => $_POST['username'],
                            'email' =>$_POST['email-emp'],
                            'password' =>$_POST['pass-emp'],
                            'name' =>$_POST['name'],
                            'postbox' =>$_POST['postbox'],
                            'city' =>$_POST['city'],
                            'address' => $_POST['address'],
                            'state' =>$_POST['state'],
                            'country' =>$_POST['country'],
                            'phone' =>$_POST['phone'],
                            'dept' => $_POST['dept'],
                            'salary' =>$_POST['salary'],
                            'user_role' =>$_POST['userrole']
                        ];
                        $insert_ex = $this->insert('emp_data',$insert_data);

                    }
                        break;
                default:
                    # code...
                    break;
                    }
        }
    }
}
$obj = new Controller();

?>