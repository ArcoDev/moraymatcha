const {series, src, dest, watch } = require('gulp');
const sass = require('gulp-dart-sass');
const notify = require('gulp-notify');
/*const imgMin = require('gulp-imagemin');
const concat = require('gulp-concat');*/

//Rutas para los archivos compilados
const path = {
    scss: 'src/scss/**/*.scss',
}

//Compilar sass y mandarlo a carpeta de producción
function css() {
    return src(path.scss)
        .pipe(sass())
        .pipe(dest('./build/css'))
        .pipe(notify({message: 'Pasando SASS a CSS'}));
}

//Compilar automaticamente los archivos (sass y js) al guardar los cambios
function watchFile() {
    watch(path.scss, css);
}

//Mandar a llamar las funciones
exports.default = series(css, watchFile);
