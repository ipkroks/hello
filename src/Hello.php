<?php

namespace popov\hello;

class Hello {
	public function getMessage($message)
	{
		return "Hello " . $message;
	}

	public function getSum($one, $two)
	{
		return $one + $two;
	}
}
