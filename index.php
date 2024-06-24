<?php

Kirby::plugin('keslerm/block-ai', [
	'options' => [
		'agents' => [
			"AdsBot-Google",
			"Amazonbot",
			"anthropic-ai",
			"Applebot",
			"AwarioRssBot",
			"AwarioSmartBot",
			"Bytespider",
			"CCBot",
			"ChatGPT-User",
			"ClaudeBot",
			"Claude-Web",
			"cohere-ai",
			"DataForSeoBot",
			"Diffbot",
			"FacebookBot",
			"FriendlyCrawler",
			"Google-Extended",
			"GoogleOther",
			"GPTBot",
			"img2dataset",
			"ImagesiftBot",
			"magpie-crawler",
			"Meltwater",
			"omgili",
			"omgilibot",
			"peer39_crawler",
			"peer39_crawler/1.0",
			"PerplexityBot",
			"PiplBot",
			"scoop.it",
			"Seekr",
			"YouBot"
		],
		'response_text' => '',
		'response_code' => 402,
	],
	'hooks' => [
		'route:before' => function ($route, $path, $method) {
			$agent = $this->request()->header('User-Agent');

			if ($agent && in_array($agent, $this->option('keslerm.block-ai.agents')) ) {
				http_response_code($this->option('keslerm.block-ai.response_code'));
				die($this->option('keslerm.block-ai.response_text'));
			}
		}
	]
]);
