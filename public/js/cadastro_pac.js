
  const form = document.getElementById('uploadForm');
  const msg = document.getElementById('mensagem');

  form.addEventListener('submit', async function(e) {
    e.preventDefault();

    const formData = new FormData(form);
    msg.textContent = "⏳ Enviando arquivo...";

    const resposta = await fetch('upload.php', {
      method: 'POST',
      body: formData
    });

    const texto = await resposta.text();
    msg.textContent = texto;
  });
