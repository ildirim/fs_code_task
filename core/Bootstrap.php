<?php

namespace core;

foreach(glob( "plugins/*") as $plugin)
{
	require_once $plugin;
}
