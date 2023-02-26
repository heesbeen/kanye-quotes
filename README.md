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
cd packages/Heesbeen/KanyeQuotes
git clone git@github.com:heesbeen/kanye-quotes.git
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

### Optional roadmap

Quotes model
Console import task

