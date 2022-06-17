<div align="center">
    <h1>PHP Laravel</h1>
    <h3>
        <a href="/">
            Live demo
        </a>
        <span> | </span>
        <a href="https://github.com/chriskodehub/KH-15_calculator">
            GitHub
        </a>
    </h3>
    <p>Zadanie domowe - laboratorium</p>
        <br>
        <p>Technologies and tools:</p>
    <p>
        <img src="docs/img/html5.svg" width="40" height="40" alt="html"/>
        <img src="docs/img/css3.svg" width="40" height="40" alt="css"/>
        <img src="docs/img/materialize.svg" width="40" height="40" alt="materialize"/>
        <img src="docs/img/js.svg" width="40" height="40" alt="javascript"/>
        <img src="docs/img/node.svg" width="40" height="40" alt="node"/>
        <img src="docs/img/php.svg" width="40" height="40" alt="php"/>
        <img src="docs/img/laravel.svg" width="40" height="40" alt="laravel"/>
        <img src="docs/img/composer.svg" width="40" height="40" alt="composer"/>
        <br>
        <img src="docs/img/phpstorm.svg" width="40" height="40" alt="phpstorm"/>
        <img src="docs/img/md.svg" width="40" height="40" alt="markdown"/>
        <img src="docs/img/xampp.svg" width="40" height="40" alt="xampp"/>
        <img src="docs/img/apache.svg" width="40" height="40" alt="apache"/>
        <img src="docs/img/mariadb.svg" width="40" height="40" alt="mariadb"/>
        <img src="docs/img/webpack.svg" width="40" height="40" alt="webpack"/>
        <img src="docs/img/git.svg" width="40" height="40" alt="git"/>
        <img src="docs/img/github.svg" width="40" height="40" alt="github"/>
    </p>
</div>
<br>

### POCZĄTKOWA KONFIGURACJA

1. Skonfigurować plik .gitignore dodając wykluczenia dla moich folderów _tmp i _resources
2. Połączyć projekt z GitHub i zrobić `initial commit`
3. `composer self-update` - updatować composer
4. `composer install` - zainstalować wszystkie potrzebne pakiety
5. `composer update` - robi update wszystkich zainstalowanych pakietów
6. `php artisan migrate` - uruchomić migrację

### AUTOMATYCZNE ODŚWIEŻANIE STRONY

1. https://stackoverflow.com/questions/49392001/laravel-project-auto-refresh-after-changes
2. `npm install` - instaluje wszystkie pakiety z pliku package.json
3. `mix.browserSync('127.0.0.1:8000');` - dodać na końcu pliku webpack.mix.js
4. `php artisan serve` - najpierw uruchomić serwer artisan
5. `npm run watch` - po uruchomieniu Webpack za pierwszym razem zostaną zainstalowane potrzebne zależności. Po drugim uruchomieniu wszystko będzie działało.

### JS i CSS KOMPILOWANY ZA POMOCĄ WEBPACK

1. `materialize.js` kompilowany jest do app.js za pomocą Webpack. Szczegóły konfiguracji w pliku `resources\js\app.js`.
2. `materialize.css` kompilowany jest do app.css za pomocą Webpack. Szczegóły konfiguracji w pliku `resources\css\app.css`.
3. `validator.js` kompilowany jest do validator.js za pomocą Webpack.
4. Konfiguracja Webpack w pliku `wepack.mix.js`
5. Najpierw trzeba skonfigurować i odpalić `Automatyczne odświeżanie strony`.

### MVC

<div align="center">
    <img src="docs/img/mvc.png" alt="mvc"/>
</div>
