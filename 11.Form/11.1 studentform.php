<?php
    if( isset($_GET['accept_cookie']) ){
        setcookie('cookie_accepted', 'yes', time() + ( 86400 * 30 ), "/");
        exit;
    }
?>

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
        $name = $email = $phone = $student_id = $department = $dob = $gender = $religion = $address = $photo = '';
        $students = [];
        $errors = [];
        $success = "";
//form submit hole data processing
        if( $_SERVER["REQUEST_METHOD"] =="POST" && isset($_POST['submit'])){

            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $student_id = $_POST['student_id'];
            $department = $_POST['department'];
            $dob = $_POST['dob'];
            $gender = $_POST['gender'] ?? '';
            $religion = $_POST['religion'];
            $address = $_POST['address'];
            $photo = $_FILES['photo']['name'];
//session start kora jodi age start na kora thakew
            if(session_status() == PHP_SESSION_NONE){
            session_start();
            }
//session a student array toiri kora
            if( !isset($_SESSION['students'])){
                $_SESSION['students'] = [];
            }
//notun student add kora
            if(!empty($name) && !empty($email) && !empty($phone) ) {
                
                $newStudent = [
                    'name' => $name,
                    'email' => $email,
                    'phone' => $phone,
                    'student_id' => $student_id,
                    'department' => $department,
                    'dob' => $dob,
                    'gender' => $gender,
                    'religion' => $religion,
                    'address' => $address,
                    'photo' => $photo
                ];

                array_push($_SESSION['students'], $newStudent);
            }
        }
