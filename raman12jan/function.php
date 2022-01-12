<?php
//this function is for insert data 
function insert() {
        include 'config.php';
        $name = $_POST['name'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $state = $_POST['state'];
        $language = $_POST['language'];
        $gender = $_POST['gender'];
       // $review = $_POST['$review'];
       // here when i am making review as a variable then it is producing an error that the review variable is not defined
        $sql = "insert into form (name , email , number, state, gender, language)
         values('$name','$email','$number','$state','$gender', '$language')";
         
       $query=mysqli_query($conn,$sql);
       if($query){
           echo "ok";
        
       }
       else{
           echo "not ok";
       }
    
}
//insert();
//here we are starting del function
function delete() {
    include 'config.php';
    // if(isset($_POST['submit'])){
    //         $conn = mysqli_connect('localhost','root','','raman');
            $sql ="delete  from form";
            if(mysqli_query($conn,$sql)){
                echo "ok";
            }
            
    
}
//delete();
?>