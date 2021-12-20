// FUNCIONALIDAD SUBNAV GRID
// const showGrid = document.getElementById('show-grid');
// const gridWine = document.getElementById('grid-wine');

// showGrid.addEventListener('mouseover', () => {
//     gridWine.classList.add('grid-activo');
// });

// gridWine.addEventListener('mouseleave', () => {
//     gridWine.classList.remove('grid-activo');
// });

// FUNCIONALIDAD NAVEGATION MOBILE
const navMov = document.getElementById('nav-mov');
const links = document.querySelector('.links');

navMov.addEventListener('click', () => {
    links.classList.toggle('links-activo');
});

// FUNCIONALIDAD ICON SEARCH
const search = document.querySelector('.user');
const inputSrc = document.getElementById('search');
const navMora = document.querySelector('.nav-mora');
search.addEventListener('click', () => {
    inputSrc.style.display = "block";
    navMora.style.paddingBottom = "5rem";
});