// Seleciona os elementos do DOM
const menuBtn = document.getElementById('menu-btn');
const navigation = document.querySelector('.navigation');
const menuIcon = menuBtn.querySelector('i');

// Adiciona o evento de clique ao botão do menu
menuBtn.addEventListener('click', () => {
    // Alterna a classe 'ativo' na navegação. 
    // O CSS cuida da animação e da exibição.
    navigation.classList.toggle('ativo');

    // Verifica se a navegação tem a classe 'ativo' para trocar o ícone
    if (navigation.classList.contains('ativo')) {
        // Se o menu está aberto, muda o ícone para 'X' (times)
        menuIcon.classList.remove('fa-bars');
        menuIcon.classList.add('fa-times');
        menuBtn.setAttribute('aria-label', 'Fechar menu');
    } else {
        // Se o menu está fechado, volta para o ícone de hambúrguer (bars)
        menuIcon.classList.remove('fa-times');
        menuIcon.classList.add('fa-bars');
        menuBtn.setAttribute('aria-label', 'Abrir menu');
    }
});
