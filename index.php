<?php
    $title = 'Index';
    require_once 'includes/header.php';
    require_once 'db/conn.php';
?>

    <h1 class="text-center">Registration for IT Conference</h1>

    <form method="post" action="success.php">
        <div class="mb-3">
            <label for="firstname" class="form-label">First Name</label>
            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter First Name">
        </div>

        <div class="mb-3">
            <label for="lastname" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter Last Name">
        </div>

        <div class="mb-3">
            <label for="dob" class="form-label">Date of Birth</label>
            <input type="text" class="form-control" id="dob" name="dob" placeholder="Enter Date of Birth">
        </div>

        <div class="mb-3">
            <label for="specialty" class="form-label">Specialty</label>
            <select class="form-select" name="specialty" id="specialty">
                <option selected>Open this select menu</option>
                <option value="3">Database Administrator</option>
                <option value="Software Developer">Software Developer</option>
                <option value="Web Administrator">Web Administrator</option>
                <option value="Others">Others</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Contact Number</label>
            <input type="text" class="form-control" id="phone" name="contact" aria-describedby="phoneHelp">
            <div id="phoneHelp" class="form-text">We'll never share your phone number with anyone else.</div>
        </div>
        <div class="d-grid gap-2">
            <button type="submit" name="submit" class="btn btn-primary gap-2">Submit</button>
        </div>
    </form>
<br />
<?php require_once 'includes/footer.php' ?>