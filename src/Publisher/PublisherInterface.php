<?php namespace Tatter\Schemas\Publisher;

use Tatter\Schemas\Structures\Schema;

interface PublisherInterface
{
	/**
	 * Commit the schema to its destination
	 *
	 * @param Schema $schema
	 *
	 * @return boolean  Success or failure
	 */
	public function publish(Schema $schema): bool;
}
