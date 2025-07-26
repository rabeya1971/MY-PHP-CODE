

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Basic Form with Table</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Student Information</h2>
        </div>

        <?php
        $name = $email = $phone /*= $dob = $gender = $religion = $photo*/ = '';
        $students = [];
        $errors = [];
        $success = "";

        if( $_SERVER["REQUEST_METHOD"] =="POST" && isset($_POST['submit'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            // $dob = $_POST['dob'];
            // $gender = $_POST['gender'];
            // $religion = $_POST['religion'];
            // $photo = $_POST['photo'];

            if(session_status() == PHP_SESSION_NONE){
            session_start();
            }

            if( !isset($_SESSION['students'])){
                $_SESSION['students'] = [];
            }

            if(!empty($name) && !empty($email) && !empty($phone) /*&& !empty($dob) && !empty($gender) && !empty($religion) &&!empty($photo)*/) {
                
                $newStudent = [
                    'name' => $name,
                    'email' => $email,
                    'phone' => $phone
                    // 'dob' => $dob,
                    // 'gender' => $gender,
                    // 'religion' => $religion,
                    // 'photo' => $photo
                ];

                array_push($_SESSION['students'], $newStudent);
            }
        }

        if(isset($_SESSION['students'] )){
            $students = $_SESSION['students'];
        }

            if ( empty($name) ){
                
                $errors['name'] = 'Name is required';
            }

            if ( empty($email) ){
                
                $errors['email'] = 'Email is required';
            } elseif ( !filter_var($email, FILTER_VALIDATE_EMAIL)){
                $errors['email'] = "Invalid email format";
            }

            if ( empty($phone) ){
                
                $errors['phone'] = 'phone number is required';
            }

            if ( empty($errors) && !empty($name) && !empty($email) && !empty($phone))
            $success = "New Student added successfully!";

        ?>


        <div class="form-container">

            <?php if ( isset($success) ): ?>
                <p style="color: green;"><?php echo $success ?></p>
            <?php endif; ?>


            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >

                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($name);?>" required >
                </div>

                <?php if ( isset($errors['name']) ): ?>
                    <p style="color:red;"><?php echo $errors['name']; ?></p>
                <?php endif; ?>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email);?>" required>
                </div>

                <?php if ( isset($errors['email']) ): ?>
                    <p style="color:red;"><?php echo $errors['email']; ?></p>
                <?php endif; ?>
                
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" id="phone" name="phone" value="<?php echo htmlspecialchars($phone);?>" required>
                </div>

                <?php if ( isset($errors['phone']) ): ?>
                    <p style="color:red;"><?php echo $errors['phone']; ?></p>
                <?php endif; ?>

                <!-- <div class="form-group">
                    <label for="dob">Date of Birth</label>
                    <input type="date" id="dob" name="dob" value="dob" required>
                </div> 

                <div class="form-group">
                    <label for = "gender">Gender:</label>
                    <input type = "radio" id = "gender" value = "male" name = "gender"> Male
                    <input type = "radio" id = "gender" value = "female" name = "gender"> Female
                </div> 
            
                <div class="form-group">
                    <label for = "religion">Religion:</label>
                    <input checked type = "checkbox" id = "muslim" value = "islam" name = "muslim">Muslim
                    <input type = "checkbox" id = "hindu" value = "b1" name = "hindu"> Hindu
                  </div> 
                
                <div class="form-group">
                    <label for = "photo">Choose your photo:</label>
                    <input type = "file" id = "photo" value = "photo" name = "photo">
                </div> -->

                <button type="submit" name="submit" class="submit-btn">Submit</button>
            </form>
        </div>

        <!-- <?php print_r($_GET); ?> -->

        <div class="header">
            <h2>Submitted Data</h2>
        </div>
            <table class="data-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <!-- <th>Date of Birth</th>
                    <th>Gender</th>
                    <th>Religion</th>
                    <th>Photo</th> -->
                
                </tr>
            </thead>
            <tbody>
                
                <!-- <tr>
                    <td><?php echo $_GET['name']; ?></td>
                    <td><?php echo $_GET['email']; ?></td>
                    <td><?php echo $_GET['phone']; ?></td>
                    <td><?php echo $_GET['dob']; ?></td>
                    <td><?php echo $_GET['gender']; ?></td>
                    <td><?php echo $_GET['muslim']; ?></td>
                    <td><?php echo $_GET['photo']; ?></td>
                
                </tr> -->

                <!-- <tr>
                    <td><?php echo $_POST['name']; ?></td>
                    <td><?php echo $_POST['email']; ?></td>
                    <td><?php echo $_POST['phone']; ?></td>
                    <td><?php echo $_POST['dob']; ?></td>
                    <td><?php echo $_POST['gender']; ?></td>
                    <td><?php echo $_POST['muslim']; ?></td>
                    <td><?php echo $_POST['photo']; ?></td>
                
                </tr> -->

                <!-- <tr>
                    <?php if(isset($_POST['name'])):?>
                        <td><?php echo $_POST['name']; ?></td>
                    <?php endif ?>
                    <?php if(isset($_POST['email'])):?>
                        <td><?php echo $_POST['email']; ?></td>
                    <?php endif ?>
                    <?php if(isset($_POST['phone'])):?>
                        <td><?php echo $_POST['phone']; ?></td>
                    <?php endif ?>
                    <?php if(isset($_POST['dob'])):?>
                        <td><?php echo $_POST['dob']; ?></td>
                    <?php endif ?>
                    <?php if(isset($_POST['gender'])):?>
                        <td><?php echo $_POST['gender']; ?></td>
                    <?php endif ?>
                    <?php if(isset($_POST['muslim'])):?>
                        <td><?php echo $_POST['muslim']; ?></td>
                    <?php endif ?>
                    <?php if(isset($_POST['photo'])):?>
                        <td><?php echo $_POST['photo']; ?></td>
                    <?php endif ?>
                
                </tr> -->

                <!-- <tr>
                    <td>Student Name 2</td>
                    <td>student2@example.com</td>
                    <td>234-567-8901</td>
                    <td>2005-01-01</td>
                    <td>Male</td>
                    <td>Muslim</td>
                    <td>Photo</td>
                </tr>

                <tr>
                    <td>Student Name 3</td>
                    <td>student3@example.com</td>
                    <td>345-678-9012</td>
                    <td>2004-12-10</td>
                    <td>Female</td>
                    <td>Hindu</td>
                    <td>Photo</td> 
                </tr> -->
                

                <!-- jodi kono submission na thake -->

                <?php if( empty($students) ): ?>
                    
                    <tr>
                        <td>Student Name 2</td>
                        <td>student2@example.com</td>
                        <td>234-567-8901</td>
                        <!-- <td>2005-01-01</td>
                        <td>Male</td>
                        <td>Muslim</td>
                        <td>Photo</td> -->
                    </tr>

                    <tr>
                        <td>Student Name 3</td>
                        <td>student3@example.com</td>
                        <td>345-678-9012</td>
                        <!-- <td>2004-12-10</td> -->
                        <!-- <td>Female</td>
                        <td>Hindu</td>
                        <td>Photo</td>  -->
                    </tr>;
               
                    <!-- submit kora data dakhano -->
                    <?php else:?>
                    <?php foreach( $students as $student ): ?>
                        
                        <tr>
                            <td><?php echo htmlspecialchars($student['name']); ?></td>
                            <td><?php echo htmlspecialchars($student['email']); ?></td>
                            <td><?php echo htmlspecialchars($student['phone']); ?></td>
                            <!-- <td><?php echo $student['dob']; ?></td>
                            <td><?php echo $student['gender']; ?></td>
                            <td><?php echo $student['religion']; ?></td>
                            <td><?php echo $student['photo']; ?></td> -->
                        </tr>
                
                  <?php endforeach; ?>
               <?php endif; ?>
                        
            </tbody>
        </table>
    </div>
</body>
</html>