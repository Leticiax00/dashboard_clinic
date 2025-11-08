<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    
<div class="header" id="style_header">
<header>
    <button id="hamburger" class="hamburger" aria-label="Abrir menu" aria-expanded="false">
        <i class="fas fa-bars"></i>
    </button>

    <a href="<?= base_url('inicial')?>" class="button_home desktop-only">
        <i class="fas fa-house"></i> Home
    </a>

    <a href="<?= base_url('paghome2')?>" class="home_pac desktop-only">
        <i class="fas fa-users"></i> Pacientes Cadastrados
    </a>

    <a href="<?php echo base_url('cadastro/paciente'); ?>"" class="desktop-only">
        <i class="fas fa-user-plus"></i> Novo Paciente
    </a>

    <a href="<?= base_url('group_pac')?>" class="desktop-only">
        <i class="fas fa-user-group"></i> Novo Grupo de Pacientes
    </a>

    <a href="<?= base_url('exames_oferecidos')?>" class="desktop-only">
        <i class="fas fa-user-group"></i> Cadastro de exames Oferecidos
    </a>

</header>
</div>

<!-- Sidebar / Offcanvas -->
<div id="overlay" class="overlay" hidden></div>
<aside id="sidebar" class="sidebar" aria-hidden="true">
    <button id="closeSidebar" class="close-btn" aria-label="Fechar menu"><i class="fas fa-times"></i></button>

    <nav class="sidebar-nav">
        <a href="<?= base_url('inicial')?>"><i class="fas fa-house"></i> Home</a>
        <a href="<?= base_url('paghome')?>"><i class="fas fa-users"></i> Pacientes Cadastrados</a>
        <a href="<?= base_url('cadastro_pac')?>"><i class="fas fa-user-plus"></i> Novo Paciente</a>
        <a href="<?= base_url('group_pac')?>" class="botao_pac_sidebar"><i class="fas fa-user-group"></i> Novo Grupo de Pacientes</a>
    </nav>
</aside>
    
<style>
/* Header */

body {
    margin: 0;
    font-family: Arial, sans-serif;
}
header {
    position: fixed;        
    top: 0;                
    left: 50%;              
    transform: translateX(-50%); 
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    gap: 8px;           
    padding: 12px 16px;
    z-index: 1000;     
    background-color: #19025eff;
    box-sizing: border-box;
}

/* Buttons / links */
a, .botao_pac {
    background-color: #007BFF;
    color: white;
    border: none;
    padding: 8px 14px;
    border-radius: 8px;
    cursor: pointer;
    font-size: 15px;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 8px;
}

a:hover {
    background-color: #0056b3;
}

/* Hamburger (mobile) */
.hamburger {
    background: transparent;
    border: none;
    color: white;
    font-size: 22px;
    cursor: pointer;
    display: none; /* shown in mobile via media query */
}

/* Sidebar styles */
.overlay {
    position: fixed;
    inset: 0;
    background: rgba(0,0,0,0.45);
    z-index: 1200;
    transition: opacity 0.25s ease;
}

.sidebar {
    position: fixed;
    top: 0;
    left: -320px;
    width: 280px;
    max-width: 80%;
    height: 100%;
    background: #fff;
    box-shadow: 2px 0 12px rgba(0,0,0,0.15);
    padding: 18px;
    z-index: 1300;
    display: flex;
    flex-direction: column;
    gap: 12px;
    transition: left 0.28s ease;
    box-sizing: border-box;
}

.sidebar.open {
    left: 0;
}

.close-btn {
    align-self: flex-end;
    background: transparent;
    border: none;
    font-size: 20px;
    cursor: pointer;
}

.sidebar-nav {
    display: flex;
    flex-direction: column;
    gap: 10px;
    margin-top: 6px;
}

.sidebar-nav a {
    color: #19025e;
    background: #f1f5ff;
    padding: 10px 12px;
    border-radius: 8px;
    text-decoration: none;
    display: inline-flex;
    gap: 10px;
    align-items: center;
}

.botao_pac_sidebar {
    background-color: #007BFF;
    color: white;
    padding: 10px 12px;
    border-radius: 8px;
    border: none;
    cursor: pointer;
    text-align: left;
}

/* Desktop-only helper */
.desktop-only { display: inline-flex; }

/* Body spacing so content doesn't go under fixed header */
body {
    margin: 0;
    padding-top: 64px;  
}

/* Responsividade */
@media (max-width: 900px) {
    header { padding: 10px 12px; gap: 6px; }
    .desktop-only { display: none; } /* hide desktop links on small screens */
    .hamburger { display: inline-flex; }
}

/* Ensure accessibility focus styles */
.hamburger:focus, .close-btn:focus, .botao_pac_sidebar:focus, .sidebar-nav a:focus {
    outline: 3px solid rgba(0,123,255,0.45);
    outline-offset: 2px;
}
</style>

<script>
(function(){
    const hamburger = document.getElementById('hamburger');
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('overlay');
    const closeBtn = document.getElementById('closeSidebar');
    const abrirModal = document.getElementById('abrirModal');
    const abrirModalSidebar = document.getElementById('abrirModalSidebar');

    function openSidebar(){
        sidebar.classList.add('open');
        overlay.hidden = false;
        document.body.style.overflow = 'hidden';
        sidebar.setAttribute('aria-hidden','false');
        hamburger.setAttribute('aria-expanded','true');
    }
    function closeSidebar(){
        sidebar.classList.remove('open');
        overlay.hidden = true;
        document.body.style.overflow = '';
        sidebar.setAttribute('aria-hidden','true');
        hamburger.setAttribute('aria-expanded','false');
    }

    hamburger && hamburger.addEventListener('click', openSidebar);
    closeBtn && closeBtn.addEventListener('click', closeSidebar);
    overlay && overlay.addEventListener('click', closeSidebar);

    // Allow Esc to close
    document.addEventListener('keydown', function(e){
        if(e.key === 'Escape' && sidebar.classList.contains('open')){
            closeSidebar();
        }
    });

    // If original modal opener exists, wire the sidebar button to trigger it (if present)
    if(abrirModal && abrirModalSidebar){
        abrirModalSidebar.addEventListener('click', function(){
            closeSidebar();
            abrirModal.click();
        });
    }
})();
</script>

</body>
</html>