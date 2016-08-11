#docstyle
Welcome to docstyle basic template. The purpose of this project is to offer a simple layout to make style guides or simple documentations using markdown files.

![Docstyle logo](https://github.com/segundofdez/docstyle/blob/4e2f205daa311d718fa5326d3d7b3b5962c7df17/public/img/logo.png)

## Install
1. Download de latest version of docstyle
2. composer install
3. bower install
4. npm install

## Configure
You can configure some parameters like sitename, lang, description... in **public/index.php**. Also you can configure your .md files routes.

```php
$data = [

    'home' => $home,
    'lang' => 'en',
    'title' => 'docstyle',
    'description' => 'Basic template for styleguides or documentations using markdown',
    'version' => '1.0.0',
    'getting_started' => $parse->text( file_get_contents( $data_dir . '00_getting_started.md') ),

];
```

Add the routes in your template **source/templates**
```html
[...]
<nav class="nav">
    <ul>
        <li><a href="#getting-started">Getting Started</a></li>
    </ul>
</nav>
[...]
<div id="getting-started">
    <?php echo $getting_started; ?>
</div>
[...]
```
## Start
Add your markdow files to **source/data**.
If you need a diferent skin, you can modify the styles in **source/styles**.

## Gulp

Start a php server, browser-sync, watch changes on .less, .php, .md and .js:
```bash
gulp connect
```

Compile, minified and autoprefix styles to css:
```bash
gulp less
```

Minimize js:
```bash
gulp js
```

Generate static html from php files:
```bash
gulp static
```

## Contributing

Please see [CONTRIBUTING](https://github.com/segundofdez/docstyle/blob/master/CONTRIBUTING.md) for details.


## Creators

**Segundo Fdez**

- <http://segundofdez.com>
- <https://twitter.com/segundo_fdez>


**Contributors**
- <https://github.com/segundofdez/docstyle/graphs/contributors>


## License
Copyright (c) 2016 Segundo Fdez (http://segundofdez.com) Code released under the [the MIT license](https://github.com/segundofdez/docstyle/blob/master/LICENSE.md)

