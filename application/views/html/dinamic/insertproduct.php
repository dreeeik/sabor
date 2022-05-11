
<div class="container-fluid py-4">
      <div class="row">
          <div class="col-lg-8 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                  <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Incluir Produto</h4>
                  <?php if(isset($mensagem)):?>
                    <?php echo $mensagem?>
                  <?php endif;?>
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
                  <form method="post" action="<?php echo base_url("produtos/inserir_produto");?>" role="form" class="text-start">
                  <div class="input-group input-group-outline my-3">
                    <label class="form-label">Descrição do Produto</label>
                    <input type="text" class="form-control" name="descricao_produto">
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Valor Unitário</label>
                    <input type="text" class="form-control">
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Quantidade</label>
                    <input type="text" class="form-control">
                  </div>
                    <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Código de Barras</label>
                    <input type="text" class="form-control">
                  </div> 
                  <div class="text-center">
                      <input type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2" value="Cadastrar">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      