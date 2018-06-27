<?php
interface OutputInterface
{
	public function load($arr);
}
class SerializedArrayOutput implements OutputInterface
{
	public function load($arrayOfData)
	{
		return serialize($arrayOfData);
	}
}
class JsonStringOutput implements OutputInterface
{
	public function load($arrayOfData)
	{
		return json_encode($arrayOfData);
	}
}
class ArrayOutput implements OutputInterface
{
	public function load($arrayOfData)
	{
		return $arrayOfData;
	}
}

class SomeClient
{
	private $output;
	private $arr;

	public function __construct($arr)
	{
		$this->arr = $arr;
	}
	public function setOutput(OutputInterface $outputType)
	{
		$this->output = $outputType;
	}
	public function loadOutput()
	{
		return $this->output->load($this->arr);
	}
}

function pr($param)
{
	var_dump($param);
}

$client = new SomeClient(['Program' => 'Helpdesk']);

// Want an array?
$client->setOutput(new JsonStringOutput());
$data = $client->loadOutput();

pr($data);