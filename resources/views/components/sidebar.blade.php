<link href="assets/css/sidebar.css" rel="stylesheet">
<link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />

<aside id="sidebar">
    <div class="d-flex">
        <button class="toggle-btn" type="button">
            <i class="lni lni-menu"></i>
        </button>
        <div class="sidebar-logo">
            <a href="/dashboard"><img src="assets/img/logo.png" class="avatar img-fluid" alt=""></a>
        </div>
    </div>
    <ul class="sidebar-nav">
        <li class="sidebar-item my-3">
            <a href="/dashboard" class="sidebar-link">
                <i class="lni lni-dashboard"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <!-- <li class="sidebar-item my-3">
            <a href="/partida" class="sidebar-link">
                <i class="lni lni-calendar"></i>
                <span>Próximos jogos</span>
            </a>
        </li>-->
        <li class="sidebar-item my-3">
            <a href="/admin" class="sidebar-link">
                <i class="lni lni-cart-full"></i>
                <span>Admin</span>
            </a>
        </li>
       <!-- <li class="sidebar-item my-3">
            <a href="/elenco" class="sidebar-link">
                <i class="lni lni-users"></i>
                <span>Elenco</span>
            </a>
        </li> -->
        <li class="sidebar-item">
            <a href="/cliente" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse" data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                <i class="lni lni-user"></i>
                <span>Clientes</span>
            </a>
            <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                <li class="sidebar-item">
                    <a href="/cliente" class="sidebar-link">Clientes</a>
                </li>
                <li class="sidebar-item">
                    <a href="/comentario" class="sidebar-link">Comentarios</a>
                </li>
            </ul>
        </li>
    </ul>
    <div class="sidebar-footer">
        <a href="#" class="sidebar-link">
            <i class="lni lni-cog"></i>
            <span>Configurações</span>
        </a>
        <a href="#" class="sidebar-link">
            <i class="lni lni-exit"></i>
            <span>Sair</span>
        </a>
    </div>
</aside>

<script src="assets/js/sidebar.js"></script>