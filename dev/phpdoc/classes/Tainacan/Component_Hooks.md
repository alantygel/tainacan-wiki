***

# Component_Hooks

Class Components_Hooks



* Full name: `\Tainacan\Component_Hooks`



## Properties


### instance



```php
private static $instance
```



* This property is **static**.


***

### registered_component

Stores external component type available to be used in Tainacan

```php
private $registered_component
```






***

## Methods


### get_instance



```php
public static get_instance(): mixed
```



* This method is **static**.







***

### __construct



```php
private __construct(): mixed
```











***

### init



```php
private init(): mixed
```











***

### register_component



```php
public register_component(): mixed
```











***

### register_vuejs_component

Register a new vuejs component

```php
public register_vuejs_component(string $handle, string $script_path, array|string $args = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$handle` | **string** | name of the component. Should be unique. |
| `$script_path` | **string** | path of file component |
| `$args` | **array&#124;string** |  |




***

### get_registered_component

Get a list of all registered component

```php
public get_registered_component(): array
```









**Return Value:**

The list of registered component



***

### get_component

Get one specific component by its slug

```php
public get_component(string $handle): array|false
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$handle` | **string** | Name of the component |


**Return Value:**

The component definition or false if it is not found



***


***
> Automatically generated from source code comments on 2023-07-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
