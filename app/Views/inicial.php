<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Web Clinic</title>
  <link rel="stylesheet" href="<?= base_url('css/inicial.css') ?>" />
</head>
<body>

  <div class="area">
    <ul class="circles">
      <li></li><li></li><li></li><li></li><li></li>
      <li></li><li></li><li></li><li></li><li></li>
    </ul>
  </div>

<<<<<<< HEAD
   <?= view('partials/header') ?> 
=======
   <?php include 'partials/header.php'; ?>
>>>>>>> 8b77ee2d72a2e04167a97232eb6ef5ed11b6d0b7

  <div class="container-wrapper">
    <div class="container">
      <div class="calendario-wrapper">
        <div class="calendario-container">

          <div class="cabecalho-calendario">
            <button class="button-nav mes-anterior" onclick="previousMonth()">‹</button>
            <div class="mes-ano" id="month-year">Mês Ano</div>
            <button class="button-nav mes-proximo" onclick="nextMonth()">›</button>
          </div>
          <div class="dias-semana">
            <div>Dom</div>
            <div>Seg</div>
            <div>Ter</div>
            <div>Qua</div>
            <div>Qui</div>
            <div>Sex</div>
            <div>Sáb</div>
          </div>
          <div class="grade-dias" id="days-grid"></div>
        </div>
        <div class="painel-agendamento" id="painel-agendamento">
<<<<<<< HEAD
  <h2 id="dia-semana"></h2>
  <h3 id="container-data">Selecione uma data</h3>

  <a href="#" id="btnSelecionarDia" class="button-agendamento">Nova Consulta</a>
  <br><br>
</div>


<br><br>



          <br> <br>
<!--<a href="<?= base_url('consultas') ?>" class="button-agendamento2">Agenda Médica</a>-->
=======
          <h2 id="dia-semana"></h2>
          <h3 id="container-data">Selecione uma data</h3>
          <a href="<?= base_url('paghome') ?>" id="button_nova.consulta" class="button-agendamento">Nova Consulta</a>
          <br> <br>
          <a href="<?= base_url('consultas') ?>" class="button-agendamento2">Agenda Médica</a>
>>>>>>> 8b77ee2d72a2e04167a97232eb6ef5ed11b6d0b7
        </div>
      </div>

    </div>
  </div>

  <div id="modal" class="modal">
  <div class="modal-conteudo">
    <span class="fechar">&times;</span>
    <h2>Novo Grupo de Clientes</h2>
    
    <form action="<?= base_url('grupos/adicionar') ?>" method="post">
      <label for="nome">Nome do Grupo:</label>
      <input type="text" id="nome" name="nome" required>
      <br>
      <button type="submit">Salvar</button>
    </form>
  </div>
</div>

  
<style>
  @property --rotate {
  syntax: "<angle>";
  initial-value: 132deg;
  inherits: false;
}

@import url('https://fonts.googleapis.com/css?family=Exo:400,700');


:root {
  --card-height: 20vh; /* plano de fundo */
  --card-width: 50vh;
}

/* Config modal */

.modal {
  display: none;
  position: fixed;
  z-index: 1000;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background: rgba(0,0,0,0.5);
  justify-content: center;
  align-items: center;
}

/* Conteúdo da janela */
.modal-conteudo {
  background: #fff;
  padding: 50px;
  border-radius: 10px;
  width: 400px;
  max-width: 90%;
}

/* Botão fechar */
.fechar {
  float: right;
  font-size: 22px;
  cursor: pointer;
}
<<<<<<< HEAD

 @media (max-width: 900px){
    .calendario-wrapper{ 
      gap: 12px;
    }

    .painel-agendamento{ 
    width: 280px; 
    margin: auto;
   }

    .grade-dias .dia{
    min-height: 56px;
   }
   
  }

  /* Responsividade: mobile */
  @media (max-width: 700px){
    .container-wrapper{ 
      padding: 18px 10px 40px;
    }

    .container {
          padding: 30px;
    /* padding-left: 60px; */
    padding-right: 50px;
    }

    .calendario-wrapper{
       flex-direction: column; align-items: stretch;
       }

    .calendario-container, .painel-agendamento{ 
      width:100%; max-width:100%; box-shadow:none; padding: 12px;
     }

    .painel-agendamento{ 
      order: 2; margin-top: 12px; 
    }

    .calendario-container{
       order: 1; 
      }

    .dias-semana{
       font-size: 0.85rem; gap:4px; 
      }

    .grade-dias{ 
      gap:6px;
     }

    .grade-dias .dia{ 
      min-height: 56px; 
      aspect-ratio: auto; 
      height: 56px; 
      align-items:center; 
      justify-content:center; 
      padding: 6px;
     }

    .grade-dias .dia .num{ 
      font-size: 0.92rem;
     }

    .mes-ano{ 
      font-size: 1rem; 
    }

    .button-nav{ 
      font-size: 20px; padding:6px; 
    }

    .button-agendamento, .button-agendamento2{ 
      padding:10px;
      font-size:0.95rem; 
    }

    .modal-conteudo{ 
      padding: 20px;
      width: 340px;
    }
  }

  /* Muito pequeno (ex.: telefones compactos) */
  @media (max-width: 420px){
    .grade-dias .dia{ height: 48px; font-size: 0.92rem; }
    .dias-semana div{ padding: 4px 0; font-size: 0.8rem; }
    .painel-agendamento{ padding: 10px; }
  }
  
