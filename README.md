Mediawiki-Views
===============

![Views](http://i.imgur.com/mgAvgZG.png)

Views extension for Mediawiki. 
Brings some templating in dev process to separate html and php.

Instead of using inline html blocks in php, just use Views.

Example
=======

- Create folder named **views** in your extension folder.
- Put some php-template in this folder
- Call Views

```php
$html = Views::forge('mytemplate');
```
  
To feed template with some data push array to second parameter:

```php
$data = array( 'a' => 10, 'b' => 'hello' );
$html = Views::forge('mytemplate', $data);
```
  
In this case just use ***$a*** and ***$b*** variables in your template:

```
<div class="hello-div <?=$b?>">
<p> <?=a?> </p>
</div>
```

Thats it!
