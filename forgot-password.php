<?php

    include('includes/header.php');
    $description = "";
    andadelHeader('Forgot password - Andadel', 'login', $description);

?>

    <div class="container login">
        <div class="container-fluid login">
            <form action="">
                <!-- <div class="form-group">
                    <a href="login" class="back btn btn-success">back</a>
                </div> -->
                <h1 style="color: bisque; text-align:center;">Reset your password</h1>
                <p style="color: bisque; text-align:center;">An e-mail will be sent to you with instructions on how to reset your password.</p>
                <div class="form-group">
                    <input type="hidden" class="form-control" name="csrf" value="" id="csrf">
                </div>
                <br>
                <div class="form-group">
                    <label for="email">Email*</label>
                    <input type="text" class="form-control" placeholder="Enter email" id="email">
                </div>
                <button name="send-mail" class="btn btn-danger">Send</button>
            </form>
        </div>
    </div>

<?php

    include('includes/footer.php');

?>