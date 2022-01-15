<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">
        <div class="col-lg-7">


            <div class="card 0-hidden border-0 shadow-lg my-5 p-4">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">

                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Welcome </h1>
                                </div>

                                <?= $this->session->flashdata('message'); ?>
                                <form class="user" method="post" action=" <?= base_url('auth'); ?>  ">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email Address" value="<?= set_value('email'); ?>">
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class=" form-group">
                                        <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>

                                    </div>

                                    <button type="submit" class="btn btn-info btn-user btn-block">
                                        Login
                                    </button>
                                    <hr>
                                    <a href="<?= base_url('user') ?>" class="btn btn-google btn-user btn-block">
                                        <i class="fab fa-google fa-fw"></i> Login with Google
                                    </a>

                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href=" <?= base_url('auth/registration'); ?> ">Create an Account!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>