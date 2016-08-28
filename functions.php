/**
*Search only by products
*/
function searchfilter($query) {
if ($query->is_search && !is_admin() ) {
	$query->set('post_type',array('product'));
}

	return $query;
}
