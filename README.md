<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">CS-CART on Yii2(Advanced)</h1>
    <br>
</p>

To do:
1. Починить ЧПУ, сейчас в адресной строке пропадает index.php
2. Сделать нормальные шапку и меню
3. Добавить пагинацию - ОК
4. Сделать шаблон детальной страницы заказа
5. Неправильные статусы заказов в action test - OK
6. Добавить сайдбары для страницы заказов - ОК
7. Добавить стрелки для блока пагинации и поправить этот блок - ОК
8. Сделать background и основные блоки - ОК
9. Сделать индексную страницу
10. Немного подправить сайдбар с поиском
11. Поправить background и основные блоки - ОК
12. Поправить выпадающее меню со статусами заказов
13. Поправить расположение таблицы и ее элементов на orders manage

Documentation is at [docs/guide/README.md](docs/guide/README.md).

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