//session theke student data load kora
        if(isset($_SESSION['students'] )){
            $students = $_SESSION['students'];
        }

            if ( empty($name) ) $errors['name'] = 'Name is required';
            
            if ( empty($email) ) $errors['email'] = 'Email is required';
             elseif ( !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors['email'] = "Invalid email format";
            
            if ( empty($phone) ) $errors['phone'] = 'phone number is required';
            
            if ( empty($errors) && !empty($name) && !empty($email) && !empty($phone))
            $success = "New Student added successfully!";

        ?>

        <div class="form-container">

            <?php if ( isset($success) ): ?>
                <p style="color: green;"><?php echo $success ?></p>
            <?php endif; ?>


            <form method="POST" action=""  enctype="multipart/form-data">

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

                            <!-- student_id -->

                <div class="form-group">
                    <label for="student_id">Student ID</label>
                    <input type="student_id" id="student_id" name="student_id" value="<?php echo 
                    htmlspecialchars($student_id);?>" >
                </div>
                            <!-- department -->

                <div class="form-group">  <label for = "department">Department:</label>
                    <select id = "department" name = "department">
                        <option value="">-- Select Department --</option>
                        <option value="fwt" <?php if( $department == 'fwt') echo 'selected'; ?> >FWT</option>
                        <option value="agroforestry" <?php if($department == 'agroforestry') echo 'selected'; ?>
                        >Agroforestry</option>
                        <option value="environmental science" <?php if($department == 'environmental science') echo
                         'selected'; ?> >Environmental Science</option>
                    </select>
                <div>

                            <!-- dob -->

                <div class="form-group">
                    <label for="dob">Date of Birth</label>
                    <input type="date" id="dob" name="dob" value="<?php echo htmlspecialchars($dob);?>" >
                </div>

                            <!-- gender -->

                <div class="form-group">
                    <label for = "gender">Gender:</label>
                    <input type = "radio" id = "gender" value = "male"<?php if( $gender=="male" )echo 'checked';?> name = 
                    "gender"> Male
                    <input type = "radio" id = "gender" value = "female"<?php if( $gender=="female" )echo 'checked';?> 
                    name = "gender"> Female
                </div> 

                            <!-- religion -->
            
                <div class="form-group">
                    <label for = "religion">Religion:</label>
                    <input checked type = "checkbox" id = "religion" name = "religion" value = "muslim"<?php if(
                     $religion =="muslim" )echo 'checked';?> >Muslim
                    <input type = "checkbox" id = "religion" name = "religion" value = "hindu"<?php if( 
                    $religion=="hindu" )echo 'checked';?>> Hindu
                </div> 
                           
                             <!-- address -->
                            
                <div class="form-group">
                    <label for = "address">Address:</label>
                    <textarea id="address" name="address"value="<?php echo htmlspecialchars($address);?>"></textarea>
                </div> 

                             <!-- photo -->

                <div class="form-group">
                    <label for = "photo">Choose your photo:</label>
                    <input type = "file" id = "photo" name = "photo">
                </div>

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
                    <th>Student_ID</th>
                    <th>Department</th>
                    <th>Date of Birth</th>
                    <th>Gender</th>
                    <th>Religion</th>
                    <th>Address</th>
                    <th>Photo</th>
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
                    <?php if(isset($_POST['student_id'])):?>
                        <td><?php echo $_POST['student_id']; ?></td>
                    <?php endif ?>
                    <?php if(isset($_POST['department'])):?>
                        <td><?php echo $_POST['department']; ?></td>
                    <?php endif ?>
                    <?php if(isset($_POST['dob'])):?>
                        <td><?php echo $_POST['dob']; ?></td>
                    <?php endif ?>
                    <?php if(isset($_POST['gender'])):?>
                        <td><?php echo $_POST['gender']; ?></td>
                    <?php endif ?>
                    <?php if(isset($_POST['religion'])):?>
                        <td><?php echo $_POST['religion']; ?></td>
                    <?php endif ?>
                    <?php if(isset($_POST['address'])):?>
                        <td><?php echo $_POST['address']; ?></td>
                    <?php endif ?>
                    <?php if(isset($_POST['photo'])):?>
                        <td><?php echo $_POST['photo']; ?></td>
                    <?php endif ?>
                </tr>-->
<!-- jodi kono submission na thake -->

                <?php if( empty($students) ): ?>
                    
                    <tr>
                        <td>Student Name 2</td>
                        <td>student2@example.com</td>
                        <td>234-567-8901</td>
                        <td>2025001</td>
                        <td>FWT</td>
                        <td>2005-01-01</td>
                        <td>Male</td>
                        <td>Muslim</td>
                        <td>Dhaka</td>
                        <td>studentA.jpg</td>
                    </tr>

                    <tr>
                        <td>Student Name 3</td>
                        <td>student3@example.com</td>
                        <td>345-678-9012</td>
                        <td>2025026</td>
                        <td>Agroforestry</td>
                        <td>2004-12-10</td>
                        <td>Female</td>
                        <td>Hindu</td>
                        <td>Khulna</td>
                        <td>studentB.jpg</td> 
                    </tr>;
               
                    <!-- submit kora data dakhano -->
                    <?php else:?>
                    <?php foreach( $students as $student ): ?>
                        
                        <tr>
                            <td><?php echo htmlspecialchars($student['name']); ?></td>
                            <td><?php echo htmlspecialchars($student['email']); ?></td>
                            <td><?php echo htmlspecialchars($student['phone']); ?></td>
                            <td><?php echo htmlspecialchars($student['student_id']); ?></td>
                            <td><?php echo htmlspecialchars($student['department']); ?></td>
                            <td><?php echo htmlspecialchars($student['dob']); ?></td>
                            <td><?php echo htmlspecialchars($student['gender']); ?></td>
                            <td><?php echo htmlspecialchars($student['religion']); ?></td>
                            <td><?php echo htmlspecialchars($student['address']); ?></td>
                            <td><?php echo htmlspecialchars($student['photo']); ?></td>
                        </tr>
                
                  <?php endforeach; ?>
               <?php endif; ?>
                        
            </tbody>
        </table>
    </div>
    <?php if( !isset($_COOKIE['cookie_accepted']) ): ?>
        
        <!-- cookie box -->

        <div class="cookie-box" id="cookieBox">
            <div>
                <p>
                    We use cookie to get better experience for visiting our website. Will you accept?
                </p>
            </div>
            <div>
                <button oneclick="acceptCookie()">Allow</button>
            </div>

        </div>
    <?php endif; ?>

    <script>
        function acceptCookie() {
            fetch('?accept_cookie=true').then(() => {
                document.getElementById('cookieBox').style.display = 'none';
            });
        }
    </script>
</body>
</html>