const {series, src, dest, watch } = require('gulp');
const sass = require('gulp-dart-sass');
const notify = require('gulp-notify');
/*const imgMin = require('gulp-imagemin');*/
const concat = require('gulp-concat');

//Rutas para los archivos compilados
const path = {
    scss: 'src/scss/**/*.scss',
    js: 'src/js/**/*.js'
}

//Compilar sass y mandarlo a carpeta de producción
function css() {
    return src(path.scss)
        .pipe(sass())
        .pipe(dest('./build/css'))
        .pipe(notify({message: 'Pasando SASS a CSS'}));
}

//Mandar JS a carpeta de producción
function js() {
    return src(path.js)
        .pipe(concat('main.js'))
        .pipe(dest('./build/js'));
}

//Compilar automaticamente los archivos (sass y js) al guardar los cambios
function watchFile() {
    watch(path.scss, css);
    watch(path.js, js);
}

//Mandar a llamar las funciones
exports.default = series(css, js, watchFile);
