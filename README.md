# Block AI: Block known AI crawlers and bots

This is a very simple plugin to block known AI crawlers from accessing content on your site. It will return a 402 Payment 
Required status code to any that it finds.

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

## Options

* response_code - Change the HTTP response code
* response_text - Change the response text
* agents - A list of user agents to block.

## License

MIT

## Credits

- [keslerm](https://github.com/keslerm)
