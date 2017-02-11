# HtTextar

Produces Textareas.
This is an extension of the [HtTextin](https://github.com/flsouto/httextin) class.

## Installation

Run composer:
```
composer require flsouto/httextar
```


## Usage
By default, the `textar` widget is rendered in writable mode. See example:

```php
<?php
use FlSouto\HtTextar;
require_once('vendor/autoload.php');

$field = new HtTextar('description');
$field->context(['description'=>'This is a very long description']);

echo $field;
```

Outputs:

```html

<div class="widget 589f96dbdf794" style="display:block">
 <textarea name="description" cols="40" rows="4">This is a very long description</textarea>
 <div style="color:yellow;background:red" class="error">
 </div>
</div>

```

### Switch to Readonly

Use the `readonly` method to switch to readonly mode:

```php
use FlSouto\HtTextar;
require_once('vendor/autoload.php');

$field = new HtTextar('description');
$field->readonly();
$field->context(['description'=>'This is a very long description']);

echo $field;
```

Outputs:

```html

<div class="widget 589f96dbe11ec" style="display:block">
 <textarea name="description" cols="40" rows="4" readonly="readonly">This is a very long description</textarea>
 <div style="color:yellow;background:red" class="error">
 </div>
</div>

```

### Setting dimensions of textarea
You can set the `cols` and `rows` attributes by using the respective methods:

```php
use FlSouto\HtTextar;

$field = new HtTextar('description');
$field->cols(80)->rows(10);

echo $field;
```

Outputs:

```html

<div class="widget 589f96dbe171b" style="display:block">
 <textarea name="description" cols="80" rows="10"></textarea>
 <div style="color:yellow;background:red" class="error">
 </div>
</div>

```

**Notice:** this is only a shortcut to calling `$field->attrs(['cols'=>80,'rows'=>10])`


### Alternative syntax for setting dimensions

You can use the `size` method passing a string in the format "COLSxROWS" to set both dimensions in one go:

```php

$field = new HtTextar('description');
$field->size('80x10');

echo $field;
```

Output:

```html

<div class="widget 589f96dbe1c28" style="display:block">
 <textarea name="description" cols="80" rows="10"></textarea>
 <div style="color:yellow;background:red" class="error">
 </div>
</div>

```


To learn more about everything you can do with this widget, please refer to the following documentations:
- [HtTextin](https://github.com/flsouto/httextin)
- [HtWidget](https://github.com/flsouto/htwidget)
- [HtField](https://github.com/flsouto/htfield)