<?php

namespace CDPI\Database;

use \PDO, \SplFileInfo;

use function \sprintf;

/**
 * <h1>SQLite</h1>
 * 
 * @version 0.1.0
 * @since 0.1.0
 */
class SQLite extends AbstractDatabase
	{
	//SQLiteSchema.php
	//sqlite:/opt/databases/mydb.sq3
	//sqlite::memory:
	//sqlite:

	/**
	 * @since 0.1.0
	 */
	public function __construct(SplFileInfo|string $file)
		{
		$path = ($file instanceof SplFileInfo) ? $file->getRealPath() : $file;

		$this->pdo = new PDO(sprintf('sqlite:%s', $path));

		$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
	}
