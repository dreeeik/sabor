<div class="container-fluid py-4">
      <div class="row">
          <div class="col-12">
            <div class="card my-4">
                <?php if(isset($clientesPFLista)): ?>
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                      <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Lista de Clientes Pessoa Física</h6>
                      </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                      <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                          <thead>
                            <tr>
                              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id</th>
                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nome</th>
                              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">CPF</th>
                              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">E-mail</th>
                              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Telefone</th>
                              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Endereço</th>
                              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php foreach($clientesPFLista as $cliente):?>
                            <tr>
                              <td class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">
                                <span class="text-secondary text-xs font-weight-bold"><?php echo $cliente->idCliente;?></span>
                              </td>
                              <td class="text-uppercase text-secondary text-xxs font-weight-bolder">
                                <span class="text-secondary text-xs font-weight-bold"><?php echo $cliente->nome;?></span>
                              </td>
                              <td class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">
                                  <span class="text-secondary text-xs font-weight-bold"><?php ?></span>
                              </td>
                              <td class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">
                                <span class="text-secondary text-xs font-weight-bold"><?php echo $produto->quantidade;?></span>
                              </td>
                              <td class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">
                               <span class="text-secondary text-xs font-weight-bold"><?php echo $produto->codigodebarras;?></span>
                              </td>
                              <td class="text-secondary opacity-7">
                                <a <i class="material-icons">mode_edit</i>
                              </td>
                            </tr>
                            <?php endforeach;?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                <?php endif; ?>
                <?php if(isset($clientesPJLista)): ?>
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                      <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Lista de Clientes Pessoa Jurídica</h6>
                      </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                      <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                          <thead>
                            <tr>
                              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id</th>
                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Razão social</th>
                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nome Fantasia</th>
                              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">CNPJ</th>
                              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Inscrição Estadual</th>
                              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">E-mail</th>
                              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Telefone</th>
                              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Endereço</th>
                              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php foreach($clientesPJLista as $cliente):?>
                            <tr>
                              <td class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">
                                <span class="text-secondary text-xs font-weight-bold"><?php echo $cliente->idCliente;?></span>
                              </td>
                              <td class="text-uppercase text-secondary text-xxs font-weight-bolder">
                                <span class="text-secondary text-xs font-weight-bold"><?php echo $cliente->nome;?></span>
                              </td>
                              <td class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">
                                  <span class="text-secondary text-xs font-weight-bold"><?php ?></span>
                              </td>
                              <td class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">
                                <span class="text-secondary text-xs font-weight-bold"><?php echo $produto->quantidade;?></span>
                              </td>
                              <td class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">
                               <span class="text-secondary text-xs font-weight-bold"><?php echo $produto->codigodebarras;?></span>
                              </td>
                              <td class="text-secondary opacity-7">
                                <a <i class="material-icons">mode_edit</i>
                              </td>
                            </tr>
                            <?php endforeach;?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                <?php endif; ?>
          </div>
        </div>
      </div>
    <div class="row">
        <div class="col-2">
            <a class="btn bg-gradient-primary mt-4 w-100" href="<?php echo base_url('clientes/incluir_cliente')?>" type="button">
                <div>
                    <i class="material-icons">add</i>
                </div>
                <span>Novo Cliente</span>
            </a>
        </div>
    </div>
      
