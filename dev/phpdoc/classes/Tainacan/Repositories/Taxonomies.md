***

# Taxonomies

Class Tainacan_Taxonomies



* Full name: `\Tainacan\Repositories\Taxonomies`
* Parent class: [`\Tainacan\Repositories\Repository`](./Repository.md)



## Properties


### entities_type



```php
public $entities_type
```






***

### instance



```php
private static $instance
```



* This property is **static**.


***

## Methods


### get_instance



```php
public static get_instance(): mixed
```



* This method is **static**.







***

### __construct

Register hooks

```php
protected __construct(): mixed
```











***

### _get_map

return properties map

```php
protected _get_map(): array
```









**Return Value:**

properties map array, format like:
  'id'             => [
    'map'        => 'ID',
    'title'       => __('ID', 'tainacan'),
    'type'       => 'integer',
    'description'=> __('Unique identifier', 'tainacan'),
    'validation' => v::numeric(),
],
'name'           =>  [
    'map'        => 'post_title',
    'title'       => __('Name', 'tainacan'),
    'type'       => 'string',
    'description'=> __('Name of the collection', 'tainacan'),
    'validation' => v::stringType(),
    'default'     => ''
],
'slug'           =>  [
    'map'        => 'post_name',
    'title'       => __('Slug', 'tainacan'),
    'type'       => 'string',
    'description'=> __('A unique and sanitized string representation of the collection, used to build the collection URL', 'tainacan'),
    'validation' => v::stringType(),
],



***

### get_cpt_labels

Get the labels for the custom post type of this repository

```php
public get_cpt_labels(): array
```









**Return Value:**

Labels in the format expected by register_post_type()



***

### register_post_type



```php
public register_post_type(): mixed
```











***

### insert



```php
public insert(\Tainacan\Entities\Taxonomy $taxonomy): \Tainacan\Entities\Entity
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$taxonomy` | **\Tainacan\Entities\Taxonomy** |  |




***

### fetch

fetch taxonomies based on ID or WP_Query args

```php
public fetch(array $args = [], string $output = null): \WP_Query|array
```

