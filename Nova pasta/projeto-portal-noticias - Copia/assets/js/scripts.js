// Lightbox
document.querySelectorAll('.gallery-btn').forEach(btn => {
    btn.addEventListener('click', function() {
        const imgSrc = this.closest('.gallery-item').querySelector('img').src;
        const lightbox = document.querySelector('.gallery-lightbox');
        const expandedImg = document.getElementById('expandedImg');
        
        expandedImg.src = imgSrc;
        lightbox.style.display = 'block';
    });
});

// Fechar Lightbox
document.querySelector('.close-btn').addEventListener('click', () => {
    document.querySelector('.gallery-lightbox').style.display = 'none';
});

// Matrix Effect
const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789@#$%&*';
const matrixContainer = document.querySelector('.matrix-effect');

function createMatrix() {
    matrixContainer.innerHTML = '';
    const columns = Math.floor(window.innerWidth / 30);

    for(let i = 0; i < columns; i++) {
        const code = document.createElement('div');
        code.className = 'matrix-code';
        code.style.left = `${(i * 100) / columns}%`;
        code.style.animationDelay = `${Math.random() * 5000}ms`;
        
        code.innerHTML = Array(50).fill().map(() => 
            characters.charAt(Math.floor(Math.random() * characters.length)) + '<br>'
        ).join('');
        
        matrixContainer.appendChild(code);
    }
}

window.addEventListener('resize', createMatrix);
createMatrix();