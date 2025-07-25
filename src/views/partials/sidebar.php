<aside class="mt-10">
    <nav>
        <a href="<?= $base; ?>">
            <div class="menu-item <?= ($activeMenu == 'home') ? 'active' : ''; ?>"><!--marca o item que está ocorrendo no menu esquerdo-->
                <div class="menu-item-icon">
                    <img src="<?= $base; ?>/assets/images/home-run.png" width="16" height="16" />
                </div>
                <div class="menu-item-text">
                    Home
                </div>
            </div>
        </a>
        <a href="<?= $base; ?>/perfil">
            <div class="menu-item <?= ($activeMenu == 'profile') ? 'active' : ''; ?>"><!--marca o item que está ocorrendo no menu esquerdo-->
                <div class="menu-item-icon">
                    <img src="<?= $base; ?>/assets/images/user.png" width="16" height="16" />
                </div>
                <div class="menu-item-text">
                    Meu Perfil
                </div>
            </div>
        </a>
        <a href="<?= $base; ?>/amigos <?= ($activeMenu == 'friends') ? 'active' : ''; ?>"><!--marca o item que está ocorrendo no menu esquerdo-->
            <div class="menu-item">
                <div class="menu-item-icon">
                    <img src="<?= $base; ?>/assets/images/friends.png" width="16" height="16" />
                </div>
                <div class="menu-item-text">
                    Amigos
                </div>

            </div>
        </a>
        <a href="<?= $base; ?>/fotos">
            <div class="menu-item <?= ($activeMenu == 'photo') ? 'active' : ''; ?>"><!--marca o item que está ocorrendo no menu esquerdo-->
                <div class="menu-item-icon">
                    <img src="<?= $base; ?>/assets/images/photo.png" width="16" height="16" />
                </div>
                <div class="menu-item-text">
                    Fotos
                </div>
            </div>
        </a>
        <div class="menu-splitter"></div>
        <a href="<?= $base; ?>/config">
            <div class="menu-item <?= ($activeMenu == 'config') ? 'active' : ''; ?>"><!--marca o item que está ocorrendo no menu esquerdo-->
                <div class="menu-item-icon">
                    <img src="<?= $base; ?>/assets/images/settings.png" width="16" height="16" />
                </div>
                <div class="menu-item-text">
                    Configurações
                </div>
            </div>
        </a>
        <a href="<?= $base; ?>/sair">
            <div class="menu-item">
                <div class="menu-item-icon">
                    <img src="<?= $base; ?>/assets/images/power.png" width="16" height="16" />
                </div>
                <div class="menu-item-text">
                    Sair
                </div>
            </div>
        </a>
    </nav>
</aside>