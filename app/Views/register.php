<div class="container">
    <div class="row">
        <div class="col-12 col-sm8 offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white form-wrapper">
            <div class="container">
                <h3>Register</h3>
                <hr>
                <form action="/register" method="post">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="firstname">First Name</label>
                                <input <?= set_value('firstname') ?> type="text" name="firstname" id="firstname" class="form-control" placeholder="" aria-describedby="helpId">
                            </div>
                        </div>

                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="lastname">Last Name</label>
                                <input <?= set_value('lastname') ?> type="text" name="lastname" id="lastname" class="form-control" placeholder="" aria-describedby="helpId">
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input <?= set_value('email') ?> type="text" name="email" id="email" class="form-control" placeholder="" aria-describedby="helpId">
                            </div>
                        </div>

                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="" aria-describedby="helpId">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="confirm_password">Confirm Password</label>
                                <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="" aria-describedby="helpId">
                            </div>
                        </div>
                        <?php if (isset($validation)) : ?>
                            <div class="col-12">
                                <div class="alert alert-danger" role="alert">
                                    <?= $validation->listErrors() ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-4">
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>

                        <div class="col-12 col-sm-8 text-right">
                            <a href="/">Already have account?</a>
                        </div>
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>
</div>