<?php include "pages/includes/header.php ";?>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title text-center">Register Now</h3>
                        </div>
                        <div class="card-body">
                            <div  class="">
                                <form action="action.php" method="post" enctype="multipart/form-data">

                                    <div class="form-group row">
                                        <label for="" class="col-md-4 col-form-label">User Name</label>
                                        <div class="col-md-8">
                                            <input type="text" name="userName" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group row mt-5">
                                        <label for="" class="col-md-4 col-form-label">Email</label>
                                        <div class="col-md-8">
                                            <input type="email" name="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row mt-5">
                                        <label for="" class="col-md-4 col-form-label">Password </label>
                                        <div class="col-md-8">
                                            <input type="number" name="password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row mt-5">
                                        <label for="" class="col-md-4">Login</label>
                                        <div class="col-md-8 mb-5">
                                            <input type="submit" name="registerBtn" value="Submit" class="btn btn-outline-success btn-block">
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


<?php include "pages/includes/footer.php ";?>