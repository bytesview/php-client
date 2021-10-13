![Alt text](https://raw.githubusercontent.com/newsdataapi/php-client/main/newsdata-logo.png)

# <p align="center">Newsdata.io PHP Client
Newsdataapi allows you to create a library for accessing http services easily, in a centralized way. An API defined by newsdataapi will return a JSON object when called.

[![License](https://img.shields.io/badge/license-MIT-blue?)](https://github.com/newsdataapi/php-client/blob/main/LICENSE)
[![License](https://img.shields.io/badge/php-%5E7.3-green?logo=php)](https://github.com/newsdataapi/php-client/blob/main/LICENSE)

<br />

## Requirements

PHP 7.3 and later.

<br />

## Composer

You can install the bindings via [Composer](http://getcomposer.org/). Run the following command:

```bash
composer require newsdataio/newsdataapi
```

<br />

## Manual Installation

If you do not wish to use Composer, you can download the [latest release](https://github.com/newsdataapi/php-client/releases). Then, to use the bindings, include the `autoload.php` file.

```php
require_once('/path/to/newsdataapi-php/autoload.php');
```

<br />

## Dependencies

The bindings require the following extensions in order to work properly:

-   [`curl`](https://secure.php.net/manual/en/book.curl.php), although you can use your own non-cURL client if you prefer
-   [`json`](https://secure.php.net/manual/en/book.json.php)

If you use Composer, these dependencies should be handled automatically. If you install manually, you'll want to make sure that these extensions are available.

<br />

## Documentation

See the [API docs](https://newsdata.io/docs/).

<br />



## Getting Started

### LATEST NEWS API


>  **GET**  &nbsp;&nbsp;&nbsp; /1/news


```php
require_once '../autoload.php';

use NewsdataIO\NewsdataApi;

$newsdataApiObj = new NewsdataApi(NEWSDATA_API_KEY);

# Pass your desired strings in an array with unique key
$data = array("q" => "ronaldo","country" => "ie");

$response = $newsdataApiObj->get_latest_news($data);

```
**`API key`**  : Your private Newsdata API key. 

**`country`** : Find sources that display news in a specific country. Possible Options: `ar` , `au` , `at` , `be` , `br` , `bg` , `ca` , `cn` , `co` , `cu`, `cz`,`eg`, `fr`,`de`, `gr`, `hk`, `hu`, `in`, `id`, `ie`, `il`, `it`, `jp`, `lv`, `lb`, `lt`, `my`, `mx`, `ma`, `nl`, `nz`, `ng`, `kp`, `no`, `pk`, `ph`, `pl`, `pt`, `ro`, `ru`, `sa`, `rs`, `sg`, `sk`, `si`, `za`, `kr`, `es`, `se`, `ch`, `tw`, `th`, `tr`, `ua`, `ae`, `gb`, `us`, `ve`

**`category`** : Find sources that display news of this category. Possible Options: `business` ,`entertainment` ,`environment`, `food`, `health`, `politics`, `science`, `sports`, `technology`, `top`, `world`

**`language`** : Find sources that display news in a specific language. Possible Options: `ar`, `bs`, `bg`, `zh`, `hr`, `cs`, `nl`, `en`, `fr`, `de`, `el`, `he`, `hi`, `hu`, `in`, `it`, `jp`, `ko`, `lv`, `lt`, `ms`,`no`, `pl`, `pt`, `ro`, `ru`, `sr`, `sk`, `sl`, `es`, `sv`, `th`, `tr`, `uk`

**`domain`** : A comma seperated string of domains (maximum 5) to restrict the search to. Use the /domains endpoint to find top sources id.
 
**`q`** : Keywords or phrases to search for in the news title and content. The value must be URL-encoded. Advance search options: Search ***Social*** `q=social`, Search ***Social Pizza*** `q=social pizza`, Search Social but not with pizza. ***social -pizza*** `q=social -pizza`, Search Social but not with pizza and wildfire. ***social -pizza -wildfire*** `q=social -pizza -wildfire`, Search multiple keyword with AND operator. ***social AND pizza*** `q=social AND pizza`  

**`qInTitle`** : Keywords or phrases to search for in the news title only.

**`page`** : Use this to page through the results if the total results found is greater than the page size.

<br />



### ARCHIVE NEWS API

>  **GET**  &nbsp;&nbsp;&nbsp; /1/archive

```php
require_once '../autoload.php';

use NewsdataIO\NewsdataApi;

$newsdataApiObj = new NewsdataApi(NEWSDATA_API_KEY);

# Pass your desired strings in an array with unique key
$data = array("q" => "ronaldo","country" => "ie");

$response = $newsdataApiObj->news_archive($data);

```
**`API key`** : Your private Newsdata API key. 

**`country`** : Find sources that display news in a specific country. Possible Options: `ar` , `au` , `at` , `be` , `br` , `bg` , `ca` , `cn` , `co` , `cu`, `cz`,`eg`, `fr`,`de`, `gr`, `hk`, `hu`, `in`, `id`, `ie`, `il`, `it`, `jp`, `lv`, `lb`, `lt`, `my`, `mx`, `ma`, `nl`, `nz`, `ng`, `kp`, `no`, `pk`, `ph`, `pl`, `pt`, `ro`, `ru`, `sa`, `rs`, `sg`, `sk`, `si`, `za`, `kr`, `es`, `se`, `ch`, `tw`, `th`, `tr`, `ua`, `ae`, `gb`, `us`, `ve`

**`category`** : Find sources that display news of this category. Possible Options: `business` ,`entertainment` ,`environment`, `food`, `health`, `politics`, `science`, `sports`, `technology`, `top`, `world`

**`language`** : Find sources that display news in a specific language. Possible Options: `ar`, `bs`, `bg`, `zh`, `hr`, `cs`, `nl`, `en`, `fr`, `de`, `el`, `he`, `hi`, `hu`, `in`, `it`, `jp`, `ko`, `lv`, `lt`, `ms`,`no`, `pl`, `pt`, `ro`, `ru`, `sr`, `sk`, `sl`, `es`, `sv`, `th`, `tr`, `uk`

**`domain`** : A comma seperated string of domains (maximum 5) to restrict the search to. Use the /domains endpoint to find top sources id.

**`from_date`** : A date and optional time for the oldest article allowed. This should be in ISO 8601 format (e.g. `2021-04-18` or `2021-04-18T04:04:34`)

**`to_date`** : A date and optional time for the newest article allowed. This should be in ISO 8601 format (e.g. `2021-04-18` or `2021-04-18T04:04:34`)
 
**`q`** : Keywords or phrases to search for in the news title and content. The value must be URL-encoded. Advance search options: Search ***Social*** `q=social`, Search ***Social Pizza*** `q=social pizza`, Search Social but not with pizza. ***social -pizza*** `q=social -pizza`, Search Social but not with pizza and wildfire. ***social -pizza -wildfire*** `q=social -pizza -wildfire`, Search multiple keyword with AND operator. ***social AND pizza*** `q=social AND pizza` 

**`qInTitle`** : Keywords or phrases to search for in the news title only.

**`page`** : Use this to page through the results if the total results found is greater than the page size.


<br />

### NEWS SOURCES API

>  **GET**  &nbsp;&nbsp;&nbsp; /1/sources

```php
require_once '../autoload.php';

use NewsdataIO\NewsdataApi;

$newsdataApiObj = new NewsdataApi(NEWSDATA_API_KEY);

# Pass your desired strings in an array with unique key
$data = array("q" => "ronaldo","country" => "ie");

$response = $newsdataApiObj->news_sources($data);

```
**`API key`** : Your private Newsdata API key. 

**`country`** : Find sources that display news in a specific country. Possible Options: `ar` , `au` , `at` , `be` , `br` , `bg` , `ca` , `cn` , `co` , `cu`, `cz`,`eg`, `fr`,`de`, `gr`, `hk`, `hu`, `in`, `id`, `ie`, `il`, `it`, `jp`, `lv`, `lb`, `lt`, `my`, `mx`, `ma`, `nl`, `nz`, `ng`, `kp`, `no`, `pk`, `ph`, `pl`, `pt`, `ro`, `ru`, `sa`, `rs`, `sg`, `sk`, `si`, `za`, `kr`, `es`, `se`, `ch`, `tw`, `th`, `tr`, `ua`, `ae`, `gb`, `us`, `ve`

**`category`** : Find sources that display news of this category. Possible Options: `business` ,`entertainment` ,`environment`, `food`, `health`, `politics`, `science`, `sports`, `technology`, `top`, `world`

**`language`** : Find sources that display news in a specific language. Possible Options: `ar`, `bs`, `bg`, `zh`, `hr`, `cs`, `nl`, `en`, `fr`, `de`, `el`, `he`, `hi`, `hu`, `in`, `it`, `jp`, `ko`, `lv`, `lt`, `ms`,`no`, `pl`, `pt`, `ro`, `ru`, `sr`, `sk`, `sl`, `es`, `sv`, `th`, `tr`, `uk`

<br />


## License

Provided under [MIT License](https://github.com/newsdataapi/php-client/blob/main/LICENSE) by Matt Lisivick.

```
THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS
FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER
IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
```