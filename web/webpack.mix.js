const mix = require('laravel-mix')

mix
.browserSync('127.0.0.1:8000') // ローカルの場合
// mix.browserSync({
//     proxy: '0.0.0.0:8081', // アプリの起動アドレス
//     open: false // ブラウザを自動で開かない
//   })
  .js('resources/js/app.js', 'public/js')
  .version()