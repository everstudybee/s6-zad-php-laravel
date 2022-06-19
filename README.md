<div align="center">
    <h1>PHP Laravel</h1>
    <h3>
        <a href="#">
            Live demo
        </a>
        <span> | </span>
        <a href="https://github.com/everstudybee/s6-zad-php-laravel">
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

Po pobraniu projektu z GitHub

1. Polecenia wydajemy w terminalu w folderze projektu
2. `composer self-update` - updatuj composer, jeśli jest nowsza wersja
3. `composer install` - zainstaluj wszystkie potrzebne pakiety z pliku composer.json, zostanie utworzony folder vendor ze wszystkimi pakietami
4. `composer update` - zrób update wszystkich zainstalowanych pakietów
5. Konfiguracja `charset` i `collation` w pliku `config/database.php`
6. Zamień nazwę pliku `.env.example` na `.env`
7. `php artisan key:generate` - wygeneruj unikalny klucz aplikacji (NIEZBĘDNY KROK), będzie on zapisany w pliku .env
8. `Konfiguracja podłączenia do bazy danych`. W pliku `.env` pozycja `B_DATABASE=` podaj nazwę bazy danych i ewentualnie skonfiguruj inne parametry takie jak IP, PORT, USER i PASSWORD.
9. `Utwórz pustą bazę danych` o ustalonej w punkcie `8.` nazwie i collation ustawionym w punkcie `5.` collation
10. `php artisan migrate` - uruchom migrację, komenda utworzy [1] tablicę zawierającą dane, [2] tablicę z informacjami o migracjach, [3] tablicę zawierającą osobiste tokeny
11. `php artisan db:seed` - wgraj dane testowe do bazy danych
12. `npm install` - zainstaluj pakiety node z pliku package.json, są potrzebne w dalszej konfiguracji, zostanie utworzony folder node_modules ze wszystkimi pakietami

### AUTOMATYCZNE ODŚWIEŻANIE STRONY

1. https://stackoverflow.com/questions/49392001/laravel-project-auto-refresh-after-changes
2. `mix.browserSync('127.0.0.1:8000');` - dodać na końcu pliku webpack.mix.js na końcu
3. `php artisan serve` - najpierw uruchomić serwer artisan
4. `npm run watch` - po uruchomieniu Webpack za pierwszym razem zostaną zainstalowane potrzebne zależności. Po drugim uruchomieniu wszystko będzie działało.

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
