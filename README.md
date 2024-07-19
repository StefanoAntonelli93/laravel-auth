Esercizio di oggi: _Laravel Boolfolio - Base_
nome repo: laravel-auth
Ciao ragazzi,
creiamo con Laravel il nostro sistema di gestione del nostro Portfolio di progetti.
Oggi iniziamo un nuovo progetto che si arricchirà nel corso delle prossime lezioni: man mano aggiungeremo funzionalità e vedremo la nostra applicazione crescere ed evolvere.
Nel pomeriggio, rifate ciò che abbiamo visto insieme stamattina stilando tutto a vostro piacere utilizzando SASS.
Descrizione:
Ripercorriamo gli steps fatti a lezione ed iniziamo un nuovo progetto usando laravel breeze per utilizzare il sistema di autenticazione.
Trovate sulla mia repo github il progetto con tutte le indicazioni per creare un vostro template, partendo da un progetto laravel 10 pulito:
Seguite le istruzioni del README:
https://github.com/taniot/laravel-auth-classe126Iniziamo con il definire il layout, modello, migrazione, controller e rotte necessarie per il sistema portfolio:

1. Autenticazione: si parte con l'autenticazione e la creazione di un layout per back-office [x] (view\admin)
2. Creazione del modello Project con relativa migrazione, seeder, controller e rotte [x] (php artisan make:model -help(cmsrR))

_Bonus_
Per la parte di back-office creiamo un resource controller Admin\ProjectController per gestire tutte le operazioni CRUD dei progetti [x]
Implementiamo la validazione dei dati dei Progetti nelle operazioni CRUD che lo richiedono usando due form requests.

# Laravel Auth Template

```
composer create-project laravel/laravel:^10.0 nomeprogetto
```

# Installazione breeze

```
composer require laravel/breeze --dev
```

# Scaffold dell'autenticazione breeze/blade

```
php artisan breeze:install
```

-   Which Breeze stack would you like to install? Blade with Alpine
-   Would you like dark mode support? Yes
-   Which testing framework do you prefer? PHPUnit

## Eseguire i passaggi per installare bootstrap invece di tailwind

```
npm remove postcss
npm remove tailwindcss
npm i --save-dev sass
npm i --save bootstrap @popperjs/core
```

Cancellare il file tailwind.config.js e postcss.config.js

```
rm tailwind.config.js
rm postcss.config.js
```

Rinominiamo la cartella css in scss

```
mv resources/css resources/scss
```

ed il file app.css in app.scss

```
mv resources/scss/app.css  resources/scss/app.scss
```

## Nel file app.scss

Cancelliamo gli import di tailwind dal file app.scss e inseriamo:

```
@import "~bootstrap/scss/bootstrap";
```

## Nel file vite.config.js

-   modifichiamo il percorso del css
-   aggiungiamo un alias per resources e per il bootstrap

```
import path from 'path';

resolve: {
        alias: {
            '~resources': '/resources/',
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap')
        }
    },
```

## Nel file app.js

-   togliere il codice che imposta alpine, lasciando solo la prima riga
-   importare app.css, bootstrap e img

```
import '~resources/scss/app.scss'
import * as bootstrap from 'bootstrap'
import.meta.glob([
    '../img/**'
])
```

## Inserire le views con bootstrap

Cancellare tutti i file di default dalla cartella views e inserire i file presenti in questa repo

## Partenza

1. installare le dipendenze di npm e composer
2. inserire dati nel file .env
3. far partire le migrations
4. avviare il server (php e node)

Buon lavoro!
