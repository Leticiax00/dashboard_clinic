<header>
  <button id="openBtn">☰ Menu</button>
  <div id="sidebar">
    <button id="closeBtn">✕</button>
    <h2>Menu</h2>
    <ul class="nav-menu">
      <li><a href="<?= base_url('/') ?>"><i>🏠</i> Início</a></li>
      <li><a href="<?= base_url('medico_solicitante') ?>"><i>🏥</i> Médicos</a></li>
      <li><a href="<?= base_url('config') ?>"><i>⚙️</i> Config</a></li>
    </ul>
  </div>

  <style>
    * {
       font-family: sans-serif; 
      }

    a {
       color: inherit; 
       text-decoration: none;
       
      }

    #openBtn {
       padding: 10px 20px; 
       background: #007BFF; 
       color: #fff;
       border: none;
       border-radius: 5px; 
       cursor: pointer;
      }

    #sidebar { 
      height: 100%; 
      width: 210px; 
      position: fixed; 
      top: 0; 
      left: -250px; 
      background: #007BFF; 
      color: #fff; 
      padding: 20px; 
      transition: left 0.3s;
     }

    #sidebar.active { 
      left: 0; 
    }

    #closeBtn { 
      background: #007BFF; 
      color: #fff; 
      border: none; 
      padding: 5px 10px; 
      cursor: pointer; 
      float: right; 
    }

    #closeBtn:hover {
       background: #f5f7fa; 
       color: black; 
       border-radius: 5px; 
      }

    .nav-menu { 
      list-style: none; 
    }

    .nav-menu li {
       padding: 15px 25px; 
       transition: all 0.3s;
       }

    .nav-menu li:hover {
       background: #16528f; 
       border: 2px solid #0257b2;
       }

    .nav-menu li i {
       margin-right: 10px; 
      }

  </style>

  <script>
    const sidebar = document.getElementById("sidebar");
    const openBtn = document.getElementById("openBtn");
    const closeBtn = document.getElementById("closeBtn");

    openBtn.onclick = () => sidebar.classList.add("active");
    closeBtn.onclick = () => sidebar.classList.remove("active");
  </script>
</header>
