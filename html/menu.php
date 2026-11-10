<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Menu Lateral</title>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
    background: #f4f4f4;
}

/* MENU LATERAL */
.sidebar {
    position: fixed;
    left: 0;
    top: 0;
    width: 250px;
    height: 100vh;
    background: #ffffff;
    box-shadow: 2px 0 10px #00000015;
    transition: 0.3s;
    z-index: 1000;
}

.logo {
    background: #d71920;
    color: white;
    padding: 25px 20px;
    font-size: 22px;
    font-weight: bold;
    text-align: center;
}

.menu {
    padding: 20px 10px;
}

.menu a {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 15px;
    margin-bottom: 8px;
    text-decoration: none;
    color: #333;
    border-radius: 8px;
    transition: 0.3s;
}

.menu a:hover,
.menu a.active {
    background: #d71920;
    color: white;
}

.menu a span {
    font-size: 18px;
}

/* CONTEÚDO */
.content {
    margin-left: 250px;
    padding: 30px;
    transition: 0.3s;
}

.topbar {
    background: white;
    padding: 18px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    gap: 15px;
    box-shadow: 0 2px 8px #00000010;
}

button {
    background: #d71920;
    color: white;
    border: none;
    padding: 10px 15px;
    border-radius: 6px;
    cursor: pointer;
    font-size: 18px;
}

.card {
    background: white;
    margin-top: 25px;
    padding: 25px;
    border-radius: 10px;
    box-shadow: 0 2px 8px #00000010;
}

/* MENU RECOLHIDO */
.sidebar.fechado {
    width: 75px;
}

.sidebar.fechado .logo {
    font-size: 0;
}

.sidebar.fechado .logo::after {
    content: "M";
    font-size: 22px;
}

.sidebar.fechado .menu a {
    justify-content: center;
    font-size: 0;
}

.sidebar.fechado .menu a span {
    font-size: 20px;
}

.content.expandido {
    margin-left: 75px;
}

/* CELULAR */
@media (max-width: 768px) {
    .sidebar {
        width: 250px;
        transform: translateX(-100%);
    }

    .sidebar.aberto {
        transform: translateX(0);
    }

    .content {
        margin-left: 0;
    }

    .content.expandido {
        margin-left: 0;
    }
}
</style>
</head>

<body>

<!-- MENU -->
<aside class="sidebar" id="sidebar">

    <div class="logo">MINHA MARCA</div>

    <nav class="menu">
        <a href="index.php" class="active">
            <span>🏠</span> Início
        </a>

        <a href="sobre.php">
            <span>👥</span> Sobre nós
        </a>

        <a href="listamed.php">
            <span>💼</span> Medicamento
        </a>

        <a href="#contato">
            <span>📩</span> Contato
        </a>

        <a href="#configuracoes">
            <span>⚙️</span> Configurações
        </a>
    </nav>

</aside>

<!-- CONTEÚDO -->
<main class="content" id="content">

    <header class="topbar">
        <button onclick="alternarMenu()">☰</button>
        <h2>Meu Site</h2>
    </header>

    <section class="card" id="inicio">
        <h1>Bem-vindo!</h1>
        <p>Este é o conteúdo principal do seu site.</p>
    </section>

    <section class="card" id="sobre">
        <h2>Sobre nós</h2>
        <p>Conheça nossa história.</p>
    </section>

    <section class="card" id="servicos">
        <h2>Serviços</h2>
        <p>Confira nossos serviços.</p>
    </section>

    <section class="card" id="portfolio">
        <h2>Portfólio</h2>
        <p>Veja nossos trabalhos.</p>
    </section>

    <section class="card" id="contato">
        <h2>Contato</h2>
        <p>Entre em contato conosco.</p>
    </section>

</main>

<script>
function alternarMenu() {
    const sidebar = document.getElementById("sidebar");
    const content = document.getElementById("content");

    if (window.innerWidth <= 768) {
        sidebar.classList.toggle("aberto");
    } else {
        sidebar.classList.toggle("fechado");
        content.classList.toggle("expandido");
    }
}

// Destacar item selecionado
document.querySelectorAll(".menu a").forEach(link => {
    link.addEventListener("click", function() {
        document.querySelectorAll(".menu a").forEach(item => {
            item.classList.remove("active");
        });

        this.classList.add("active");

        if (window.innerWidth <= 768) {
            document.getElementById("sidebar")
                .classList.remove("aberto");
        }
    });
});
</script>

</body>
</html>