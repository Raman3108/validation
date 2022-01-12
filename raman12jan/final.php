<?php
if(isset($_POST['Submit'])){
        //validation 
        $name=trim($_POST["name"]);
        $number=trim($_POST["number"]);
        $email=trim($_POST["email"]);
        $review=trim($_POST["review"]);
        $name=htmlspecialchars($_POST["name"]);
        $number=htmlspecialchars($_POST["number"]);
        $email=htmlspecialchars($_POST["email"]);
        $review=htmlspecialchars($_POST["review"]);

        //   if ($name = $number = $email == "") {
        //       $errorMsg= "all the fields are mendatory:";
        //   }
        if($name =="") {
            $errorMsg=  "error : You did not enter a name.";
            $code= "1" ;
        }
        elseif($number == "") {
            $errorMsg=  "error : Please enter number.";
            $code= "2";
        }
        //check if the number field is numeric
        elseif(is_numeric(trim($number)) == false){
            $errorMsg=  "error : Please enter numeric value.";
            $code= "2";
        }
        //check if the lentgh of  number is not ten
        elseif(strlen($number)<10){
            $errorMsg=  "error : Number should be ten digits.";
            $code= "2";
        }
        elseif(strlen($number)>10){
            $errorMsg=  "error : Number should be ten digits.";
            $code= "2";
        }
        //check if email field is empty
        elseif($email == ""){
            $errorMsg=  "error : You did not enter a email.";
            $code= "3";
        } //check for valid email 
        elseif(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email)){
        $errorMsg= 'error : You did not enter a valid email.';
        $code= "3";
        }
        else{
        
        include 'function.php';
        insert();
        
        //final code will execute here.
        }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>form</title>
    <style type="text/css">
    .errorMsg {
        border: 1px solid red;
    }

    .message {
        color: red;
        font-weight: bold;
    }
    </style>
</head>

<body>
    <?php if (isset($errorMsg)) { echo "<p class='message'>" .$errorMsg. "</p>" ;} ?>

    <form name="registration" id="registration" method="post"
        action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <fieldset style="border:2px solid green;
                        -moz-border-radius:8px;
                        -webkit-border-radius:8px;	
                        border-radius:8px;">
            <legend> person info</legend>
            Name:
            <br><br>

            <input name="name" type="text" id="name" value="<?php if(isset($name)){echo $name;} ?>"
                <?php if(isset($code) && $code == "1"){echo "class=errorMsg" ;} ?>>
            <br><br>
            Number:
            <br><br>
            <input name="number" type="text" id="number" value="<?php if(isset($number)){echo $number;} ?>"
                <?php if(isset($code) && $code == "2"){echo "class=errorMsg" ;}?>>
            <br><br>
            Email:
            <br><br>
            <input name="email" type="text" id="email" value="<?php if(isset($email)){echo $email; }?>"
                <?php if(isset($code) && $code == "3"){echo "class=errorMsg" ;}?>>
            <br><br>
            State:
            <br><br>
            <select name="state" id="states">
                <option name="state" value="select">select</option>
                <option name="state" value="punjab">punjab</option>
                <option name="state" value="haryana">haryana</option>
                <option name="state" value="delhi">delhi</option>
                <option name="state" value="bihar">bihar</option>
                <option name="state" value="up">UP</option>
                <option name="state" value="chandigarh">CHANDIGARH</option>
                <option name="state" value="maharashtra">MAHARASHTRA</option>
                <option name="state" value="himachal">HIMACHAL</option>
                <option name="state" value="utrakhand">UTRAKHAND</option>
            </select>
            <br><br>
            Gender:
            <br><br>
            <input name="gender" type="radio" id="gender" value="male">Male

            <input name="gender" type="radio" id="gender" value="female">Female

            <input name="gender" type="radio" id="gender" value="transgender">Transgender
            <br><br>
            Language:
            <br><br>
            <input name="language" type="checkbox" id="language" value="hindi">Hindi

            <input name="language" type="checkbox" id="language" value="english">English

            <input name="language" type="checkbox" id="language" value="punjsbi">Punjabi
            <br><br>
            review:
            <br><br>
            <textarea name="review" id="review" value="abcdefghijk" cols="" rows=""></textarea>
            <br><br>

            <input type="submit" name="Submit" value="Submit">


        </fieldset>
    </form>




</body>

</html>
<!-- <?php
echo $_POST['$review'];
?> -->