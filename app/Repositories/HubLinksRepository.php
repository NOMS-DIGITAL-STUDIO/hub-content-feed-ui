<?php

namespace App\Repositories;

use App\Exception\VideoNotFoundException;
use App\Models\Video;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

class HubLinksRepository {
	protected $client;
	protected $locale = '';

	public function __construct()
	{
		$this->client = new Client(array(
			'base_uri' => $_ENV['API_URI'],
			'timeout' => 60.0
		));

		$this->locale = \App::getLocale();
		if ($this->locale == 'en') {
			$this->locale = '';
		}
	}

	public function getItem($id = NULL, $user_id = NULL) {
		$url = $this->locale . '/api/test-hub/' . $id;
		$headers = [];

		if ($user_id) {
			$headers['custom-auth-id'] = $user_id;
		}

		$response	= $this->client->get($url, [ 'headers' => $headers ]);

		return json_decode($response->getBody());
	}

	public function topLevelItems()
	{
		$response = $this->client->get('api/hub');

		$responseLinks = json_decode($response->getBody());

		return $responseLinks;
	}

	public function subLevelItems($tid)
	{
		$response = $this->client->get('api/hub/sub/' . $tid);

		$responseLinks = json_decode($response->getBody());

		return $responseLinks;
	}

}
