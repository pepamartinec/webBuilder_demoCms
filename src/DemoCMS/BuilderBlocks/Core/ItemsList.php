<?php
namespace DemoCMS\BuilderBlocks\Core;

use WebBuilder\WebBlock;

class ItemsList extends WebBlock
{
	public static function requires()
	{
		return array(
			'items' => 'array'
		);
	}

	public static function provides()
	{
		return array(
			'item' => '{items}'
		);
	}
}