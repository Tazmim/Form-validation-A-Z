<?php
include_once "autoload.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/bootstrap.min.css">
	<link rel="stylesheet" href="assets/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
	

    <?php
    if(isset($_POST['submit'])){
         $name = $_POST['name'];
         $email = $_POST['email'];
         $uname = $_POST['uname'];
         $age = $_POST['age'];
		 $cell = $_POST['cell'];
		 echo $location = $_POST['location'];
		 $agree = '';
		 $gender = '';
		 $validation_status = true;

		 if(isset($_POST['gender']))
		 {
			 $gender = $_POST['gender'];
		 }

		

		

		 if(isset($_POST['agree'])){
			 $agree = $_POST['agree'];
		 }
		 

        if(empty($name)||empty($email)||empty($age)||empty($uname)||empty($age)){

            $msg[] = validation("Hi!All fileds are required","danger");
			$validation_status = false;
        }
        if(emailcheck($email)==false){
            $msg[] = validation('Invalid Email adress','warning');
			$validation_status = false;

        }
		if($age<18){

			$msg[] = validation('Your age is not okay','warning');
			$validation_status = false;
		}
	    if(instEmail($email,['diu.edu.bd'])==false){
			$msg[] = validation('Your Email does not belong with this institution','warning');
			$validation_status = false;

			
		}

	    if(phone_Num($cell)==false){
			$msg[] = validation('Invalid Phone number','warning');
			$validation_status = false;

		}
	    if(username($uname)==false){

			$msg[] = validation('Invalid username','warning');
			$validation_status = false;

		}
		if($agree !='agree'){

			$msg[] = validation('You have to agree first','warning');
			$validation_status = false;

		}



        if($validation_status == true){
            $msg[] = validation('Data stable','succsess');
			form_clen();
        }
	

    }
    
    
    
    
    ?>
	
	

	<div class="wrap shadow">
		<div class="card">
			<div class="card-body">
				<h2>Sign Up</h2>
			
			
                <?php
                if(isset($msg)){
					foreach($msg as $m){
						echo $m;
					}
                    
					
					
					
                }
                
                
                
                ?>


				<form action="" method ='POST'>
					<div class="form-group">
						<label for="">Name</label>
						<input class="form-control" type="text" name = 'name' value = "<?php hold_data('name')?>" > 
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input class="form-control" type="text" name = 'email' value ="<?php hold_data('email')?>">
					</div>
					<div class="form-group">
						<label for="">Cell</label>
						<input class="form-control" type="text" name = 'cell' value = "<?php hold_data('cell')?>">
					</div>
					<div class="form-group">
						<label for="">Username</label>
						<input class="form-control" type="text" name='uname' value = "<?php hold_data('uname')?>">
					</div>

                    <div class="form-group">
						<label for="">Age</label>
						<input class="form-control" type="text" name = 'age' value = "<?php hold_data('age')?>">
					</div>

					<div class="form-group">
						<label for="">Gender</label> <br>
						<input type="radio" id='Male' name='gender' value= 'Male'> 
						<label for="Male">Male</label>
                        
						<input type="radio" id='Female' name='gender' value = "Female"> 
						<label for="Female">Female</label>
					</div>
					<div class= "form-group">
						<label for="">Location</label> <br>
						<select name="location" id="">
						<option value="">-Select-</option>
						<option value="Dhanmondi">Dhanmondi</option>
						<option value="Mirpur">Mirpur</option>
						<option value="Badda">Badda</option>
				        </select>
					</div>

					<div class="form-group">
					
						<input type="checkbox" id='agree' name= 'agree' value = 'agree'> 
						<label for="agree">I agree to register</label>

					</div>
					<div class="form-group">
						<input class="btn btn-primary" type="submit" value="Sign Up" name='submit'>
					</div>

					


				</form>
			</div>
		</div>
	</div>
	







	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>