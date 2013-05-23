<?php
/**
 * Extends the PaginatorHelper
 */
 
App::import('Helper', 'Paginator');
 
class ExPaginatorHelper extends PaginatorHelper {
 
	/**
	 * Adds and 'asc' or 'desc' class to the sort links
	 * @see /cake/libs/view/helpers/PaginatorHelper#sort($title, $key, $options)
	 */
	function sort($title, $key = null, $options = array()) {
 
		// get current sort key & direction
		$sortKey = $this->sortKey();
		$sortDir = $this->sortDir();
 
		// add $sortDir class if current column is sort column
		if ($sortKey == $key && $key !== null) {
 
			$options['class'] = $sortDir;
 
		}
 
		return parent::sort($title, $key, $options);
 
	}
 
}