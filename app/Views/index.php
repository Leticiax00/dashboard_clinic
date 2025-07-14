<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Web Clinic</title>
  <style>
    :root {
      --cor-um: #4361ee; /* Botão nova consulta */
      --cor-dois: #062794; /* Gradiente header */
      --texto: #2b2d42; /* Cor fonte */
      --cor: #f8f9fa; /* Header semana */
      --cor-borda: #bbbcbe; /* Dias fora do mês */
      --fundo-cor: #74bbf4; /* Destaque do dia */
      --fundo-texto: #000; /* Fonte do dia */
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      min-height: 10vh;
      min-width: 100vh;
      justify-content: center;
      align-items: center;
    } 

    .container {
      display: flex;
      gap: 50px;
      align-items: flex-start;
      justify-content: center;
      flex-wrap: wrap;
    }

    
    .cards-container {
      display: flex;
      flex-direction: column;
      gap: 30px;
    }

    .card {
      background: white;
      border-radius: 8px;
      padding: 20px;
      flex: 1;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      min-width: 250px;
    }

    .card h3 {
      color: #7f8c8d;
      margin-bottom: 10px;
      font-size: 1rem;
    }

    .card p {
      font-size: 1.8rem;
      font-weight: bold;
      color: #2c3e50;
    }

    /* Calendário */
    .calendario-container {
      background: white;
      border-radius: 10px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      height: fit-content;
    }

    .painel-agendamento {
      display: none;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      margin-left: 20px;
      width: 300px;
    }

    .painel-agendamento.ativo {
      display: block;
    }

    .button-agendamento {
      background: var(--cor-um);
      color: white;
      border: none;
      padding: 8px 10px;
      border-radius: 5px;
      cursor: pointer;
      font-weight: 600;
      margin-top: 15px;
      justify-content: center;
      display: flex;
    }

    .button-agendamento:hover {
      background: var(--cor-dois);
    }

    .cabecalho-calendario {
      background: linear-gradient(135deg, var(--cor-um), var(--cor-dois));
      color: white;
      padding: 20px;
      text-align: center;
      position: relative;
    }

    .mes-ano {
      font-size: 1.1rem;
      font-weight: 600;
      margin-bottom: 8px;
    }

    .button-nav {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background: rgba(255, 255, 255, 0.2);
      border: none;
      color: white;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      cursor: pointer;
      font-size: 1.2rem;
      display: flex;
      justify-content: center;
      align-items: center;
      transition: all 0.3s ease;
    }

    .button-nav:hover {
      background: rgba(255, 255, 255, 0.3);
    }

    .mes-anterior {
      left: 20px;
    }

    .mes-proximo {
      right: 20px;
    }

    .dias-semana {
      display: grid;
      grid-template-columns: repeat(7, 1fr);
      background-color: var(--cor);
      padding: 10px 0;
      text-align: center;
      font-weight: 600;
      color: var(--texto);
      border-bottom: 1px solid var(--cor-borda);
      width: 100%;
      min-width: 300px;
    }

    .grade-dias {
      display: grid;
      grid-template-columns: repeat(7, 1fr);
      gap: 1px;
      background-color: var(--cor-borda);
    }

    .dia {
      background-color: white;
      aspect-ratio: 1/1;
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
      align-items: center;
      padding: 10px;
      cursor: pointer;
      transition: all 0.2s ease;
      position: relative;
    }

    .dia:hover {
      background-color: #eaeaea;
    }

    .dia.vazio {
      background-color: #dddfe0;
      cursor: default;
    }

    .dia.vazio:hover {
      background-color: #c7c9ca;
    }

    .numero-dia {
      font-size: 0.90rem;
      font-weight: 600;
      margin-bottom: 3px;
    }

    .dia.hoje .numero-dia {
      background-color: var(--fundo-cor);
      color: var(--fundo-texto);
      width: 24px;
      height: 20px;
      border-radius: 50%;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    @media (max-width: 768px) {
      .container {
        flex-direction: column;
        align-items: center;
      }

      .cards-container {
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
      }
    }
    .header {
        display: flex;
        gap: 20px;              /* espaço entre os links */
        margin: 30px 0 0 30px;
    }
    
    .calendario-container h1 {
        display: flex;
        justify-content: center; 
    }
    
    .modal {
  display: none; /* Escondido por padrão */
  position: fixed;
  z-index: 999; /* Fica na frente de tudo */
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto; /* Scroll se necessário */
  background-color: rgba(0,0,0,0.5); /* Fundo escuro semi-transparente */
}

.modal-conteudo {
  background-color: #fff;
  margin: 10% auto; /* Centralizado */
  padding: 20px;
  border: 1px solid #888;
  width: 50%;
  border-radius: 8px;
  box-shadow: 0 2px 10px rgba(0,0,0,0.3);
}

.modal-fechar {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
  cursor: pointer;
}

.modal-fechar:hover {
  color: #000;
}

  </style>
</head>
<body>
    <div class="header">
       <?= view('partials/header') ?>
</div>

  <div class="container">
    <div class="calendario-container">
      <main class="conteudo">
        <div class="painel-agendamento" id="painel-agendamento">
          <h3 id="data-selecionada">Selecione um dia</h3>
          <a href="<?= base_url('paghome')?>" class="button-agendamento">Nova Consulta</a>
          

        </div>
      </main>
      <div class="cabecalho-calendario">
        <button class="button-nav mes-anterior" onclick="previousMonth()">‹</button>
        <div class="mes-ano" id="month-year">Setembro 2023</div>
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
 
      <div class="grade-dias" id="days-grid">
        
      </div>
    </div>

    
    <div class="cards-container">
      <div class="card">
        <h3>Pacientes Hoje</h3>
        <p></p>
      </div>
    </div>
  </div>

  <div class="modal" id="meuModal">
    <div class="modal-conteudo">
      <span class="modal-fechar" id="fecharModal">&times;</span>
      <h2>Título do Modal</h2>
      <p>Este é o conteúdo do modal.</p>
    </div>
  </div>

  <script>
    let currentDate = new Date();
    let currentYear = currentDate.getFullYear();
    let currentMonth = currentDate.getMonth();
    let today = currentDate.getDate();
    let todayMonth = currentMonth;
    let todayYear = currentYear;

  

    function updateCalendar() {
      const monthYearElement = document.getElementById('month-year');
      const daysGridElement = document.getElementById('days-grid');

      const monthNames = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho",
        "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];

      monthYearElement.textContent = `${monthNames[currentMonth]} ${currentYear}`;
      daysGridElement.innerHTML = '';

      const firstDay = new Date(currentYear, currentMonth, 1).getDay();
      const lastDay = new Date(currentYear, currentMonth + 1, 0).getDate();
      const prevLastDay = new Date(currentYear, currentMonth, 0).getDate();

      for (let i = 0; i < firstDay; i++) {
        const dayElement = document.createElement('div');
        dayElement.className = 'dia vazio';
        dayElement.innerHTML = `<div class="numero-dia">${prevLastDay - firstDay + i + 1}</div>`;
        daysGridElement.appendChild(dayElement);
      }

      for (let i = 1; i <= lastDay; i++) {
        const dayElement = document.createElement('div');
        dayElement.className = 'dia';

        if (i === today && currentMonth === todayMonth && currentYear === todayYear) {
          dayElement.classList.add('hoje');
        }

        dayElement.innerHTML = `<div class="numero-dia">${i}</div>`;

        dayElement.addEventListener('click', () => {
          const painel = document.getElementById('painel-agendamento');
          painel.classList.add('ativo');
          document.getElementById('data-selecionada').textContent = `Dia ${i} de ${monthNames[currentMonth]} de ${currentYear}`;
        });

        daysGridElement.appendChild(dayElement);
      }

      const remainingCells = 42 - (firstDay + lastDay);
      for (let i = 1; i <= remainingCells; i++) {
        const dayElement = document.createElement('div');
        dayElement.className = 'dia vazio';
        dayElement.innerHTML = `<div class="numero-dia">${i}</div>`;
        daysGridElement.appendChild(dayElement);
      }
    }

    function previousMonth() {
      currentMonth--;
      if (currentMonth < 0) {
        currentMonth = 11;
        currentYear--;
      }
      updateCalendar();
    }

    function nextMonth() {
      currentMonth++;
      if (currentMonth > 11) {
        currentMonth = 0;
        currentYear++;
      }
      updateCalendar();
    }

    updateCalendar();

    
  </script>

</body>
</html>
