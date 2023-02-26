# Laravel Package Kanye Quotes

This laravel packages adds a page which show 5 random Kanye quotes. 
To view the page a user needs to be logged in. 
The template that is shipped with this package is bootstrap based

Page (login required)
```
    https://<host>/kanye-quotes
```

Api (GET)
```
    https://<host>/api/kanye-quotes
```
Checkout example requests .http folder

## Installation

```
mkdir -p packages/Heesbeen/KanyeQuotes
git clone git@github.com:heesbeen/kanye-quotes.git packages/Heesbeen/KanyeQuotes
```

Add repository
```json
        {
            "type": "path",
            "url": "packages/Heesbeen/KanyeQuotes",
            "options": {
                "symlink": true
            }
        }
```

```
composer require heesbeen/kany-quotes
```

### Configurations

You choose to use the single quote api or the bulk api. 

The bulk api options is 10 times faster and has a caching option.
Persistent cache is used as a fallback when the api is not available

```
'api_url' => 'https://api.kanye.rest/',
'api_list_url' => 'https://raw.githubusercontent.com/ajzbc/kanye.rest/master/quotes.json',
'use_list_api' => true,
'use_cache' => true
```

### Tips & tricks (optional)

#### Create user login UI 

```
artisan ui:auth
artisan ui bootstrap
npm install
npm run dev
```

#### Create Api Token User via Tinker (Sanctum)

```
 artisan tinker
 $user = User::find(<user_id>) 
 OR 
 $user = User::where('email','<email>')->first()
 
 $user->createToken('tokens')->plainTextToken
```

The response is your bearer token

