# Tripartie\Tpdk\UserApi

All URIs are relative to https://staging-api.tripartie.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiApiClientsGetCollection()**](UserApi.md#apiApiClientsGetCollection) | **GET** /api-clients | Retrieves the collection of ApiClient resources. |
| [**apiApiClientsIdentifierDelete()**](UserApi.md#apiApiClientsIdentifierDelete) | **DELETE** /api-clients/{identifier} | Removes the ApiClient resource. |
| [**apiApiClientsIdentifierGet()**](UserApi.md#apiApiClientsIdentifierGet) | **GET** /api-clients/{identifier} | Retrieves a ApiClient resource. |
| [**apiApiClientsPost()**](UserApi.md#apiApiClientsPost) | **POST** /api-clients | Creates a ApiClient resource. |
| [**apiInvitePost()**](UserApi.md#apiInvitePost) | **POST** /invite | Organization invite |
| [**apiMeGet()**](UserApi.md#apiMeGet) | **GET** /me | Retrieves a User resource. |
| [**apiPersonasauthenticationPost()**](UserApi.md#apiPersonasauthenticationPost) | **POST** /personas/authentication | Persona Authentication |
| [**apiPersonasmeGet()**](UserApi.md#apiPersonasmeGet) | **GET** /personas/me | Retrieve your authenticated Persona |
| [**apiPersonasregisterPost()**](UserApi.md#apiPersonasregisterPost) | **POST** /personas/register | Persona external registration |
| [**apiRegisterPost()**](UserApi.md#apiRegisterPost) | **POST** /register | Organization onboarding |
| [**apiUsersGetCollection()**](UserApi.md#apiUsersGetCollection) | **GET** /users | Retrieves the collection of User resources. |
| [**apiUsersIdGet()**](UserApi.md#apiUsersIdGet) | **GET** /users/{id} | Retrieves a User resource. |
| [**apiUsersIdPatch()**](UserApi.md#apiUsersIdPatch) | **PATCH** /users/{id} | Updates the User resource. |
| [**apiUsersIdemailValidationPatch()**](UserApi.md#apiUsersIdemailValidationPatch) | **PATCH** /users/{id}/email-validation | Validate email ownership |


## `apiApiClientsGetCollection()`

```php
apiApiClientsGetCollection($page): \Tripartie\Tpdk\Model\ApiClientRead[]
```

Retrieves the collection of ApiClient resources.

Retrieves the collection of ApiClient resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwtPersonalKey
$config = Tripartie\Tpdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tripartie\Tpdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Tripartie\Tpdk\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->apiApiClientsGetCollection($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiApiClientsGetCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The collection page number | [optional] [default to 1] |

### Return type

[**\Tripartie\Tpdk\Model\ApiClientRead[]**](../Model/ApiClientRead.md)

### Authorization

[jwtPersonalKey](../../README.md#jwtPersonalKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiApiClientsIdentifierDelete()`

```php
apiApiClientsIdentifierDelete($identifier)
```

Removes the ApiClient resource.

Removes the ApiClient resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwtPersonalKey
$config = Tripartie\Tpdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tripartie\Tpdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Tripartie\Tpdk\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = 'identifier_example'; // string | ApiClient identifier

try {
    $apiInstance->apiApiClientsIdentifierDelete($identifier);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiApiClientsIdentifierDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **identifier** | **string**| ApiClient identifier | |

### Return type

void (empty response body)

### Authorization

[jwtPersonalKey](../../README.md#jwtPersonalKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiApiClientsIdentifierGet()`

```php
apiApiClientsIdentifierGet($identifier): \Tripartie\Tpdk\Model\ApiClientRead
```

Retrieves a ApiClient resource.

Retrieves a ApiClient resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwtPersonalKey
$config = Tripartie\Tpdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tripartie\Tpdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Tripartie\Tpdk\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = 'identifier_example'; // string | ApiClient identifier

try {
    $result = $apiInstance->apiApiClientsIdentifierGet($identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiApiClientsIdentifierGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **identifier** | **string**| ApiClient identifier | |

### Return type

[**\Tripartie\Tpdk\Model\ApiClientRead**](../Model/ApiClientRead.md)

### Authorization

[jwtPersonalKey](../../README.md#jwtPersonalKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiApiClientsPost()`

```php
apiApiClientsPost($apiClientWrite): \Tripartie\Tpdk\Model\ApiClientPostCreationRead
```

Creates a ApiClient resource.

Creates a ApiClient resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwtPersonalKey
$config = Tripartie\Tpdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tripartie\Tpdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Tripartie\Tpdk\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apiClientWrite = new \Tripartie\Tpdk\Model\ApiClientWrite(); // \Tripartie\Tpdk\Model\ApiClientWrite | The new ApiClient resource

try {
    $result = $apiInstance->apiApiClientsPost($apiClientWrite);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiApiClientsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **apiClientWrite** | [**\Tripartie\Tpdk\Model\ApiClientWrite**](../Model/ApiClientWrite.md)| The new ApiClient resource | |

### Return type

[**\Tripartie\Tpdk\Model\ApiClientPostCreationRead**](../Model/ApiClientPostCreationRead.md)

### Authorization

[jwtPersonalKey](../../README.md#jwtPersonalKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiInvitePost()`

```php
apiInvitePost($userInvite): \Tripartie\Tpdk\Model\UserPostRegisterRead
```

Organization invite

Invite a user to your organization workspace

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwtPersonalKey
$config = Tripartie\Tpdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tripartie\Tpdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: personaAuthKey
$config = Tripartie\Tpdk\Configuration::getDefaultConfiguration()->setApiKey('X-Persona-Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tripartie\Tpdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Persona-Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: oauth
$config = Tripartie\Tpdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tripartie\Tpdk\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userInvite = new \Tripartie\Tpdk\Model\UserInvite(); // \Tripartie\Tpdk\Model\UserInvite | The new User resource

try {
    $result = $apiInstance->apiInvitePost($userInvite);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiInvitePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **userInvite** | [**\Tripartie\Tpdk\Model\UserInvite**](../Model/UserInvite.md)| The new User resource | |

### Return type

[**\Tripartie\Tpdk\Model\UserPostRegisterRead**](../Model/UserPostRegisterRead.md)

### Authorization

[jwtPersonalKey](../../README.md#jwtPersonalKey), [personaAuthKey](../../README.md#personaAuthKey), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiMeGet()`

```php
apiMeGet(): \Tripartie\Tpdk\Model\UserAuthenticatedRead
```

Retrieves a User resource.

Retrieves a User resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwtPersonalKey
$config = Tripartie\Tpdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tripartie\Tpdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: personaAuthKey
$config = Tripartie\Tpdk\Configuration::getDefaultConfiguration()->setApiKey('X-Persona-Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tripartie\Tpdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Persona-Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: oauth
$config = Tripartie\Tpdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tripartie\Tpdk\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiMeGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiMeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Tripartie\Tpdk\Model\UserAuthenticatedRead**](../Model/UserAuthenticatedRead.md)

### Authorization

[jwtPersonalKey](../../README.md#jwtPersonalKey), [personaAuthKey](../../README.md#personaAuthKey), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPersonasauthenticationPost()`

```php
apiPersonasauthenticationPost($personaExternalAuth): \Tripartie\Tpdk\Model\PersonaAuthReturn
```

Persona Authentication

Main route for Persona (Organization customers) to authenticate themselves. Public access, captcha protected and MFA mandatory.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwtPersonalKey
$config = Tripartie\Tpdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tripartie\Tpdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: personaAuthKey
$config = Tripartie\Tpdk\Configuration::getDefaultConfiguration()->setApiKey('X-Persona-Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tripartie\Tpdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Persona-Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: oauth
$config = Tripartie\Tpdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tripartie\Tpdk\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$personaExternalAuth = new \Tripartie\Tpdk\Model\PersonaExternalAuth(); // \Tripartie\Tpdk\Model\PersonaExternalAuth | The new Persona resource

try {
    $result = $apiInstance->apiPersonasauthenticationPost($personaExternalAuth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiPersonasauthenticationPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **personaExternalAuth** | [**\Tripartie\Tpdk\Model\PersonaExternalAuth**](../Model/PersonaExternalAuth.md)| The new Persona resource | |

### Return type

[**\Tripartie\Tpdk\Model\PersonaAuthReturn**](../Model/PersonaAuthReturn.md)

### Authorization

[jwtPersonalKey](../../README.md#jwtPersonalKey), [personaAuthKey](../../README.md#personaAuthKey), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPersonasmeGet()`

```php
apiPersonasmeGet(): \Tripartie\Tpdk\Model\PersonaRead
```

Retrieve your authenticated Persona

Retrieves a Persona resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: personaAuthKey
$config = Tripartie\Tpdk\Configuration::getDefaultConfiguration()->setApiKey('X-Persona-Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tripartie\Tpdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Persona-Authorization', 'Bearer');


$apiInstance = new Tripartie\Tpdk\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiPersonasmeGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiPersonasmeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Tripartie\Tpdk\Model\PersonaRead**](../Model/PersonaRead.md)

### Authorization

[personaAuthKey](../../README.md#personaAuthKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPersonasregisterPost()`

```php
apiPersonasregisterPost($personaRegister): \Tripartie\Tpdk\Model\PersonaRead
```

Persona external registration

Creates a Persona resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwtPersonalKey
$config = Tripartie\Tpdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tripartie\Tpdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: personaAuthKey
$config = Tripartie\Tpdk\Configuration::getDefaultConfiguration()->setApiKey('X-Persona-Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tripartie\Tpdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Persona-Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: oauth
$config = Tripartie\Tpdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tripartie\Tpdk\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$personaRegister = new \Tripartie\Tpdk\Model\PersonaRegister(); // \Tripartie\Tpdk\Model\PersonaRegister | The new Persona resource

try {
    $result = $apiInstance->apiPersonasregisterPost($personaRegister);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiPersonasregisterPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **personaRegister** | [**\Tripartie\Tpdk\Model\PersonaRegister**](../Model/PersonaRegister.md)| The new Persona resource | |

### Return type

[**\Tripartie\Tpdk\Model\PersonaRead**](../Model/PersonaRead.md)

### Authorization

[jwtPersonalKey](../../README.md#jwtPersonalKey), [personaAuthKey](../../README.md#personaAuthKey), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiRegisterPost()`

```php
apiRegisterPost($userWrite): \Tripartie\Tpdk\Model\UserPostRegisterRead
```

Organization onboarding

Internal-use only, protected by a captcha. Organization first-enrollment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwtPersonalKey
$config = Tripartie\Tpdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tripartie\Tpdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: personaAuthKey
$config = Tripartie\Tpdk\Configuration::getDefaultConfiguration()->setApiKey('X-Persona-Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tripartie\Tpdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Persona-Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: oauth
$config = Tripartie\Tpdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tripartie\Tpdk\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userWrite = new \Tripartie\Tpdk\Model\UserWrite(); // \Tripartie\Tpdk\Model\UserWrite | The new User resource

try {
    $result = $apiInstance->apiRegisterPost($userWrite);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiRegisterPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **userWrite** | [**\Tripartie\Tpdk\Model\UserWrite**](../Model/UserWrite.md)| The new User resource | |

### Return type

[**\Tripartie\Tpdk\Model\UserPostRegisterRead**](../Model/UserPostRegisterRead.md)

### Authorization

[jwtPersonalKey](../../README.md#jwtPersonalKey), [personaAuthKey](../../README.md#personaAuthKey), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiUsersGetCollection()`

```php
apiUsersGetCollection($page): \Tripartie\Tpdk\Model\UserCollectionRead[]
```

Retrieves the collection of User resources.

Retrieves the collection of User resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwtPersonalKey
$config = Tripartie\Tpdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tripartie\Tpdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Tripartie\Tpdk\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->apiUsersGetCollection($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiUsersGetCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The collection page number | [optional] [default to 1] |

### Return type

[**\Tripartie\Tpdk\Model\UserCollectionRead[]**](../Model/UserCollectionRead.md)

### Authorization

[jwtPersonalKey](../../README.md#jwtPersonalKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiUsersIdGet()`

```php
apiUsersIdGet($id): \Tripartie\Tpdk\Model\User
```

Retrieves a User resource.

Retrieves a User resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwtPersonalKey
$config = Tripartie\Tpdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tripartie\Tpdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Tripartie\Tpdk\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | User identifier

try {
    $result = $apiInstance->apiUsersIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiUsersIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| User identifier | |

### Return type

[**\Tripartie\Tpdk\Model\User**](../Model/User.md)

### Authorization

[jwtPersonalKey](../../README.md#jwtPersonalKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiUsersIdPatch()`

```php
apiUsersIdPatch($id, $userUpdate): \Tripartie\Tpdk\Model\UserPostRegisterRead
```

Updates the User resource.

Updates the User resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwtPersonalKey
$config = Tripartie\Tpdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tripartie\Tpdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: personaAuthKey
$config = Tripartie\Tpdk\Configuration::getDefaultConfiguration()->setApiKey('X-Persona-Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tripartie\Tpdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Persona-Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: oauth
$config = Tripartie\Tpdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tripartie\Tpdk\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | User identifier
$userUpdate = new \Tripartie\Tpdk\Model\UserUpdate(); // \Tripartie\Tpdk\Model\UserUpdate | The updated User resource

try {
    $result = $apiInstance->apiUsersIdPatch($id, $userUpdate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiUsersIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| User identifier | |
| **userUpdate** | [**\Tripartie\Tpdk\Model\UserUpdate**](../Model/UserUpdate.md)| The updated User resource | |

### Return type

[**\Tripartie\Tpdk\Model\UserPostRegisterRead**](../Model/UserPostRegisterRead.md)

### Authorization

[jwtPersonalKey](../../README.md#jwtPersonalKey), [personaAuthKey](../../README.md#personaAuthKey), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiUsersIdemailValidationPatch()`

```php
apiUsersIdemailValidationPatch($id, $userEmailValidationWrite): \Tripartie\Tpdk\Model\UserPostRegisterRead
```

Validate email ownership

Updates the User resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwtPersonalKey
$config = Tripartie\Tpdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tripartie\Tpdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: personaAuthKey
$config = Tripartie\Tpdk\Configuration::getDefaultConfiguration()->setApiKey('X-Persona-Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tripartie\Tpdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Persona-Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: oauth
$config = Tripartie\Tpdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tripartie\Tpdk\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | User identifier
$userEmailValidationWrite = new \Tripartie\Tpdk\Model\UserEmailValidationWrite(); // \Tripartie\Tpdk\Model\UserEmailValidationWrite | The updated User resource

try {
    $result = $apiInstance->apiUsersIdemailValidationPatch($id, $userEmailValidationWrite);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiUsersIdemailValidationPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| User identifier | |
| **userEmailValidationWrite** | [**\Tripartie\Tpdk\Model\UserEmailValidationWrite**](../Model/UserEmailValidationWrite.md)| The updated User resource | |

### Return type

[**\Tripartie\Tpdk\Model\UserPostRegisterRead**](../Model/UserPostRegisterRead.md)

### Authorization

[jwtPersonalKey](../../README.md#jwtPersonalKey), [personaAuthKey](../../README.md#personaAuthKey), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
