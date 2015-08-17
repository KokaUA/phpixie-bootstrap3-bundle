# phpixie-bootstrap3-bundle
bootstrap3 bundle for phpixie3

 1. Bootstrap v3.3.5
 2. jQuery v2.1.4
 3. 16 themes from bootswatch

### Установка
1) Подключаем бандл в проект
```sh
composer require koka/phpixie-bootstrap3-bundle:3.*-dev
```
2) Создать ссылку на web директорию бандла
```sh
cd web/bundles
ln -s ../../vendor/koka/phpixie-bootstrap3-bundle/web bootstrap3Bundle
```
3) Подключить бандл в нашем проекте
```php
// src/Project/Framework/Bundles.php
    protected function buildBundles()
    {
        return array(
            new \Project\App($this->builder),
            new \Bootstrap3Bundle\App($this->builder)
        );
    }
```

### Использование
Подключаем в нашем шаблоне нужную тему, для подлюченния оригинального bootstrap3 используем default
```
<?php  include $this->resolve('bootstrap3Bundle:default');?>
```
И выводим в нужном месте блоки bootstrap-css и bootstrap-js.
Пример стандартного шаблона.
```
<?php  include $this->resolve('bootstrap3Bundle:default');?>
<!DOCTYPE html>
<html>
	<head>
		<title>PHPixie 3.0</title>
		<?php $this->block('bootstrap-css');?>
	</head>
	<body>
        <h1>PHPixie 3.0</h1>
		<?php $this->childContent();?>
		<?php $this->block('bootstrap-js');?>
	</body>
</html>
```