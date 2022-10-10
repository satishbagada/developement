<?php
require_once("model/model.php");
class controller extends model{   
    public function __construct(){
        parent::__construct();

        //create account as student or store data in student table
        if(isset($_POST['register'])){
            date_default_timezone_set('Asia/Calcutta');
            $fname=$_POST['fname'];
            $lname=$_POST['lname'];
            $email=$_POST['em'];
            $pass=base64_encode($_POST['pass']);
            $cpass=base64_encode($_POST['cpass']);
            $mob=$_POST['phone'];
            $dob=$_POST['date'];
            $gander=$_POST['gander'];
            $state=$_POST['state'];
            $city=$_POST['city'];
            //upload images
            $size=$_FILES['img']['size'];
            $name=$_FILES['img']['name'];
            $tmp_name=$_FILES['img']['tmp_name'];
            $path="uploads/".$name;
            move_uploaded_file($tmp_name,$path);
            $address=$_POST['address'];
            $rdatetime=date("d/m/Y H:i:s A");
            
            $data=array("stud_firstname"=>$fname,"stud_lastname"=>$lname,"stud_email"=>$email,"stud_password"=>$pass,
            "stud_mobile"=>$mob,"dob"=>$dob,
            "stud_gander"=>$gander,"stud_state"=>$state,"stud_city"=>$city,"upload_photo"=>$path,"stud_address"=>$address,"rdatetime"=>$rdatetime);
            if($pass=$cpass){
                if($this->insert_data('student',$data)){

                    echo "<script>
                alert('Thanks for Create your account with Us!')
                window.location='create_account'
                </script>";
                }
            }
            else
            {
                echo "<script>
                alert('Your password does not matched try again')
                window.location='create_account';
                </script>";
            }
        }
        //store data in contact table
        if(isset($_POST["contact_btn"])){
            date_default_timezone_set("Asia/calcutta");
            $name=$_POST['name'];
            $email=$_POST['email'];
            $mob=$_POST['mobile'];
            $msg=$_POST['message'];
            $rdatetime=date("d-m-Y H:i:s A");
            
            $data=array("text_fname"=>$name,"text_email"=>$email,"text_mobile"=>$mob,"text_address"=>$msg,"rdatetime"=>$rdatetime);
            $chk=$this->insert_data('tbl_contact',$data);
            if($chk){
                echo "<script>
                alert('Thanks for contact with us Our one of Admin will contact with you Soon!')
                window.location='contact_us'
                </script>";
            }
            echo "<script>
                alert('plese all field are required')
                window.location='contact_us'
                </script>";

        }

        //login code here 
        if(isset($_POST['login'])){
            $em=$_POST['em'];
            $pass=base64_encode($_POST['pass']);
            $chk=$this->login_customer('student',$em,$pass);
            if($chk){
                echo "<script>
                alert('you are logged in successfully')
                window.location='./'
                </script>";
            }else
            {
                echo "<script>
                alert('your email and password does not match try again');
                window.location='login'
                </script>";
            }
        }
        
         if(isset($_SERVER['PATH_INFO'])){
            switch($_SERVER['PATH_INFO']){
                case '/':
                    require_once('index.php');
                    require_once('header.php');
                    require_once('slider.php');
                    require_once('login.php');
                    require_once('contact_us.php');
                    require_once("content.php");
                    require_once("logo.php");
                    require_once("footer.php");
                     break;

                        case '/create_account':
                        require_once('index.php');
                        require_once('header.php');
                        require_once('register.php');
                        require_once("footer.php");
                        require_once('login.php');
                        break;
                        case '/login':
                            require_once('index.php');
                            require_once('header.php');
                            require_once('login.php');
                            //require_once('register.php');
                            require_once("footer.php");
                            
                            break;

                        case '/contact_us':
                            require_once('index.php');
                            require_once('header.php');
                            require_once('contact_us.php');
                            require_once("footer.php");
                            require_once('login.php');
                            break;
    
                        case '/services':
                            require_once('index.php');
                            require_once('header.php');
                            require_once('servicee.php');
                            require_once("footer.php");
                            require_once('login.php');
                            break;
                            case '/company_register':
                                require_once('index.php');
                                require_once('header.php');
                                require_once('company_register.php');
                                require_once("footer.php");
                                require_once('login.php');
                                break;

                    default:
                    require_once('index.php');
                    require_once('header.php');
                    require_once('404.php');
                    require_once("footer.php");
                    require_once('login.php');
            }
           }
    }

  
}
$obj=new controller();
?>
