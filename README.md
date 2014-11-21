FLIPSIDE.IO 
===========

FLIPSIDE.IO is a PHP Client for Flipkart Affiliate Program using Guzzle HTTP Library

For all out there for consuming Affilate APIs for blogging and their websites adverts It seems to be a hard way doing it manually so i thought of making a simple wrapper using  PHP Guzzle HTTP Library.

**flipside** makes your life easy integrating with Flipkart Affiliate API into your sites with simple effort.

##For Using FLIPSIDE.IO:

For all the developers who want to integrate their sites using **flipside** you just need to provide your

For the code to work, you'll need to generate an access token through your affiliate account.

##Upcoming
1. I will make a Site using flipside for reference using Twitters Bootstrap which displays products in a selected category which are in stock which would be a great use for using it as a reference.
2. Use of Monolog for Logging details.

##For Contributers:
Eventhough you need not know much about [Guzzle HTTP API](http://guzzle.readthedocs.org/en/latest/index.html).Its Good to know if you further want to write your own API consuming wrapper code.
You might say its easy to consume a service in php through curl but Guzzle has gone a long way doing the low level work for you through their library.
Even many PHP Frameworks use Guzzle HTTP internally.

I know there are many fans for CURL out there but Guzzle has lots of improvement over CURL.
But if you are a die hard fan of CURL and dont want to create a overhead in learning Guzzle I would recommend you to se the work of [Saneem Flipkart API using CURL](https://github.com/xaneem/flipkart-api-php) where i got inspired to make **flipside.io**. I would say this is not a direct fork of saneem's PHP wrapper but an alternative for those who work with frameworks of OOPHP way.
Because configuring CURL is alot of pain.Moreover Pluggable HTTP handlers allows Guzzle to integrate with any method you choose for sending HTTP requests over the wire (e.g., cURL, sockets, PHP’s stream wrapper, non-blocking event loops like React, etc.).
##Note
> Flipkart Affiliate API is still in beta.

> It is recommended to save the useful data retrieved from the API to cache or database to make your API requests comply to Flipkart T&C


