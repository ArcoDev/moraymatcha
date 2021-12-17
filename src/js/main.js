const showGrid = document.getElementById('show-grid');
const gridWine = document.getElementById('grid-wine');

showGrid.addEventListener('mouseover', () => {
    gridWine.classList.add('grid-activo');
})

gridWine.addEventListener('mouseleave', () => {
    gridWine.classList.remove('grid-activo');
})