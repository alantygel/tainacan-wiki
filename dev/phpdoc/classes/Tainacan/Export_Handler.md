***

# Export_Handler





* Full name: `\Tainacan\Export_Handler`



## Properties


### registered_exporters



```php
private $registered_exporters
```






***

## Methods


### __construct



```php
public __construct(): mixed
```











***

### init



```php
public init(): mixed
```











***

### enqueue_scripts



```php
public enqueue_scripts(): mixed
```











***

### register_exporter



```php
public register_exporter(array $exporter): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$exporter` | **array** |  |




***

### add_to_queue



```php
public add_to_queue(\Tainacan\Exporter\Exporter $exporter_object): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$exporter_object` | **\Tainacan\Exporter\Exporter** |  |




***

### unregister_exporter



```php
public unregister_exporter(mixed $slug): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$slug` | **mixed** |  |




***

### get_registered_exporters



```php
public get_registered_exporters(): mixed
```











***

### get_exporter



```php
public get_exporter(mixed $slug): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$slug` | **mixed** |  |




***

### get_exporter_by_object



```php
public get_exporter_by_object(\Tainacan\exporter\Exporter $exporter_object): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$exporter_object` | **\Tainacan\exporter\Exporter** |  |




***

### initialize_exporter



```php
public initialize_exporter(mixed $slug): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$slug` | **mixed** |  |




***

### save_exporter_instance

Save exporter instance to the database

```php
public save_exporter_instance(\Tainacan\Tainacan\Exporter\Exporter $exporter): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$exporter` | **\Tainacan\Tainacan\Exporter\Exporter** | The Importer object |




***

### get_exporter_instance_by_session_id

Retrieves an Importer instance from the database based on its session_id

```php
public get_exporter_instance_by_session_id(string $session_id): \Tainacan\Exporter\Exporter|false
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$session_id` | **string** | The Importer ID |


**Return Value:**

The Importer object, if found. False otherwise



***

### delete_exporter_instance

Deletes this exporter instance from the database

```php
public delete_exporter_instance(\Tainacan\Tainacan\Exporter\Exporter $exporter): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$exporter` | **\Tainacan\Tainacan\Exporter\Exporter** | The Importer object |


**Return Value:**

True, if exporter is successfully deleted. False on failure.



***


***
> Automatically generated from source code comments on 2023-07-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
