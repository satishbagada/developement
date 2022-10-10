<?php
class model{
    public $connection="";
    public function __construct()
    {
        session_start();
        //databse connectivity 
   
        try
        {

            $this->connection=new mysqli("localhost","root","","crms");
        }
        catch(Exception $e)
        {
            echo "<div>this database not connect</div>";
        }
    }
    //insert data in student table
    public function insert_data($table,$peram){
        $arr=array_keys($peram);
        $key=implode(",",$arr);

        $arr1=array_values($peram);
        $value=implode("','",$arr1);

        $query="INSERT INTO $table($key) values('$value')";
        $exe=mysqli_query($this->connection,$query);
        return $exe;
}
//member function of login customer here
public function login_customer($table,$em,$pass){

    $query="SELECT * from $table WHERE stud_email='$em' AND stud_password='$pass'";
    
    $exe=mysqli_query($this->connection,$query);
    $fetch=mysqli_fetch_array($exe);
    $tot=mysqli_num_rows($exe);
    if($tot==1){
        $_SESSION['fname']=$fetch['stud_firstname'];
        $_SESSION['id']=$fetch['stud_id'];
        $_SESSION['email_id']=$fetch['stud_email'];
        return true;
    }else
    {
        return false;
    }
}

}

?>