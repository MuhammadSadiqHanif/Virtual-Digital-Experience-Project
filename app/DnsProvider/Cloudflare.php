<?php
namespace App\DnsProvider;

use App\DnsProvider\DnsInterface;
use GuzzleHttp\Client;

/**
 * DNS PROVIDER
 *
 */
class Cloudflare implements DnsInterface
{
	protected $client;

	function __construct(Client $client)
	{
		$this->client = $client;
	}

	public function registerDomain($request)
	{
		$responseBody = array();

		try {
			$params = [

				'headers' => $this->headers(),

				'json' => [
					'type' => 'A',
					'name' => $request->domain,
					'content' => '138.68.57.116',
					'ttl' => 120,
					'priority' => 10,
					'proxied' => true,
				],
			];

			$response = $this->client->request('POST', 'https://api.cloudflare.com/client/v4/zones/8292a0227ee704c15c6760456f605c7e/dns_records', $params);

			$result = json_decode($response->getBody()->getContents());

			$responseBody['status'] = true;
			$responseBody['body'] = $result->result->id;
			return $responseBody;

		}
		catch (\Exception $e)
		{
			$responseBody['status'] = false;
			$responseBody['body'] = json_decode($e->getResponse()->getBody(true)->getContents())->errors[0]->message;
			return $responseBody;
		}
	}

	public function deleteDomain($siteSetting)
	{
		try {
			$params = [

				'headers' => $this->headers(),
			];
			
			$this->client->request('DELETE', 'https://api.cloudflare.com/client/v4/zones/8292a0227ee704c15c6760456f605c7e/dns_records/' . $siteSetting->cloudflare_id, $params);
		}
		catch (\Exception $e)
		{
			return false;
		}
	}

	protected function headers()
	{
		return [
			'Content-Type' => 'application/json',
			'X-Auth-Email' => 'zainzulifqar21@gmail.com',
			'X-Auth-Key' => '7e2c9b3b98dc1c9764572ede290edb11c3285',
		];
	}
}