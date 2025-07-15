<!-- header.php -->
<div class="header">
    <label for="file-input" class="image-upload">
        <img id="profile-pic" src="usuario_semfoto" alt="Profile Picture" />
    </label>
    <input type="file" id="file-input" accept="image/*" onchange="previewImage(event)" style="display: none;" />
</div>

<script>
    function previewImage(event) {
        const file = event.target.files[0];
        const reader = new FileReader();
        
        reader.onload = function(e) {
            const img = document.getElementById('profile-pic');
            img.src = e.target.result; // Atualiza a imagem com a nova seleção
        }
        
        if (file) {
            reader.readAsDataURL(file); // Lê a imagem como URL
        }
    }
</script>

<style>
    .header {
        display: flex;
        align-items: center;
        margin: 10px; /* Mantém a formatação original e posiciona no canto superior esquerdo */
    }

    .image-upload {
        cursor: pointer; 
    }

    #profile-pic {
        width: 50px; /* Tamanho do ícone */
        height: 50px; /* Tamanho do ícone */
        border-radius: 50%; /* Torna a imagem redonda */
        object-fit: cover; /* Cobre o espaço do ícone */
        border: 2px solid #007BFF; /* Borda opcional */
    }
</style>
