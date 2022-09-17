const gulp = require("gulp")
const sass = require("gulp-sass")(require("sass"))

function buildStyles() {
    return gulp
        .src("./wp-content/themes/coffeeluck-child/sass/*.scss")
        .pipe(
            sass.sync({ outputStyle: "compressed" }).on("error", sass.logError)
        )
        .pipe(gulp.dest("./wp-content/themes/coffeeluck-child/css"))
}

exports.buildStyles = buildStyles

exports.watch = function () {
    gulp.watch(".wp-content/themes/coffeeluck-child/sass/*.scss", ["sass"])
}

function defaultTask() {
    return buildStyles()
}

exports.default = defaultTask

