const { src, dest, watch } = require("gulp");
const sass = require("gulp-sass")(require("sass"));

function css(done) {
    src('src/sass/**/*.sass')// identifiar el archivo sass
        .pipe(sass())// compilarlo 
        .pipe(dest('build/css'));// almacenar en disco duro

    done(); 
}

function dev(done) {
    watch("src/sass/**/*.sass", css);
    done();
}

exports.css = css;
exports.dev = dev;