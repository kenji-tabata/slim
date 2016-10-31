# Slim

## Instalando

### Projeto já iniciado

    $ git clone https://github.com/kenji-tabata/slim.git
    $ cd slim
    $ composer install



### Projeto completo

    $ composer create-project slim/slim-skeleton slim
    $ cd slim



### Somente o pacote inicial do Slim

    $ mkdir slim
    $ cd slim
    $ composer require slim/slim "^3.0"


## Executando

    $ php -S localhost:8000 -t public public/index.php



## Exemplos para estrutura de arquivos do Slim:

Retirado do Blog Slim:

http://www.slimframework.com/2011/09/24/how-to-organize-a-large-slim-framework-application.html

    public_html/
        .htaccess
        index.php
        styles/
        images/
        scripts/
    app/
        routes/
            session.php
            member.php
            admin.php
        vendor/
        lib/
        data/


Do Create Project:

    logs/
    public/
        css/
        js/
        .htaccess
        index.php
    src/
        dependencies.php
        middleware.php
        routes.php
        settings.php
    templates/
        index.phtml
    tests/
    vendor/