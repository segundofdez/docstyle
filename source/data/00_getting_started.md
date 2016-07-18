## Getting Started
Welcome to style guide basic template. The purpose of this project is to offer a simple layout to make style guides using markdown files.

### How to use
1. Download de last version of Styleguide Template
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

### Start
Add your markdow files to **source/data**.
If you need a diferent skin, you can modify the styles in **source/styles**.

