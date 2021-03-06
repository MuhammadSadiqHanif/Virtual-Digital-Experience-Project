<?php

/**
 * Create unique token.
 *
 * @param  mixed  $value
 * @return \Illuminate\Support\Collection
 */
function getToken()
{
	return sprintf('%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
		mt_rand(0, 0xffff), mt_rand(0, 0xffff),
		mt_rand(0, 0xffff),
		mt_rand(0, 0x0C2f) | 0x4000,
		mt_rand(0, 0x3fff) | 0x8000,
		mt_rand(0, 0x2Aff), mt_rand(0, 0xffD3), mt_rand(0, 0xff4B)
	);
}

/**
* Replace http or https from string
*
* @return void
*/
function replaceHttps($host)
{
	$domain = env('APP_DOMAIN');
	$test = str_replace(['http://', 'https://'],'',$domain);
	return $host .'.'.$test;
}

/**
* Json decoder
*
* @return void
*/
function jsonDecode($value='')
{
	return json_decode($value);
}

/**
* IS this the same site
*
* @return void
*/
function sameSite($site = '')
{
	return replaceHttps($site) == request()->getHost();
}

/**
* Make Redirect Url in Impersonate
*
* @return void
*/
function intendedUrl($role)
{	
	if (in_array($role,[0,1])) 
    {
        $append = '/admin/dashboard';
    }
    else
    {
        $append = '/user/dashboard';
    }

	return 'https://'.session()->get('impersonate')['domain']. '.'.env('APP_DOMAIN') .$append;
}