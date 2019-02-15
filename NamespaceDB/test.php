<?php
/**
  * Namespace DB
  * В файле myClass.php создайте пространство имен с классом DB (база данных) 
  * и свойствами db_name, host и методом getName. 
  * В файле test.php выведите имя базы данных и хост. 
  */

  require_once 'myClass.php';

/* использование псевдонима для класса DB в пространстве имен DB
use \DB\DB as DB;
$myDB = new DB('myStrangeDB', 'mystrangehost.com');
*/

$myDB = new \DB\DB('myStrangeDB', 'mystrangehost.com');

echo $myDB->getName();
echo '<br>';
echo $myDB->getHost();
