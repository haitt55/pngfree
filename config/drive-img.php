<?php
return [
	'google_view' => 'https://drive.google.com/uc?export=view&id={id}',
	'short_link_api' => [
		'token' => env('SHORT_API_TOKEN', 'f2de74ee74c58e961c37ca69976faeec4a47f2f5'),
		'url' => 'https://123link.co/api?api={token}&url={org_url}&format=text',
	],
];