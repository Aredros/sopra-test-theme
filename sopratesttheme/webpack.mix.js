const mix = require('laravel-mix');

mix.js('src/dist/app.js','dist')
.sass('src/dist/app.scss', 'dist')
.sass('src/dist/slides/multi-slide-styles.scss', 'dist')
.sass('src/dist/components/header.scss', 'dist')
.sass('src/dist/components/footer.scss', 'dist')
.sass('src/dist/components/posts-carousels.scss', 'dist')
.sass('src/dist/components/videos-carousel.scss', 'dist')
.setPublicPath('dist');