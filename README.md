# Block AI: Block known AI crawlers and bots

This is a very simple plugin to block known AI crawlers from accessing content on your site. It will return a 402 Payment 
Required status code to any that it finds.

Currently blocked agents:

```
AdsBot-Google
Amazonbot
anthropic-ai
Applebot
AwarioRssBot
AwarioSmartBot
Bytespider
CCBot
ChatGPT-User
ClaudeBot
Claude-Web
cohere-ai
DataForSeoBot
Diffbot
FacebookBot
FriendlyCrawler
Google-Extended
GoogleOther
GPTBot
img2dataset
ImagesiftBot
magpie-crawler
Meltwater
omgili
omgilibot
peer39_crawler
peer39_crawler/1.0
PerplexityBot
PiplBot
scoop.it
Seekr
YouBot
```

## Installation

### Download

Download and copy this repository to `/site/plugins/kirby-block-ai`.

### Git submodule

```
git submodule add https://github.com/keslerm/kirby-block-ai.git site/plugins/kirby-block-ai
```

### Composer

```
composer require keslerm/kirby-block-ai
```

## Setup

Works out of the box but you can customize it to configure specific response codes and text:

```
return [
    'keslerm.block-ai.response_code' => 403,
    'keslerm.block-ai.response_text' => "Go away"
]
```

## Options

* response_code - Change the HTTP response code
* response_text - Change the response text
* agents - A list of user agents to block.

## License

MIT

## Credits

- [keslerm](https://github.com/keslerm)
