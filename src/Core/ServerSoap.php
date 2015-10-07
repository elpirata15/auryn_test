<?php

namespace App\Core;

class ServerSoap
{
	protected $client;

	public function __construct(ClientSoap $client)
	{
		$this->client = $client;
	}

	public function doSomething()
	{
		return $this->client->connect();
	}
}
