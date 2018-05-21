
# Lumen 5.6
## Micro Framework

- Start serve PHP
$ php -S localhost:8000 -t ./public

- sudo apt-get install php-gd php-mysql
- Ou adicionar o artisan serve

- artesão serve para projetos Lumen

- Instalação
$ composer require mlntn/lumen-artisan-serve "~1"

Adicione a seguinte linha ao array $ comandos em app / Console / Kernel.php:

\Mlntn\Console\Commands\Serve::class,


- Tool: Random String Generator: http://textmechanic.com/text-tools/randomization-tools/random-string-generator/

- Criar uma string com 32 caracteres

- descomentar essas duas linhas abaixo do facades e eloquent, na pasta bootstrap/app.php
		$app->withFacades();

		$app->withEloquent();
- Mudar o namespace na mao. /// OBS:nao mudei o namespace
- O app para CodeAgenda
- E logo em seguida rodar composer update para atualizar namespace

## Coutry Code - Codigos dos paises.
- https://countrycode.org/ 

## migration seeders
- $ composer dump autoload"
- $ php artisan make:migration create_pessoas_tabable --create=pessoas
- $ php artisan make:migration create_telefones_table --create=telefones
- $ php artisan migrate
- $ php artisan make:seeder PessoaTableSeeder
- $ php artisan make:seeder TelefoneTableSeeder
- $ php artisan migrate:refresh
- $ composer update
- $ composer dumpauto
- $ php artisan db:seed


## Vamos Usar Bootstrap, Bower, fontawesome, Laravel Elixir(Icones e css)
- https://fontawesome.com/icons?d=gallery
- https://getbootstrap.com/docs/3.3/components/
- https://laravel.com/docs/5.3/elixir
$ npm install -g bower

- https://github.com/twbs/bootstrap/tree/v3.3.7

- bower.json
``sh
	{
  "name": "CodeAgenda",
  "description": "Renato",
  "main": "",
  "authors": [
    "lucenarenato <cpdrenato@gmail.com>"
  ],
  "license": "MIT",
  "homepage": "",
  "ignore": [
    "**/.*",
    "node_modules",
    "bower_components",
    "vendor/bower_components",
    "test",
    "tests"
  ],
  "dependencies": {
    "bootstrap": "^3.3.5",
    "fontawesome": "^4.4.0",
    "Materialize": "materialize#~0.97.1",
    "jquery": "^3.3.1"
  },
  "private": true
}
``
- $ npm install -g bower
- $ npm install -g gulp
- $ npm install -g laravel-elixir
- $ bower install
- or
- bower install jquery --save
- bower install bootstrap --save
- bower install gulp --save
- bower install fontawesome --save

## no final da configuracao do gulpfile.js rode este comando.
- $ gulp --production

## Documentation for the framework can be found on the [Lumen website](http://lumen.laravel.com/docs).

## License

The Lumen framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
- https://portal.code.education/
- Renato Lucena - 2018