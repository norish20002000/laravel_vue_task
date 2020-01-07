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
