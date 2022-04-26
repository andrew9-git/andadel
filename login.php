<?php

    include('includes/header.php');
    $description = "";
    andadelHeader('Login - Andadel', 'login', $description);

?>

<div class="container login">
        <div class="container-fluid login">
            <!-- Generate password for user and send it to their email -->
            <form action="">
                <div class="form-group">
                    <input type="hidden" class="form-control" name="csrf" value="" id="csrf">
                </div>
                <div class="form-group">
                    <label for="username">Username*</label>
                    <input type="text" class="form-control" placeholder="Enter username" id="username">
                </div>
                <div class="form-group">
                    <label for="password">Password*</label>
                    <input type="password" class="form-control" id="password">
                </div>
                <div class="form-group">
                    <a style="color: white;" href="forgot-password">Forgot password?</a>
                </div>
                <button name="send-mail" class="btn btn-danger form-control">Login</button>
            </form>
        </div>
    </div>

<?php

    include('includes/footer.php');

?>