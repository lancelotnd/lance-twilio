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


//----------------------------------------------------------------
// cls_hm_base
//----------------------------------------------------------------
class cls_hm_base extends cls_hm_aso
{
	//----------------------------------------------------------------
	// GetImagePath
	//----------------------------------------------------------------
	function GetImagePath()
	{
		return _LANG_FILE_( "images/buttons/##LANG_CODE##/" );
	}
/*
	//----------------------------------------------------------------
	// Section
	//----------------------------------------------------------------
	function SectBegin( $label = null )
	{
	?-->
	<fieldset>
	<--?php if ( $label != null ) { ?-->
		<legend class="legendTitle"><--?php echo $label; ?--></legend><center>
	<--?php } ?-->
	<--?php
	}

	function SectEnd()
	{
	?-->
	</center></fieldset>
	<--?php
	}

	function SectEndMarker()
	{
	}
*/
}

//----------------------------------------------------------------
// END OF FILE
//----------------------------------------------------------------
?>