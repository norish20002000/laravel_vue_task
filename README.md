# laravel_vue_task
定番タスク管理作成用
- laravel6.0用のコンテナのみ最小構成です。
- laravel6.0プロジェクト作成済。
- auth済。

## clone後手順
```bash
$ docker-compose exec app docker-compose exec app ash
$ docker-compose exec app composer install
$ docker-compose exec app cp .env.example .env
$ docker-compose exec app php artisan key:generate
$ docker-compose exec app php artisan migrate
$ docker-compose run node npm install
$ docker-compose run node npm run dev
```

## vue周りの開発時
```bash
$ docker-compose run node npm run watch
```

## larave開発
### controller作成
```bash
$ docker-compose exec app php artisan make:controller HogeController
```
### model作成
```bash
$ docker-compose exec app php artisan make:model Hoge
```

### DB migration
#### テーブル作成migrationファイル作成
```bash
$ docker-compose exec app php artisan make:migration create_hoge_table --create=hoge
```
### modelとmigrationファイル作成
```bash 
$ docker-compose exec app php artisan make:model Models/Hoge --migration
```
### テーブル変更migrationファイル作成
```bash
$ docker-compose exec app php artisan make:migration add_items_to_hoge_table --table=hoge
```
### テーブル削除
```bash
$ docker-compose exec app php artisan make:migration drop_user_table
Add this to your migrate file inside up function Schema::dropIfExists('tableName');

$ docker-compose exec app php artisan migrate
```

#### DB migrate 実行
```bash
$ docker-compose exec app php artisan migrate
```
### ルーティングリスト
```bash
$ docker-compose exec app php artisan route:list
```

### テストデータ作成
```bash
$ docker-compose exec app composer dump-autoload
$ docker-compose exec app php artisan db:seed
```