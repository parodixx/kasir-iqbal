<?php

function check_log()
{
	$ci = &get_instance();
	if (!$ci->session->userdata("username")) {
		redirect('Welcome');
	}
}
