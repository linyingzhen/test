fis.match('::packager', {
    spriter: fis.plugin('csssprites')
});

// fis.match('*', {
//   useHash: true
// });

fis.match('*.{js,css,png,gif}', {
    useHash: true // 开启 md5 戳
});

// 所有的 js
fis.match('js/*.js', {
    //发布到/static/js/xxx目录下
    release: '/$0'
});

// 所有的 css
fis.match('css/*.css', {
    //发布到/static/css/xxx目录下
    release: '/$0'
});

// 所有image目录下的.png，.gif文件
fis.match('images/(*.{png,gif})', {
    //发布到/static/pic/xxx目录下
    release: '/images/$1$2'
});

fis.match('*.js', {
    optimizer: fis.plugin('uglify-js')
});

fis.match('*.css', {
    useSprite: true,
    optimizer: fis.plugin('clean-css')
});

fis.match('*.png', {
    optimizer: fis.plugin('png-compressor')
});


fis.media('debug').match('*.{js,css,png}', {
    useHash: false,
    useSprite: false,
    optimizer: null
})


fis.media('qa').match('*', {
    deploy: fis.plugin('http-push', {
        receiver: 'http://www.o2ofh.com/receiver.php',
        to: './test' // 注意这个是指的是测试机器的路径，而非本地机器
    })
});

//启用插件 
fis.hook('relative');
//让所有文件，都使用相对路径。 
fis.match('**', { relative: true })
