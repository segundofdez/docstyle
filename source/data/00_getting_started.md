## Getting Started
Welcome to style guide basic template. The purpose of this project is to offer a simple layout to make style guides or simple documentations using markdown files.

### Install
1. Download de latest version of Styleguide
2. composer install
3. bower install
4. npm install

### Configure
You can configure some parameters like sitename, lang, description... in **public/index.php**. Also you can configure your .md files routes.

```php
$data = [

    'home' => $home,
    'lang' => 'en',
    'title' => 'Style Guide',
    'description' => 'Basic template for styleguides or documentation',
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
### Start
Add your markdow files to **source/data**.
If you need a diferent skin, you can modify the styles in **source/styles**.

Run php on localhost
```bash
cd styleguide
php -S localhost:8888 -t public
```

### Gulp

Watch changes on .js and .less files:
```bash
gulp watch
```

Generate static html from php files:
```bash
gulp static
```

Compile styles to css:
```bash
gulp less
```

Minimize js:
```bash
gulp js
```

