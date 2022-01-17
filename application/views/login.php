
<body style="background-color:#2F8042;">

    <div class="container mt-5"><br><br>

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-5 col-lg-6 col-md-5">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                        <?php echo $this->session->flashdata('pesan') ?>
                                    </div>

                                    <form method="post" action="<?php echo base_url ('auth/proses_login') ?>" class="user">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleInputUsername" name="username" aria-describedby="Username"
                                                placeholder="Username">
                                                <?php echo form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                                                
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" name="password" placeholder="Password">
                                                <?php echo form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>

                                        <button style="background-color:#2F8042; color: #fff;" class="btn btn-user btn-block" type="submit">Login</button>
                                    </form>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>