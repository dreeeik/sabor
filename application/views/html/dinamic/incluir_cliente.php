
<div class="container-fluid py-4">
      <div class="row">
          <div class="col-lg-8 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                  <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Incluir Cliente</h4>
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
                  <form method="post" action="<?php echo base_url("clientes/incluir_cliente"); ?>" role="form" class="text-start">
                  <div class="input-group input-group-outline my-3">
                    <label class="form-label">NOME</label>
                    <input type="text" class="form-control" name="nome" id="nome">
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    <label class="form-label">CPF</label>
                    <input type="text" class="form-control" name="cpf" id="nome">
                  </div>
                  <div class="input-group input-group-outline my-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" name="eConsolidado" id="eConsolidado">
                        <label class="form-check-label" for="flexCheckDefault">
                            Cliente possui ficha
                        </label>
                    </div>
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    <label class="form-label">TELEFONE</label>
                    <input type="text" class="form-control" name="telefone" id="telefone">
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    <label class="form-label">E-MAIL</label>
                    <input type="text" class="form-control" name="email" id="telefone">
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    <label class="form-label">TIPO</label>
                    <input type="text" class="form-control" name="tipoLogradouro" id="tipoLogradouro">
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    <label class="form-label">CEP</label>
                    <input type="text" class="form-control" name="cep" id="cep">
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    <label class="form-label">ENDEREÇO</label>
                    <input type="text" class="form-control" name="logradouro" id="logradouro">
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    <label class="form-label">NÚMERO</label>
                    <input type="text" class="form-control" name="numero" id="numero">
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    <label class="form-label">BAIRRO</label>
                    <input type="text" class="form-control" name="bairro" id="bairro">
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    <label class="form-label">CIDADE</label>
                    <input type="text" class="form-control" name="cidade" id="cidade">
                  </div>
                  <div class="text-center">
                      <input type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2" value="Cadastrar">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      
