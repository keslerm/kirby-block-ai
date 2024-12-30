<?php

Kirby::plugin('keslerm/block-ai', [
	'options' => [
		'agents' => [
			"AI2Bot",
			"Ai2Bot-Dolma",
			"Amazonbot",
			"anthropic-ai",
			"Applebot",
			"Applebot-Extended",
			"Bytespider",
			"CCBot",
			"ChatGPT-User",
			"Claude-Web",
			"ClaudeBot",
			"cohere-ai",
			"Diffbot",
			"DuckAssistBot",
			"FacebookBot",
			"FriendlyCrawler",
			"Google-Extended",
			"GoogleOther",
			"GoogleOther-Image",
			"GoogleOther-Video",
			"GPTBot",
			"iaskspider",
			"ICC-Crawler",
			"ImagesiftBot",
			"img2dataset",
			"ISSCyberRiskCrawler",
			"Kangaroo Bot",
			"Meta-ExternalAgent",
			"Meta-ExternalFetcher",
			"OAI-SearchBot",
			"omgili",
			"omgilibot",
			"PanguBot",
			"PerplexityBot",
			"PetalBot",
			"Scrapy",
			"Sidetrade indexer bot",
			"Timpibot",
			"VelenPublicWebCrawler",
			"Webzio-Extended",
			"YouBot",
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
