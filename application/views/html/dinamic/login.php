
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                        <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Loja Sabor de Mel ADM - Login</h4>
                       
                        <div class="row mt-3">
                            <div class="col-2 text-center ms-auto">
                            </div>
                            <div class="col-2 text-center px-1">
                            </div>
                            <div class="col-2 text-center me-auto">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" action="<?php echo base_url(); ?>" role="form" class="text-start">
                        <div class="input-group input-group-outline my-3">
                            <label class="form-label">USERNAME</label>
                            <input type="text" class="form-control" name="username" id="username">
                        </div>
                        <div class="input-group input-group-outline mb-3">
                            <label class="form-label">SENHA</label>
                            <input type="password" class="form-control" name="senha" id="senha">
                        </div>
                        <?php if ($this->session->flashdata('error')): ?>
                            <div class="alert alert-light">
                                <?php echo $this->session->flashdata('error'); ?>
                            </div>
                        <?php endif; ?>
                        <div class="text-center">
                            <input type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2" value="Entrar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

