 Aplikasi ini merupakan backend dan frontend yang saya buat pada sesi tes FS di Sharing Vision. Aplikasi ini saya buat menggunakan Framework Yii2. Berikut alur dalam menjalankan aplikasi :
 1. Database terletak di dalam source code ini, dengan nama svshindy.sql
 2. Untuk menjalankan aplikasi dengan mengakses link localhost/svshindy maka akan lansung diarahkan ke bagian frontend aplikasi
 3. Pada header aplikasi akan ada menu "LOGIN" digunakan untuk mengakses bagian backend aplikasi
 4. Username dan password dari aplikasi ini untuk login ke bagian backend adalah
    Username : admin
    Password : 040812

DIRECTORY STRUCTURE
-------------------

```
common
    config/              contains shared configurations
    mail/                contains view files for e-mails
    models/              contains model classes used in both backend and frontend
    tests/               contains tests for common classes    
console
    config/              contains console configurations
    controllers/         contains console controllers (commands)
    migrations/          contains database migrations
    models/              contains console-specific model classes
    runtime/             contains files generated during runtime
backend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains backend configurations
    controllers/         contains Web controller classes
    models/              contains backend-specific model classes
    runtime/             contains files generated during runtime
    tests/               contains tests for backend application    
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
frontend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains frontend configurations
    controllers/         contains Web controller classes
    models/              contains frontend-specific model classes
    runtime/             contains files generated during runtime
    tests/               contains tests for frontend application
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
    widgets/             contains frontend widgets
vendor/                  contains dependent 3rd-party packages
environments/            contains environment-based overrides
```
