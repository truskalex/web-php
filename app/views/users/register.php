<?php require_once APPROOT.'/views/inc/header.php';?>
<div class="row">
    <div class="col-md-6 mx-auto">
        <div class="card card/body bg-light mt-5">
            <h2>Register</h2>
            <form action="<?php echo URLROOT;?>/users/register" method="post">
                <div class="form-group">
                    <label for="name">Name: <sup>*</sup></label>
                        <input type="text" id="name" class="form-control">
                </div>

                <div class="form-group">
                    <label for="name">Email: <sup>*</sup></label>
                    <input type="email" id="email" class="form-control">
                </div>

                <div class="form-group">
                    <label for="name">Password: <sup>*</sup></label>
                    <input type="password" id="pass" class="form-control">
                </div>

                <div class="form-group">
                    <label for="name">Confirm password: <sup>*</sup></label>
                    <input type="password" id="pass2" class="form-control">
                </div>

                <div class="row">
                    <div class="col">
                        <input type="submit" value="Register" class="btn btn-block bg-info">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php require_once APPROOT.'/views/inc/footer.php';?>

