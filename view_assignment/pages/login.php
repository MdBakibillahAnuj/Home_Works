<?php include 'pages/includes/header.php'; ?>

<section class="mt-custom">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card mt-5">
                    <div class="card-header">
                        <h3 class="card-title text-center">Login Here</h3>
                    </div>
                    <div class="card-body">
                        <?php if (isset($message)) { ?>
                        <h2 class="text-success" <?php echo $message; ?>
                            <?php } ?>

                            <div>
                                <form action="action.php" method="post">

                                    <div class="form-group row mt-5">
                                        <label for="" class="col-md-4">User-Name</label>
                                        <div class="col-md-8">
                                            <input type="text" name="userName" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row mt-5">
                                        <label for="" class="col-md-4">password</label>
                                        <div class="col-md-8">
                                            <input type="password" name="password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row mt-5">

                                        <div class="col-md-12 mb-5">
                                            <input type="submit" name="loginBtn"
                                                   class="btn btn-outline-success btn-block" value="Login"/>
                                        </div>
                                    </div>
                                </form>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="mb-5">
            <br>
            <br>
            <br>
    </div>
</section>

<?php include 'pages/includes/footer.php'; ?>
