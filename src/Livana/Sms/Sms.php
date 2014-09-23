<?php
namespace Livana\Sms;

class Sms {

	protected $confg;
	protected $client;

	public function __construct($config, $client)
	{
		$this->config = $config;
		$this->client = $client;
	}

	public function send($to, $text)
	{
		$param = $this->config;
		
		!is_array($to) ? $to = array($to) : false;

		$param['to']   = $to;
		$param['text'] = iconv('UTF-8', 'UTF-8//TRANSLIT', $text);
		try {
			return $this->client->SendSms($param)->SendSmsResult;
		} catch (Exception $ex) {
			return $e;
		}
	}

	public function getCredit()
	{
		try {
			return $this->client->GetCredit($this->config)->GetCreditResult;
		} catch (Exception $ex) {
			return $e;
		}
	}

}
