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
      const dataSelecionada = document.getElementById('container-data');
      const btnAgendamento = document.querySelector('.button-agendamento');
      const selecionada = new Date(currentYear, currentMonth, i);

      dataSelecionada.textContent = `Dia ${i} de ${monthNames[currentMonth]} de ${currentYear}`;

      // Verifica se o dia é anterior ao hoje
      const hoje = new Date(todayYear, todayMonth, today);
      if (selecionada < hoje) {
      alert('Não é possível agendar uma consulta em uma data anterior ao dia de hoje.\nCaso deseje verificar consultar passadas, entre em "Consultas".');
      if (painel) {
        painel.classList.remove('ativo'); // Volta para seleção de data
      }
      } else {
      btnAgendamento.style.pointerEvents = 'auto';
      btnAgendamento.style.opacity = '1';
      
      const mensagemErro = painel.querySelector('span');
      if (mensagemErro) mensagemErro.remove();
      }
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
