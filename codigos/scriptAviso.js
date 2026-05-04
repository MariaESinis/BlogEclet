// Função para fechar o aviso
function fecharAviso() {
    var overlay = document.getElementById("overlay");
    overlay.style.display = "none";
}

// Verificar se o aviso já foi mostrado
if (!localStorage.getItem("avisoMostrado")) {
    var overlay = document.getElementById("overlay");
    overlay.style.display = "flex";
}

// Marcar o aviso como mostrado
localStorage.setItem("avisoMostrado", "true");