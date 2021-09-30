const wine = document.querySelector('.wine');
const line = document.querySelector('.line');

function showWine() {
    wine.classList.remove('d-none');
}

function noneWine() {
    wine.classList.add('d-none');
}

function showLine() {
    line.classList.remove('d-none');
}

function noneLine() {
    line.classList.add('d-none');
}