Taxonomies are stored as posts. Check WP_Query docs
to learn all args accepted in the $args parameter (@see https://developer.wordpress.org/reference/classes/wp_query/)
You can also use a mapped property, such as name and description, as an argument and it will be mapped to the
appropriate WP_Query argument

If a number is passed to $args, it will return a \Tainacan\Entities\Taxonomy object.  But if the post is not found or
does not match the entity post type, it will return an empty array






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$args` | **array** | WP_Query args &amp;#124; int $args the taxonomy id |
| `$output` | **string** | The desired output format (@see \Tainacan\Repositories\Repository::fetch_output() for possible values) |


**Return Value:**

an instance of wp query OR array of entities;



***

### fetch_by_collection

fetch taxonomies by collection, considering inheritance

```php
public fetch_by_collection(\Tainacan\Entities\Collection $collection, array $args = [], mixed $output = &#039;OBJECT&#039;): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **\Tainacan\Entities\Collection** |  |
| `$args` | **array** | WP_Query args plus disabled_metadata |
| `$output` | **mixed** |  |


**Return Value:**

Entities\Taxonomy



***

### fetch_by_db_identifier

fetch taxonomies by DB Identifier

```php
public fetch_by_db_identifier(string $db_identifier): \Tainacan\Entities\Taxonomy|array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$db_identifier` | **string** | The db Identifier of the taxonomy. This is the internal WordPress taxonomy slug, something like tnc_123_tax |


**Return Value:**

The entity when found. An empty array when nothing was found



***

### update



```php
public update(mixed $object, mixed $new_values = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$object` | **mixed** |  |
| `$new_values` | **mixed** |  |




***

### delete



```php
public delete(\Tainacan\Entities\Entity $taxonomy, mixed $permanent = true): mixed|\Tainacan\Entities\Entity
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$taxonomy` | **\Tainacan\Entities\Entity** |  |
| `$permanent` | **mixed** | If false, sendo to trash, if true, permanently delete. Default true |


**Return Value:**

@see https://developer.wordpress.org/reference/functions/wp_delete_post/



***

### added_collection



```php
public added_collection(mixed $taxonomy_id, mixed $collection_id): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$taxonomy_id` | **mixed** |  |
| `$collection_id` | **mixed** |  |




***

### removed_collection



```php
public removed_collection(mixed $taxonomy_id, mixed $collection_id): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$taxonomy_id` | **mixed** |  |
| `$collection_id` | **mixed** |  |




***

### update_taxonomy_registry_for_collection



```php
public update_taxonomy_registry_for_collection(mixed $taxonomy_id, mixed $collection_id): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$taxonomy_id` | **mixed** |  |
| `$collection_id` | **mixed** |  |




***

### register_taxonomies_for_all_collections



```php
public register_taxonomies_for_all_collections(): mixed
```











***

### get_db_identifier_by_id



```php
public get_db_identifier_by_id(mixed $id): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **mixed** |  |




***

### get_id_by_db_identifier



```php
public get_id_by_db_identifier(mixed $db_identifier): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$db_identifier` | **mixed** |  |




***

### term_exists

Check if a term already exists

```php
public term_exists(\Tainacan\Entities\Taxonomy $taxonomy, string $term_name, int|null $parent = null, bool $return_term = false): bool|\Tainacan\Repositories\WP_Term
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$taxonomy` | **\Tainacan\Entities\Taxonomy** | The taxonomy object where to look for terms |
| `$term_name` | **string** | The term name |
| `$parent` | **int&#124;null** | The ID of the parent term to look for children or null to look for terms in any hierarchical position. Default is null |
| `$return_term` | **bool** | wether to return the term object if it exists. default is to false |


**Return Value:**

return boolean indicating if term exists. If $return_term is true and term exists, return WP_Term object



***


## Inherited methods


### disable_logs

Disable creation of logs while inerting and updating entities

```php
public disable_logs(): mixed
```











***

### enable_logs

Enable creation of logs while inserting and updating entities
if it was disabled

```php
public enable_logs(): mixed
```











***

### get_enabled_logs

Get if creation of logs while inserting and updating entities are enable

```php
public get_enabled_logs(): mixed
```











***

### __construct

Register hooks

```php
protected __construct(): mixed
```











***

### init_objects



```php
public init_objects(): mixed
```











***

### _get_map

return properties map

```php
protected _get_map(): array
```




* This method is **abstract**.




**Return Value:**

properties map array, format like:
  'id'             => [
    'map'        => 'ID',
    'title'       => __('ID', 'tainacan'),
    'type'       => 'integer',
    'description'=> __('Unique identifier', 'tainacan'),
    'validation' => v::numeric(),
],
'name'           =>  [
    'map'        => 'post_title',
    'title'       => __('Name', 'tainacan'),
    'type'       => 'string',
    'description'=> __('Name of the collection', 'tainacan'),
    'validation' => v::stringType(),
    'default'     => ''
],
'slug'           =>  [
    'map'        => 'post_name',
    'title'       => __('Slug', 'tainacan'),
    'type'       => 'string',
    'description'=> __('A unique and sanitized string representation of the collection, used to build the collection URL', 'tainacan'),
    'validation' => v::stringType(),
],



***

### get_map



```php
public get_map(): mixed
```











***

### get_name

Return repository name

```php
public get_name(): string
```









**Return Value:**

The repository name



***

### insert



```php
public insert(\Tainacan\Entities\Entity $obj): \Tainacan\Entities\Entity
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$obj` | **\Tainacan\Entities\Entity** |  |


**Return Value:**

| bool



***

### insert_metadata

Insert object property stored as postmeta into the database

```php
public insert_metadata(\Tainacan\Entities $obj, string $prop,  $diffs): null|false
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$obj` | **\Tainacan\Entities** | The entity object |
| `$prop` | **string** | the property name, as declared in the map of the repository |
| `$diffs` | **** |  |


**Return Value:**

on error



***

### maybe_add_slashes



```php
public maybe_add_slashes(mixed $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




***

### fetch_output

Prepare the output for the fetch() methods.

```php
public fetch_output(\WP_Query $WP_Query, string $output = &#039;WP_Query&#039;): array|\WP_Query
```

Possible outputs are:
WP_Query (default) - returns the WP_Object itself
OBJECT - return an Array of Tainacan\Entities






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$WP_Query` | **\WP_Query** |  |
| `$output` | **string** | `WP_Query` for a single WP_Query object or `OBJECT` for an array of Tainacan\Entities |




***

### parse_fetch_args

Maps repository mapped properties to WP_Query arguments.

```php
public parse_fetch_args(array $args = []): array
```

This allows to build fetch arguments using both WP_Query arguments
and the mapped properties for the repository.

For example, you can use any of the following methods to browse collections by name:
$TainacanCollections->fetch(['title' => 'test']);
$TainacanCollections->fetch(['name' => 'test']);

The property `name` is transformed into the native WordPress property `post_title`. (actually only title for query purpouses)

Example 2, this also works with properties mapped to postmeta. The following methods are the same:
$TainacanMetadatas->fetch(['required' => 'yes']);
$TainacanMetadatas->fetch(['meta_query' => [
    [
        'key' => 'required',
        'value' => 'yes'
    ]
]]);






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$args` | **array** | [description] |


**Return Value:**

$args new $args array with mapped properties



***

### get_default_properties

Return default properties

```php
public get_default_properties(array $map): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$map` | **array** |  |




***

### get_mapped_property

return the value for a mapped property from database

```php
public get_mapped_property(\Tainacan\Entities\Entity $entity, string $prop): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$entity` | **\Tainacan\Entities\Entity** |  |
| `$prop` | **string** | id of property |


**Return Value:**

property value



***

### get_collections_db_identifiers

Return array of collections db identifiers

```php
public static get_collections_db_identifiers(): array[]
```



* This method is **static**.







***

### get_entity_by_post



```php
public static get_entity_by_post(int|\WP_Post $post): \Tainacan\Entities\Entity|bool
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$post` | **int&#124;\WP_Post** | &amp;#124;Entity |




***

### get_entity_by_post_type



```php
public static get_entity_by_post_type(string $post_type, int|\WP_Post $post): \Tainacan\Entities\Entity|bool
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$post_type` | **string** |  |
| `$post` | **int&#124;\WP_Post** | optional post ID or WordPress post data for creation of Entity |


**Return Value:**

the entity for post_type, with data if $post is given or false



***

### get_repository

Return Entity's Repository

```php
public static get_repository(\Tainacan\Entities\Entity $entity): \Tainacan\Repositories\Repository|bool
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$entity` | **\Tainacan\Entities\Entity** |  |


**Return Value:**

return the entity Repository or false



***

### fetch_one

Fetch one Entity based on query args.

```php
public fetch_one(array $args): false|\Tainacan\Entities
```

Note: Does not work with Item_Metadata Repository






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$args` | **array** | Query Args as expected by fetch |


**Return Value:**

The entity or false if none was found



***

### trash

Shortcut to delete($entity, false)

```php
public trash(\Tainacan\Entities\Entity $entity): mixed|\Tainacan\Entities\Entity
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$entity` | **\Tainacan\Entities\Entity** |  |


**Return Value:**

@see https://developer.wordpress.org/reference/functions/wp_delete_post/



***

### delete



```php
public delete(\Tainacan\Entities\Entity $entity, bool $permanent = true): mixed|\Tainacan\Entities\Entity
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$entity` | **\Tainacan\Entities\Entity** |  |
| `$permanent` | **bool** | If false, sendo to trash, if true, permanently delete. Default true |


**Return Value:**

@see https://developer.wordpress.org/reference/functions/wp_delete_post/



***

### fetch



```php
public fetch( $args, mixed $output = null): mixed
```




* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$args` | **** |  |
| `$output` | **mixed** |  |




***

### update



```php
public update( $object, mixed $new_values = null): mixed
```




* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$object` | **** |  |
| `$new_values` | **mixed** |  |




***

### register_post_type



```php
public register_post_type(): mixed
```




* This method is **abstract**.






***

### can_edit

Check if $user can edit/create a entity

```php
public can_edit(\Tainacan\Entities\Entity $entity, int|\WP_User|null $user = null): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$entity` | **\Tainacan\Entities\Entity** |  |
| `$user` | **int&#124;\WP_User&#124;null** | default is null for the current user |




***

### can_read

Check if $user can read the entity

```php
public can_read(\Tainacan\Entities\Entity $entity, int|\WP_User|null $user = null): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$entity` | **\Tainacan\Entities\Entity** |  |
| `$user` | **int&#124;\WP_User&#124;null** | default is null for the current user |




***

### can_delete

Check if $user can delete the entity

```php
public can_delete(\Tainacan\Entities\Entity $entity, int|\WP_User|null $user = null): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$entity` | **\Tainacan\Entities\Entity** |  |
| `$user` | **int&#124;\WP_User&#124;null** | default is null for the current user |




***

### can_publish

Check if $user can publish entity

```php
public can_publish(\Tainacan\Entities\Entity $entity, int|\WP_User|null $user = null): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$entity` | **\Tainacan\Entities\Entity** |  |
| `$user` | **int&#124;\WP_User&#124;null** | default is null for the current user |




***

### unique_multidimensional_array

Removes duplicates from multidimensional array

```php
public unique_multidimensional_array( $array,  $key): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$array` | **** |  |
| `$key` | **** |  |




***

### insert_thumbnail

Inserts or update thumbnail for items and collections and return an array
with old thumbnail and new thumbnail

```php
private insert_thumbnail( $obj,  $diffs): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$obj` | **** |  |
| `$diffs` | **** |  |




***

### get_descendants_ids

Get IDs for all children, grand children till the depth parameter is reached

```php
public get_descendants_ids(int|\Tainacan\Entities\Entity $id, bool|int $depth = false): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **int&#124;\Tainacan\Entities\Entity** | The Entity ID or object |
| `$depth` | **bool&#124;int** | The maximum depth to llok for descendants. default is false = no limit |


**Return Value:**

Array of IDs



***

### get_capabilities

Get the capabilities list for the post type of the entity

```php
public get_capabilities(): object
```









**Return Value:**

Object with all the capabilities as member variables.



***

### sanitize_value



```php
protected sanitize_value(mixed $content): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2023-07-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
