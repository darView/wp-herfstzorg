<?php
/**
 * Project: wp-herfstzorg
 * User:    g.scholtes@darview.com
 * Date:    02/09/18
 * Time:    09:56
 */
$location = get_site_url() . '/vacatures';
header('Location: ' . $location, true, 302); // temporary redirect
exit;