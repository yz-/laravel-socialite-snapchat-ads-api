# Snapchat

[![License](http://poser.pugx.org/doctrine/inflector/license)](https://packagist.org/packages/doctrine/inflector) 
[![PHP Version Require](http://poser.pugx.org/doctrine/inflector/require/php)](https://packagist.org/packages/doctrine/inflector)

```bash
composer require yassine_z/laravel-socialite-snapchat-ads-api
```

## Installation & Basic Usage

Please see the [Base Installation Guide](https://socialiteproviders.com/usage/), then follow the provider specific instructions below.

### Add configuration to `config/services.php`

```php
'snapchat_ads_api' => [    
  'client_id' => env('SNAPCHAT_CLIENT_ID'),  
  'client_secret' => env('SNAPCHAT_CLIENT_SECRET'),  
  'redirect' => env('SNAPCHAT_REDIRECT_URI') 
],
```

### Add provider event listener

Configure the package's listener to listen for `SocialiteWasCalled` events.

Add the event to your `listen[]` array in `app/Providers/EventServiceProvider`. See the [Base Installation Guide](https://socialiteproviders.com/usage/) for detailed instructions.

```php
protected $listen = [
    \SocialiteProviders\Manager\SocialiteWasCalled::class => [
        // ... other providers
        'SocialiteProviders\SnapchatAdsApi\SnapchatAdsApiExtendSocialite@handle'
    ],
];
```

### Usage

You should now be able to use the provider like you would regularly use Socialite (assuming you have the facade installed):

```php
return Socialite::driver('snapchat_ads_api')->redirect();
```

### Returned User fields

- ``id``
- ``name``
- ``email``
- ``organization_id``

### Use cases
 Todo
