<?php
namespace opentrackr\lib\sqlbeans;

use \hydrogen\sqlbeans\SQLBean;

class AppCategoryBean extends SQLBean {
	protected static $tableNoPrefix = 'categories';
	protected static $tableAlias = 'cat';
	protected static $primaryKey = 'id';
	protected static $primaryKeyIsAutoIncrement = true;
	protected static $fields = array(
		'id',
		'category_name',
		'date_added'
		);
}

?>