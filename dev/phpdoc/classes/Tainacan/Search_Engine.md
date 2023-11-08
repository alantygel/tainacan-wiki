***

# Search_Engine





* Full name: `\Tainacan\Search_Engine`



## Properties


### logging



```php
public $logging
```






***

### options



```php
public $options
```






***

### ajax_request



```php
public $ajax_request
```






***

### query_instance



```php
private $query_instance
```






***

### taxonomies



```php
private $taxonomies
```






***

### relationships



```php
private $relationships
```






***

### is_tainacan_search



```php
private $is_tainacan_search
```






***

### is_inner_query



```php
private $is_inner_query
```






***

## Methods


### __construct



```php
public __construct(mixed $ajax_query = false): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ajax_query` | **mixed** |  |




***

### search_hooks



```php
public search_hooks(): mixed
```











***

### get_search_terms



```php
public get_search_terms(): mixed
```











***

### init_tainacan_search_vars



```php
public init_tainacan_search_vars(): mixed
```











***

### get_where_to_title_and_content



```php
public get_where_to_title_and_content(): mixed
```











***

### get_where_to_term_taxonomies



```php
public get_where_to_term_taxonomies(): mixed
```











***

### get_where_to_metadatas



```php
public get_where_to_metadatas(): mixed
```











***

### search_where



```php
public search_where(mixed $where, mixed $wp_query): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$where` | **mixed** |  |
| `$wp_query` | **mixed** |  |




***

### distinct



```php
public distinct(mixed $query): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$query` | **mixed** |  |




***

### relationships_join



```php
public relationships_join(mixed $join): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$join` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2023-07-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)