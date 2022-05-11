
<div class="container-fluid py-4">
      <div class="row">
          <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Tabela de Produtos</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Código do Produto</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Descrição</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Valor Unitário</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Quantidade</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Codigo de Barras</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($produtoLista as $produto):?>
                    <tr>
                      <td class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">
                        <span class="text-secondary text-xs font-weight-bold"><?php echo $produto->idProduto;?></span>
                      </td>
                      <td class="text-uppercase text-secondary text-xxs font-weight-bolder">
                        <span class="text-secondary text-xs font-weight-bold"><?php echo $produto->descricaoProduto;?></span>
                      </td>
                      <td class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">
                          <span class="text-secondary text-xs font-weight-bold"><?php echo "R$ " . str_replace(".", ",", $produto->valorUnitario);?></span>
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
          </div>
        </div>
      </div>
    <div class="row">
        <div class="col-2">
            <a class="btn bg-gradient-primary mt-4 w-100" href="https://www.creative-tim.com/product/material-dashboard-pro?ref=sidebarfree" type="button">
                <div>
                    <i class="material-icons">add</i>
                </div>
                <span>Novo Produto</span>
            </a>
        </div>
    </div>
      