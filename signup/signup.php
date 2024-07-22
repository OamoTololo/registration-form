<?php
include ('signupValidations.php');

if ($user) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
<strong>Error!</strong> Username already taken.
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>';
}

if ($success) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>Success!</strong> Welcome User
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>';
}

?>

<div class="container mt-5">
    <form action="signup.php" method="post" class="w-50 ">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control"  placeholder="Enter username" name="username">
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" placeholder="Enter name" name="name">
        </div>
        <div class="form-group">
            <label for="surname">Surname</label>
            <input type="text" class="form-control"  placeholder="Enter surname" name="surname">
        </div>
        <div class="form-group">
            <label for="cars">Gender</label>
            <select name="gender" class="form-control">
                <option value="female">Female</option>
                <option value="male">Male</option>
                <option value="other">Other</option>
            </select>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control"  placeholder="Enter email" name="email">
        </div>
        <div class="form-group">
            <label for="dob">DOB</label>
            <input type="date" class="form-control" placeholder="Enter dob" name="dob">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control"  placeholder="Enter password" name="password">
        </div>
        <div class="form-group">
            <label for="confirmPassword">Confirm Password</label>
            <input type="password" class="form-control" placeholder="Confirm the password" name="confirmPassword">
        </div>
        <button type="submit" class="btn btn-success w-25">Submit</button>
    </form>
</div>