# Slim

## Instalando

### Projeto já iniciado

    $ git clone https://github.com/kenji-tabata/slim.git
    $ cd slim
    $ composer install


## Executando

    $ php -S localhost:8000 -t public public/index.php


## Arquivos estáticos

Todos os arquivos estáticos devem ficar na pasta web

No arquivo app.php adicione o código abaixo para o servidor embutido localizar os arquivos estáticos

    if (PHP_SAPI == 'cli-server') {
        // To help the built-in PHP dev server, check if the request was actually for
        // something which should probably be served as a static file
        $url  = parse_url($_SERVER['REQUEST_URI']);
        $file = __DIR__ . $url['path'];
        if (is_file($file)) {
            return false;
        }
    }

