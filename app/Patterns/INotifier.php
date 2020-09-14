<?php

namespace App\Patterns;

interface INotifier
{
	public function notify($message, $receiver);
}