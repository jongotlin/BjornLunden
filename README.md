# BjornLunden
API wrapper for Björn Lundén

## Install with composer
`composer require jongotlin/bjorn-lunden`


## Example
```php
$bjornLunden = new \JGI\BjornLunden\BjornLunden(
    new \GuzzleHttp\Client(),
    new \JGI\BjornLunden\Credentials($userKey, $clientId, $clientSecret)
);

$token = $bjornLunden->tokens()->create();
$bjornLunden->getCredentials()->setToken($token->getAccessToken());

$users = $bjornLunden->users()->all();

var_dump($users);

```
