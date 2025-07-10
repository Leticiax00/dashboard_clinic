<header>
<button id="openBtn">☰ Menu</button>
  <div id="sidebar">
    <button id="closeBtn">✕</button>
    <h2>Menu</h2>
    <ul class="nav-menu">
    <li>
        <a href="<?= base_url('index') ?>" class="home">
          <i>🏠</i>Home
        </a>
      </li>  
    <li>
        <a href="<?= base_url('paghome') ?>" class="dashboard">
          <i>👨‍👩‍👧</i>Pacientes
        </a>
      </li>
      <li>
        <a href="<?= base_url('medicos') ?>" class="medicos">
          <i>🏥</i>Médicos
        </a>
      </li>
      <li>
        <a href="<?= base_url('config') ?>" class="configuracao">
          <i>⚙️</i>Config
        </a>
      </li>
    </ul>
  </div>
</header>

<script>
  const sidebar = document.getElementById("sidebar");
  const openBtn = document.getElementById("openBtn");
  const closeBtn = document.getElementById("closeBtn");
  const dashboard = document.getElementById("dashboard");
  const home = document.getElementById("home");

  openBtn.onclick = () => {
    sidebar.classList.add("active");
  };

  closeBtn.onclick = () => {
    sidebar.classList.remove("active");
  };

   dashboard.onclick = () => {
  window.location.href = "paghome"; // ação do clique do botão
};

   home.onclick = () => {
  window.location.href = "/"; // ação do clique do botão
};
</script>
