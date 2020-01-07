# docker_laravel_nginx_node

- laravel6.0用のコンテナのみ最小構成です。
- laravel6.0プロジェクト作成済。
- auth済。

## clone後手順
```bash
[mac] $ docker-compose exec app ash
[app] $ composer install
[app] $ cp .env.example .env
[app] $ php artisan key:generate
```
