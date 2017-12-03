<?php
//==>>>==>>>==>>>==>>>==>>>==>>>==>>>==>>>==>>>==>>>==>>>==>>>==>>>
//
// Address Book Script v1.18 [G110]
// Copyright (c) phpkobo.com ( http://www.phpkobo.com/ )
// Email : admin@phpkobo.com
// ID : AB201-118 [G110]
// URL : http://www.phpkobo.com/address_book.php
//
// This software is free software; you can redistribute it and/or
// modify it under the terms of the GNU General Public License
// as published by the Free Software Foundation; version 2 of the
// License.
//
//==<<<==<<<==<<<==<<<==<<<==<<<==<<<==<<<==<<<==<<<==<<<==<<<==<<<


$spec = array(

'frame' => array(
XA_CLASS=>'cls_ps_frame',
XA_AUTH=>false,
XA_DEFAULT_COMMAND=>'login'
),

'staff' => array(
XA_CLASS=>'cls_ps_staff',
XA_DEFAULT_COMMAND=>'search_init'
),

'about' => array(
XA_CLASS=>'cls_ps_about',
XA_DEFAULT_COMMAND=>'detail'
),

'people' => array(
XA_CLASS=>'cls_ps_people',
XA_DEFAULT_COMMAND=>'search_init'
),

);

?>