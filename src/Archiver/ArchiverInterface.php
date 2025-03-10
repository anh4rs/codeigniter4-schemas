<?php namespace Tatter\Schemas\Archiver;

use Tatter\Schemas\Structures\Schema;

interface ArchiverInterface
{
	/**
	 * Store a copy of the schema to its destination
	 *
	 * @param Schema $schema
	 *
	 * @return boolean  Success or failure
	 */
	public function archive(Schema $schema): bool;
}
