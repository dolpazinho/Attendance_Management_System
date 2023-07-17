<?php
	global $crud;
	$title = 'Success';
	require_once 'includes/header.php';
    require_once 'db/conn.php';
    require_once 'db/crud.php';

    if(isset($_POST['submit'])) {
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $dob = $_POST['dob'];
        $email = $_POST['email'];
        $specialty = $_POST['specialty'];
        $contact = $_POST['contact'];
        // Call function to insert and tract if success or not
        $isSuccess = $crud->insert($fname, $lname, $dob, $email, $specialty, $contact);
        if (!$isSuccess) {
            echo '<h1 class="text-center text-success">You have been Registered</h1>';
        } else {
	        echo '<h1 class="text-center text-danger">There was an error in processing</h1>';
        }
    }
    ?>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Names: <?php echo $_POST['firstname']. ' ' .$_POST['lastname'] ?> </h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">Specialty: <?php echo $_POST['specialty'] ?></h6>
            <p class="card-text">Date of Birth: <?php echo $_POST['dob'] ?></p>
            <p class="card-text">Email: <?php echo $_POST['email'] ?></p>
            <p class="card-text">Contact: <?php echo $_POST['contact'] ?></p>
        </div>
    </div>
<br />
<br />
<?php require_once 'includes/footer.php' ?>
