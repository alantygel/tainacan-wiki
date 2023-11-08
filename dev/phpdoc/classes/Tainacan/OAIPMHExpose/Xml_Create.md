***

# Xml_Create

A wraper of DOMDocument for data provider



* Full name: `\Tainacan\OAIPMHExpose\Xml_Create`



## Properties


### doc



```php
public $doc
```






***

## Methods


### __construct

Constructs an Xml_Create object.

```php
public __construct( $par_array): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$par_array` | **** | Type: array.<br />  Array of request parameters for creating an ANDS_XML object.<br />\see create_request. |




***

### addChild

Add a child node to a parent node on a XML Doc: a worker function.

```php
public addChild( $mom_node,  $name,  $value = &#039;&#039;): \Tainacan\OAIPMHExpose\DOMElement
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$mom_node` | **** | Type: DOMNode. The target node. |
| `$name` | **** | Type: string. The name of child nade is being added |
| `$value` | **** | Type: string. Text for the adding node if it is a text node. |


**Return Value:**

$added_node
The newly created node, can be used for further expansion.
If no further expansion is expected, return value can be igored.



***

### addChildDC

Add a child node to a parent node on a XML Doc: a worker function.

```php
public addChildDC( $mom_node,  $name,  $value = &#039;&#039;): \Tainacan\OAIPMHExpose\DOMElement
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$mom_node` | **** | Type: DOMNode. The target node. |
| `$name` | **** | Type: string. The name of child nade is being added |
| `$value` | **** | Type: string. Text for the adding node if it is a text node. |


**Return Value:**

$added_node
The newly created node, can be used for further expansion.
If no further expansion is expected, return value can be igored.



***

### create_request

Create an OAI request node.

```php
public create_request( $par_array): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$par_array` | **** | Type: array<br />  The attributes of a request node. They describe the verb of the request and other associated parameters used in the request.<br />Keys of the array define attributes, and values are their content. |




***

### display

Display a doc in a readable, well-formatted way for display or saving

```php
public display(): mixed
```











***


***
> Automatically generated from source code comments on 2023-07-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)