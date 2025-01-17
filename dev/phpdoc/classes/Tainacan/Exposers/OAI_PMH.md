***

# OAI_PMH

Generate a OAI_PMH/oai_dc formated response



* Full name: `\Tainacan\Exposers\OAI_PMH`
* Parent class: [`\Tainacan\Exposers\Exposer`](./Exposer.md)


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`XML_OAI_DC_NAMESPACE`|public| |&quot;http://www.openarchives.org/OAI/2.0/oai_dc/&quot;|

## Properties


### mappers



```php
public $mappers
```






***

### slug



```php
public $slug
```






***

### name



```php
public $name
```






***

## Methods


### rest_request_after_callbacks

Change response after api callbacks

```php
public rest_request_after_callbacks(mixed $response, mixed $handler, mixed $request): \WP_REST_Response
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$response` | **mixed** |  |
| `$handler` | **mixed** |  |
| `$request` | **mixed** |  |



**See Also:**

* \Tainacan\Exposers\Types\Type::rest_request_after_callbacks() - 

***


## Inherited methods


### set_name

Returns i18n exposer name

```php
protected set_name(mixed $name): string
```

Must be implemented by Exposer class






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |




***

### set_description

Sets i18n exposer description

```php
protected set_description(mixed $description): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$description` | **mixed** |  |




***

### get_name

Gets the exposer name

```php
public get_name(): string
```









**Return Value:**

exposer name



***

### get_description

Gets the exposer description

```php
public get_description(): string
```









**Return Value:**

exposer description



***

### _toArray

return exposer object as an array

```php
public _toArray(): array
```











***

### rest_request_after_callbacks

Change response after api callbacks

```php
public rest_request_after_callbacks(\WP_REST_Response $response, \WP_REST_Server $handler, \WP_REST_Request $request): \WP_REST_Response
```




* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$response` | **\WP_REST_Response** |  |
| `$handler` | **\WP_REST_Server** |  |
| `$request` | **\WP_REST_Request** |  |




***

### get_mappers

Return list of supported mappers for this type

```php
public get_mappers(): array
```









**Return Value:**

List of mappers



***


***
> Automatically generated from source code comments on 2023-07-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
