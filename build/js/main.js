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
    links.classList.toggle('activo');
});

links.addEventListener('click', () => {
    links.classList.remove('activo');
})

// FUNCIONALIDAD ICON SEARCH
const search = document.getElementById('icon-search');
const inputSrc = document.getElementById('search');
const navMora = document.querySelector('.nav-mora');
const closeSearch = document.getElementById('close-search');

search.addEventListener('click', () => {
    inputSrc.style.display = "block";
    navMora.style.paddingBottom = "5rem";
    closeSearch.classList.add('active-close');
});

closeSearch.addEventListener('click', () => {
    inputSrc.style.display = "none";
    navMora.style.paddingBottom = "2.5rem";
    closeSearch.classList.remove('active-close');
});