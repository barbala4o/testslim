<?php

namespace App\Base;

use Illuminate\Database\Capsule\Manager;
use PDO;

class DB extends Manager
{
//  if there is time for custom DB manager
//	/**
//	 * @var PDO
//	 */
//	private static PDO $obj;
//
//	private string $host = 'localhost';
//	private string $user = 'barbala4o';
//	private string $password = 'a5412251427';
//	private string $dbName = 'testslim';
//
//	private final function __construct() {
//		self::$obj = new PDO("mysql:host=$this->host;dbname=$this->dbName",  $this->user, $this->password);
//		//self::$obj->query()->bindParam();
//	}
//
//	public static function getInstance() {
//		if (!isset(self::$obj)) {
//			self::$obj = new DB();
//		}
//		return self::$obj;
//	}
// ..........
}