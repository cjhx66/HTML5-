var gulp = require('gulp');
var concat = require('gulp-concat');                    //- 多个文件合并为一个；
var minifyCss = require('gulp-minify-css');               //- 压缩CSS为一行；
var rev = require('gulp-rev');                          //- 对文件名加MD5后缀
var revCollector = require('gulp-rev-collector');           //- 路径替换

gulp.task('concat',function () {
        gulp.pipe(minifyCss())                         //- 压缩处理成一行
        .pipe(rev())                              //- 文件名加MD5后缀
        .pipe(gulp.dest('css/'))                //- 输出文件本地
        .pipe(rev.manifest())                     //- 生成一个rev-manifest.json
        .pipe(gulp.dest('./rev'));
});
gulp.task('rev', function() {
    gulp.src(['./rev/*.json', './src/*.html'])
    //- 读取 rev-manifest.json 文件以及需要进行css名替换的文件
        .pipe(revCollector())
        //- 执行文件内css名的替换
        .pipe(gulp.dest('./'));
    //- 替换后的文件输出的目录
});
gulp.task('default', ['concat', 'rev']);