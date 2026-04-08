@echo off
cd /d C:\cursoIA\02laravel\back
php artisan migrate:fresh --seed
pause
