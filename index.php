<?php

Kirby::plugin('keslerm/block-ai', [
	'options' => [
		'agents' => [
			"AI2Bot",
			"Ai2Bot-Dolma",
			"Amazonbot",
			"Applebot",
			"Applebot-Extended",
			"Bytespider",
			"CCBot",
			"ChatGPT-User",
			"Claude-Web",
			"ClaudeBot",
			"Diffbot",
			"FacebookBot",
			"FriendlyCrawler",
			"GPTBot",
			"Google-Extended",
			"GoogleOther",
			"GoogleOther-Image",
			"GoogleOther-Video",
			"ICC-Crawler",
			"ImagesiftBot",
			"Meta-ExternalAgent",
			"Meta-ExternalFetcher",
			"OAI-SearchBot",
			"PerplexityBot",
			"PetalBot",
			"Scrapy",
			"Timpibot",
			"VelenPublicWebCrawler",
			"Webzio-Extended",
			"YouBot",
			"anthropic-ai",
			"cohere-ai",
			"facebookexternalhit",
			"iaskspider/2.0",
			"img2dataset",
			"omgili",
			"omgilibo"
		],
		'response_text' => '',
		'response_code' => 402,
	],
	'hooks' => [
		'route:before' => function ($route, $path, $method) {
			$agent = $this->request()->header('User-Agent');

			if ($agent) {
				foreach ($this->option('keslerm.block-ai.agents') as $robot) {
					if (stripos($agent, $robot) !== false) {
						http_response_code($this->option('keslerm.block-ai.response_code'));
						die($this->option('keslerm.block-ai.response_text'));
					}
				}
			}
		}
	]
]);
