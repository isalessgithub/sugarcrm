<?php

$job_strings[] = 'accountsDaysOutstanding';
function accountsDaysOutstanding()
{
	require_once('custom/epicom/QuickBooksUtils.php');
	$qb = new QuickBooksUtils();
	return $qb->updateDaysOutstanding();
}
