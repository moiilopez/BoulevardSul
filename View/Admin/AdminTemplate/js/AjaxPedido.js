
function iniciaAjax() {

    var objetoAjax = false;

    if (window.XMLHttpRequest) {
        objetoAjax = new XMLHttpRequest();
    } else if (window.ActiveXObject) {
        objetoAjax = new ActiveXObject("Msxm12.XMLHTTP");
        if (!objetoAjax) {
            objetoAjax = new ActiveXObject("Microsoft.XMLHTTP");
        }
    } else {
        alert("Lamento, seu navegador não suporta esta aplicação");
    }
    return objetoAjax;
}

function requisitarNuevos(arquivo) {
    var requisicaoAjax = iniciaAjax();
    if (requisicaoAjax) {
        requisicaoAjax.onreadystatechange = function () {
            mostrarNuevos(requisicaoAjax);  //função será definida a seguir
        };
        requisicaoAjax.open("GET", arquivo, true);
        requisicaoAjax.send(null);
    }
}

function mostrarNuevos(requisicaoAjax) {
    if (requisicaoAjax.readyState == 4) {
        if (requisicaoAjax.status == 200 || requisicaoAjax.status == 304) {
            var insere_aqui = document.getElementById("retornoNuevos");
            insere_aqui.innerHTML = requisicaoAjax.responseText;
        } else {
            alert("Problema na comunicação com o servidor");
        }
    }
}

function requisitarProntos(arquivo) {
    var requisicaoAjax = iniciaAjax();
    if (requisicaoAjax) {
        requisicaoAjax.onreadystatechange = function () {
            mostrarProntos(requisicaoAjax);  //função será definida a seguir
        };
        requisicaoAjax.open("GET", arquivo, true);
        requisicaoAjax.send(null);
    }
}

function mostrarProntos(requisicaoAjax) {
    if (requisicaoAjax.readyState == 4) {
        if (requisicaoAjax.status == 200 || requisicaoAjax.status == 304) {
            var insere_aqui = document.getElementById("retornoProntos");
            insere_aqui.innerHTML = requisicaoAjax.responseText;
        } else {
            alert("Problema na comunicação com o servidor");
        }
    }
}

function requisitarEntregados(arquivo) {
    var requisicaoAjax = iniciaAjax();
    if (requisicaoAjax) {
        requisicaoAjax.onreadystatechange = function () {
            mostrarEntregados(requisicaoAjax);  //função será definida a seguir
        };
        requisicaoAjax.open("GET", arquivo, true);
        requisicaoAjax.send(null);
    }
}

function mostrarEntregados(requisicaoAjax) {
    if (requisicaoAjax.readyState == 4) {
        if (requisicaoAjax.status == 200 || requisicaoAjax.status == 304) {
            var insere_aqui = document.getElementById("retornoEntregados");
            insere_aqui.innerHTML = requisicaoAjax.responseText;
        } else {
            alert("Problema na comunicação com o servidor");
        }
    }
}

function requisitarNoticias(arquivo) {
    var requisicaoAjax = iniciaAjax();
    if (requisicaoAjax) {
        requisicaoAjax.onreadystatechange = function () {
            mostraRespostaNoticias(requisicaoAjax);  //função será definida a seguir
        };
        requisicaoAjax.open("GET", arquivo, true);
        requisicaoAjax.send(null);
    }
}

function mostraRespostaNoticias(requisicaoAjax) {
    if (requisicaoAjax.readyState == 4) {
        if (requisicaoAjax.status == 200 || requisicaoAjax.status == 304) {
            var insere_aqui = document.getElementById("noticiasRes");
            insere_aqui.innerHTML = requisicaoAjax.responseText;
        } else {
            alert("Problema na comunicação com o servidor");
        }
    }
}

$('.close-link').click(function () {
    var content = $(this).closest('div.x_panel');
    content.remove();
});

// Collapse ibox function
$('.collapse-link').click(function () {
    var x_panel = $(this).closest('div.x_panel');
    var button = $(this).find('i');
    var content = x_panel.find('div.x_content');
    content.slideToggle(200);
    (x_panel.hasClass('fixed_height_390') ? x_panel.toggleClass('').toggleClass('fixed_height_390') : '');
    (x_panel.hasClass('fixed_height_320') ? x_panel.toggleClass('').toggleClass('fixed_height_320') : '');
    button.toggleClass('fa-chevron-up').toggleClass('fa-chevron-down');
    setTimeout(function () {
        x_panel.resize();
    }, 50);
});