</style>
<script>
const daysGrid = document.getElementById('days-grid');
const monthYear = document.getElementById('month-year');
const containerData = document.getElementById('container-data');
const diaSemana = document.getElementById('dia-semana');

let currentDate = new Date();

// Função principal para gerar o calendário
function renderCalendar() {
  const year = currentDate.getFullYear();
  const month = currentDate.getMonth();

  // Nome do mês
  const monthNames = [
    "Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho",
    "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"
  ];

  monthYear.textContent = `${monthNames[month]} ${year}`;

  // Limpa os dias anteriores
  daysGrid.innerHTML = "";

  const firstDay = new Date(year, month, 1);
  const lastDay = new Date(year, month + 1, 0);
  const startDay = firstDay.getDay();

  // Preenche espaços antes do primeiro dia
  for (let i = 0; i < startDay; i++) {
    const emptyDiv = document.createElement('div');
    emptyDiv.classList.add('dia', 'vazio');
    daysGrid.appendChild(emptyDiv);
  }

  // Adiciona os dias do mês
  for (let day = 1; day <= lastDay.getDate(); day++) {
    const dayElement = document.createElement('div');
    dayElement.classList.add('dia');
    dayElement.innerHTML = `<span class="num">${day}</span>`;

    // Ação ao clicar no dia
    dayElement.addEventListener('click', () => {
      const dataISO = `${year}-${String(month + 1).padStart(2, '0')}-${String(day).padStart(2, '0')}`;
      const dataFormatada = `${String(day).padStart(2, '0')}/${String(month + 1).padStart(2, '0')}/${year}`;

      // Exibe a data no painel lateral
      containerData.textContent = dataFormatada;
      containerData.dataset.fullDate = dataISO;

      const diasSemana = ["Domingo", "Segunda-feira", "Terça-feira", "Quarta-feira", "Quinta-feira", "Sexta-feira", "Sábado"];
      const diaSelecionado = new Date(year, month, day);
      diaSemana.textContent = diasSemana[diaSelecionado.getDay()];
    });

    daysGrid.appendChild(dayElement);
  }
}

// Botões de navegação
function previousMonth() {
  currentDate.setMonth(currentDate.getMonth() - 1);
  renderCalendar();
}

function nextMonth() {
  currentDate.setMonth(currentDate.getMonth() + 1);
  renderCalendar();
}

// Evento para o botão “Selecionar Dia”
document.getElementById('btnSelecionarDia').addEventListener('click', function() {
  const dataSelecionada = containerData.dataset.fullDate;

  if (!dataSelecionada) {
    alert('Selecione uma data no calendário primeiro.');
    return;
  }

  // Redireciona para a listagem de pacientes com a data selecionada
  window.location.href = "<?= base_url('paghome?data=') ?>" + encodeURIComponent(dataSelecionada);
});

// Inicializa o calendário
renderCalendar();
</script>



=======
</style>

<script>
// Pega os elementos
const modal = document.getElementById("modal");
const btnAbrir = document.getElementById("abrirModal");
const btnFechar = document.querySelector(".fechar");

// Abre o modal
btnAbrir.addEventListener("click", () => {
  modal.style.display = "flex";
});

// Fecha o modal
btnFechar.addEventListener("click", () => {
  modal.style.display = "none";
});

// Fecha se clicar fora do conteúdo
window.addEventListener("click", (e) => {
  if (e.target === modal) {
    modal.style.display = "none";
  }
});
</script>

>>>>>>> 8b77ee2d72a2e04167a97232eb6ef5ed11b6d0b7
<script src="<?= base_url('js/inicial.js') ?>"></script>
</body>
</html>

