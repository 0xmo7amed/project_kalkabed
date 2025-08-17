<?php
$firstname = $_POST['firstName'];
$lastname = $_POST['lastName'];
$email = $_POST['email'];

$errors = [
    'firstNameError' => '',
    'lastNameError' => '',
    'emailError' => '',
];

if (isset($_POST['submit'])){  // مش هيتنفذ حاجه غير لما اضغط علي SUBMIT
   
            
    if (empty($firstname)) {
        $errors['firstNameError'] = 'يرجي ادخال الاسم الاول';
    }
    
    if(empty($lastname)){
        $errors['lastNameError'] = 'يرجي ادخال الاسم الاخير';
    }
    
    if(empty($email)){
        $errors['emailError'] = 'يرجي ادخال الايميل';
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['emailError'] = 'برجاء ادخال ايميل صحيح';
    }

    if(!array_filter($errors)){
            $firstname =mysqli_real_escape_string($conn, $_POST['firstName']);
            $lastname = mysqli_real_escape_string($conn, $_POST['lastName']);
            $email  =   mysqli_real_escape_string($conn, $_POST['email']);
            $sql = "INSERT INTO users(firstname,lastname,email)   
            VALUES ('$firstname', '$lastname', '$email')";  //هياخد المدخلات يحطها جوه متغير SQQL
    

        if (mysqli_query($conn, $sql)){
            header('Location: index.php');
            exit;
        }else{
                echo 'Error: '  . mysqli_error($conn);
            }
        }
    }       
?>