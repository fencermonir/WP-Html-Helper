# WP Html Helper
The WP HTML Helper contains functions that assist in working with HTML

# Example use
include wp-html-helper.php file in your theme or plugin.

<div class="image">
	img_tag(
		array(
			'url' 	 => '',  // 
			'alt' 	 => '',
			'class'  => '',
			'id' 	 => '',
			'width'  => '',
			'height' => '',
			'srcset' => ''
		)
	);
</div>


# Available Functions:

### The following functions are available:

## Create HTML img tags
```php
img_tag(
	array(
		'url' 	 => '',
		'alt' 	 => '',
		'class'  => '',
		'id' 	 => '',
		'width'  => '',
		'height' => '',
		'srcset' => ''
	)
);

```
## Create HTML anchor tags
```php
anchor_tag(
	array(
		'url' 	 => '',
		'text' 	 => '',
		'target' => '',
		'class'  => '',
		'id' 	 => '',
	)
);

```
## Create HTML heading tags
```php
heading_tag(
	array(
		'tag' 	 => '',
		'text' 	 => '',
		'class'  => '',
		'id' 	 => '',
	)
);

```
## Create HTML paragraph tags
```php
paragraph_tag(
	array(
		'text' 	 => '',
		'class'  => '',
		'id' 	 => '',
	)
);

```
