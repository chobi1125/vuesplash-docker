### VueSplash

参考リポジトリ
https://github.com/MasahiroHarada/vuesplash-6

バージョンを指定しないとドキュメント通りに進められないので注意！！
```
composer create-project "laravel/laravel=6.*" .
```
## 覚書
サーバーの接続
http://0.0.0.0:8081/

DBへの接続(Docker用)
```
DB_CONNECTION=pgsql
DB_HOST=vuesplash_database
DB_PORT=5432
DB_DATABASE=postgres
DB_USERNAME=postgres
DB_PASSWORD=secret
```