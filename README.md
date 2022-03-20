# Melisearch and Laravel 

## 1、Edit .env

- Add database infomation

## ２、Exec artisan command

```
php artisan migrate
php artisan key:generate
```

## 3、Add user data

### Edit Database\Seeders\atabaseSeeder

- add 100 users data

```php
public function run()
{
    \App\Models\User::factory(100)->create();
}
```

### Exec seeder

```
php artisan db:seed
```


## ４、Install composer package

### install scout and public

```
composer require laravel/scout
# scoutのコンフィグファイルをpublish
php artisan vendor:publish --provider="Laravel\Scout\ScoutServiceProvider"
```

### install package

```
composer require meilisearch/meilisearch-php http-interop/http-factory-guzzle
```


## ５、Modify User Model

- 検索データを制限（laravel8は不要）

```php
protected $hidden = [
    'password',
    'remember_token',
];
```

### Trate Searchable Class

- Searchableクラスをトレイト

```php
use Laravel\Scout\Searchable;


use HasApiTokens, HasFactory, Notifiable, Searchable;
```

### Add toSearchableArray method

```php
public function toSearchableArray()
{
    $array = $this->toArray();

    unset($array['updated_at']);

    return $array;
}
```

## ６、Melisearch Setting

### Add melisearch info to .env

```
SCOUT_DRIVER=meilisearch
MEILISEARCH_HOST=http://127.0.0.1:7700
```

### install melisearch and launch

```
brew update && brew install meilisearch
sudo meilisearch
```

### Import user data to melisearch

```
php artisan scout:import "App\Models\User"
```

### Confirm on melisearch management display

- access http://127.0.0.1:7700


## ７、Use from laravel frontend

- input and result

```html
<input id="search" type="text">
<div id="results" style="margin-top:50px"></div>
```

- javascript
- use cdn library

```html

<script src='https://cdn.jsdelivr.net/npm/meilisearch@latest/dist/bundles/meilisearch.umd.js'></script> 
<script>
const client = new MeiliSearch({
    host: 'http://127.0.0.1:7700',
})
const index = client.index('users')
const input = document.querySelector('#search')

input.addEventListener('keyup', event => {
    index.search(event.target.value)
    .then(response => {
        let nodes = response.hits.map(user => {
            let div = document.createElement('div');
            div.textContent = user.name;
            return div;
        });
        let results = document.querySelector('#results');
        results.innerHTML = '';
        results.append(...nodes);
    })
})
</script>
```