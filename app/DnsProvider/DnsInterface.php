<?php  

namespace App\DnsProvider;

interface DnsInterface
{
	public function registerDomain($request);

	public function deleteDomain($request);
}