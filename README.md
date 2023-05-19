Cara sambungin github:
1. cd ke folder yg mau ditaruh files dari github
2. git clone https://github.com/kevincw456/CinemaBooking.git
3. pindah ke branch yg di mau pake git checkout branchnamenyaini

Cara push klo ush sambung ke repo:
1. check klo branch benar: git branch
2. git add .
3. git commit -m "message"
4. git push origin Dashboard
5. Note that if you have uncommitted changes in your local repository, Git may refuse to pull changes from the remote repository until you either commit or discard those changes. In this case, you can use the git stash command to temporarily save your changes before pulling, and then use the git stash apply command to restore them after the pull is complete.
Cara pull dari github:
1. check klo branch benar: git branch
2. git pull

Before running cineverse:
1. type di terminal composer install
2. set .env nya (HARUS!!)
3. download node js
4. cd folder laravel
5. type npm install
6. type npm run dev
7. open new terminal and cd folder laravel
8. type php artisan serve

How to set mysql:
1. set env ganti nama db aja
2. To create table type php artisan make:model -mc
type nama table trs enter
3. Open database/migration folder di laravel
4. Cari yg create_tablename open file trs create table nya
5. Type in terminal php artisan migrate -> auto create table di phpmyadmin yeay:)
