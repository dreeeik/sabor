<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
            <img src="<?php echo base_url('assets/img/logo-ct.png'); ?>" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold text-white">Sabor de Mel Store</span>
            <span class="ms-1 font-weight-bold text-white">
                <?php if ($this->session->has_userdata('usuario')): ?>
                    <?php echo "<br>Bem vindo," . $this->session->userdata('usuario')['nomeUsuario']; ?>
                <?php endif; ?>
            </span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-white active bg-gradient-primary" href="<?php echo base_url('pages/dashboard.html'); ?>">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">money</i>
                    </div>
                    <span class="nav-link-text ms-1">Painel de Venda</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="<?php echo base_url('clientes'); ?>">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">person</i>
                    </div>
                    <span class="nav-link-text ms-1">Clientes</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="<?php echo base_url('pages/billing.html'); ?>">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">checkroom</i>
                    </div>
                    <span class="nav-link-text ms-1">Produtos</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="<?php echo base_url('pages/virtual-reality.html'); ?>">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">receipt_long</i>
                    </div>
                    <span class="nav-link-text ms-1">Relatórios</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
        <div class="mx-3">
            <a class="btn bg-gradient-primary mt-4 w-100" href="<?php echo base_url('sair') ?>" type="button">Sair</a>
        </div>
    </div>
</aside>

<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">