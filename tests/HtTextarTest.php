<?php

use PHPUnit\Framework\TestCase;

#mdx:h use
use FlSouto\HtTextar;

#mdx:h al
require_once('vendor/autoload.php');

/* 
# HtTextar

Produces Textareas.
This is an extension of the [HtTextin](https://github.com/flsouto/httextin) class.

## Installation

Run composer:
```
composer require flsouto/httextar
```

*/
class HtTextarTest extends TestCase{

/*
## Usage
By default, the `textar` widget is rendered in writable mode. See example:

#mdx:Writable

Outputs:

#mdx:Writable -o httidy
*/
	function testWritable(){
		#mdx:Writable
		$field = new HtTextar('description');
		$field->context(['description'=>'This is a very long description']);
		#/mdx echo $field
		$this->expectOutputRegex('/textarea.+This is a very long description.+textarea/');
		echo $field;
	}

/*
### Switch to Readonly

Use the `readonly` method to switch to readonly mode:

#mdx:Readonly -php

Outputs:

#mdx:Readonly -o httidy
*/
	function testReadonly(){
		#mdx:Readonly
		$field = new HtTextar('description');
		$field->readonly();
		$field->context(['description'=>'This is a very long description']);
		#/mdx echo $field
		$this->expectOutputRegex('/textarea.+readonly.+This is/');
		echo $field;
	}

/*
### Setting dimensions of textarea
You can set the `cols` and `rows` attributes by using the respective methods:

#mdx:ColsAndRows -php -h:al

Outputs:

#mdx:ColsAndRows -o httidy

**Notice:** this is only a shortcut to calling `$field->attrs(['cols'=>80,'rows'=>10])`

*/
	function testColsAndRows(){
		#mdx:ColsAndRows
		$field = new HtTextar('description');
		$field->cols(80)->rows(10);
		#/mdx echo $field
		$this->assertContains('cols="80"',"$field");
		$this->assertContains('rows="10"',"$field");
	}

/*
### Alternative syntax for setting dimensions

You can use the `size` method passing a string in the format "COLSxROWS" to set both dimensions in one go:

#mdx:size -php -h:al,use

Output:

#mdx:size -o httidy

*/
	function testSize(){
		#mdx:size
		$field = new HtTextar('description');
		$field->size('80x10');
		#/mdx echo $field
		$this->assertContains('cols="80"',"$field");
		$this->assertContains('rows="10"',"$field");
	}


}
/*
To learn more about everything you can do with this widget, please refer to the following documentations:
- [HtTextin](https://github.com/flsouto/httextin)
- [HtWidget](https://github.com/flsouto/htwidget)
- [HtField](https://github.com/flsouto/htfield)
*/