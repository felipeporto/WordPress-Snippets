<?php

function admin_logo_url() {
	return 'http://www.appdigital.com.br/';
}
add_filter( 'login_headerurl', 'admin_logo_url' );
