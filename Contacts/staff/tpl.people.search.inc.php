<?php include(INC_HTML_TAG); ?>
<?php $hm->Title( __FILE__, RSTR_APP_TITLE, RSTR_PEOPLE, RSTR_SEARCH ); ?>

<head><?php include(INC_HTML_HEADER); ?></head>

<body>

<!-- [BEGIN] Container -->
<div id="container">

<?php include(INC_BODY_HEADER); ?>

<!-- [BEGIN] Main Form -->
<div id="main_div">

<?php include(INC_FORM_BEGIN); ?>

<?php include(INC_BODY_INFO); ?>

	<!-- [BEGIN] Search Criteria -->
	<?php echo $hm->SectBegin( RSTR_SEARCH_CRITERIA ); ?>

	<div style='overflow:auto;'>
	<table width='99%'>

	<tr>
		<td align="right"><?php echo RSTR_PEOPLE_ID; ?> : </td>
		<td align="left"><?php echo $hm->Zb( 'sp:def:people_id' ); ?></td>
		<td align="right"><?php echo RSTR_ACTIVE; ?> : </td>
		<td align="left"><?php echo $hm->Zb( 'sp:def:active' ); ?></td>
		<td align="right"><?php echo RSTR_FIRST_NAME; ?> : </td>
		<td align="left"><?php echo $hm->Zb( 'sp:def:first_name' ); ?></td>
	</tr>

	<tr>
		<td align="right"><?php echo RSTR_LAST_NAME; ?> : </td>
		<td align="left"><?php echo $hm->Zb( 'sp:def:last_name' ); ?></td>
		<td align="right"><?php echo RSTR_PRIMARY; ?> : </td>
		<td align="left"><?php echo $hm->Zb( 'sp:def:primary' ); ?></td>
		<td align="right"><?php echo RSTR_SECONDARY; ?> : </td>
		<td align="left"><?php echo $hm->Zb( 'sp:def:secondary' ); ?></td>
	</tr>

	<tr>
		<td align="right"><?php echo RSTR_PRIVILEGES; ?> : </td>
		<td align="left"><?php echo $hm->Zb( 'sp:def:privileges' ); ?></td>
		<td align="right"><?php echo RSTR_LANGUAGE; ?> : </td>
		<td align="left"><?php echo $hm->Zb( 'sp:def:language' ); ?></td>
		<td align="right"><?php echo RSTR_EMAIL; ?> : </td>
		<td align="left"><?php echo $hm->Zb( 'sp:def:email' ); ?></td>
	</tr>

	<tr>
		<td align="right"><?php echo RSTR_STREET1; ?> : </td>
		<td align="left"><?php echo $hm->Zb( 'sp:def:street1' ); ?></td>
		<td align="right"><?php echo RSTR_STREET2; ?> : </td>
		<td align="left"><?php echo $hm->Zb( 'sp:def:street2' ); ?></td>
		<td align="right"><?php echo RSTR_CITY; ?> : </td>
		<td align="left"><?php echo $hm->Zb( 'sp:def:city' ); ?></td>
	</tr>

	<tr>
		<td align="right"><?php echo RSTR_STATE; ?> : </td>
		<td align="left"><?php echo $hm->Zb( 'sp:def:state' ); ?></td>
		<td align="right"><?php echo RSTR_ZIP; ?> : </td>
		<td align="left"><?php echo $hm->Zb( 'sp:def:zip' ); ?></td>
		<td align="right"><?php echo RSTR_NOTE; ?> : </td>
		<td align="left"><?php echo $hm->Zb( 'sp:def:note' ); ?></td>
	</tr>

	<tr>
		<td align="right"><?php echo RSTR_COUNTRY; ?> : </td>
		<td align="left"><?php echo $hm->Zb( 'sp:def:country' ); ?></td>
		<td align="right">&nbsp;</td>
		<td align="left">&nbsp;</td>
		<td align="right">&nbsp;</td>
		<td align="right"><?php echo $hm->Button(
			array( '<>'=>'</>',
			'name'=>"_sc=_this/search_pb&",
			'src'=>'search',
			'value'=>RSTR_SEARCH,
		) ); ?></td>
	</tr>

	</table>
	</div>

	<?php echo $hm->SectEnd(); ?>
	<!-- [END] Search Criteria-->

	<!-- [BEGIN] Search Result -->
	<?php if ( $hm->Zb("def:display?") ) { ?>

	<?php echo $hm->SectBegin( RSTR_SEARCH_RESULT ); ?>

	<?php include(INC_SR_TOP_BAR); ?>

	<div style='overflow:auto;'>
	<table class='data_table'>

		<tr class='data_table_caption'>
			<th nowrap='true'><?php echo $hm->Zb('ob:rs:def:people_id'); ?>
				<?php echo RSTR_PEOPLE_ID; ?></th>
			<th><?php include(INC_SR_SELREC_HEADER); ?></th>
			<th><?php include(INC_SR_EDIT_BTN_HEADER); ?></th>
			<th><?php echo RSTR_ACTIVE; ?></th>
			<th nowrap='true'><?php echo $hm->Zb('ob:rs:def:first_name'); ?> <?php echo RSTR_FIRST_NAME; ?></th>
			<th nowrap='true'><?php echo $hm->Zb('ob:rs:def:last_name'); ?> <?php echo RSTR_LAST_NAME; ?></th>
			<th nowrap='true'><?php echo $hm->Zb('ob:rs:def:primary'); ?> <?php echo RSTR_PRIMARY; ?></th>
			<th nowrap='true'><?php echo $hm->Zb('ob:rs:def:secondary'); ?> <?php echo RSTR_SECONDARY; ?></th>
			<th nowrap='true'><?php echo $hm->Zb('ob:rs:def:privileges'); ?> <?php echo RSTR_PRIVILEGES; ?></th>
			<th nowrap='true'><?php echo $hm->Zb('ob:rs:def:language'); ?> <?php echo RSTR_LANGUAGE; ?></th>
			<th nowrap='true'><?php echo $hm->Zb('ob:rs:def:email'); ?> <?php echo RSTR_EMAIL; ?></th>
			<th nowrap='true'><?php echo $hm->Zb('ob:rs:def:street1'); ?> <?php echo RSTR_STREET1; ?></th>
			<th nowrap='true'><?php echo $hm->Zb('ob:rs:def:street2'); ?> <?php echo RSTR_STREET2; ?></th>
			<th nowrap='true'><?php echo $hm->Zb('ob:rs:def:city'); ?> <?php echo RSTR_CITY; ?></th>
			<th nowrap='true'><?php echo $hm->Zb('ob:rs:def:state'); ?> <?php echo RSTR_STATE; ?></th>
			<th nowrap='true'><?php echo $hm->Zb('ob:rs:def:zip'); ?> <?php echo RSTR_ZIP; ?></th>
			<th nowrap='true'><?php echo $hm->Zb('ob:rs:def:note'); ?> <?php echo RSTR_NOTE; ?></th>
			<th nowrap='true'><?php echo $hm->Zb('ob:rs:def:country'); ?> <?php echo RSTR_COUNTRY; ?></th>
		</tr>

		<?php while( $hm->zb('@rs:def:begin_table') ) { ?>
		<tr>
			<td style='text-align:right;'><?php echo $hm->Zb('rs:def:people_id'); ?></td>
			<?php include(INC_SR_ID_PARAM); ?>
			<?php include(INC_SR_SELREC); ?>
			<?php include(INC_SR_EDIT_BTN); ?>
			<td style='text-align:center;'><?php echo $hm->Zb('rs:def:active'); ?></td>
			<td style='text-align:left;'><?php echo $hm->Zb('rs:def:first_name'); ?></td>
			<td style='text-align:left;'><?php echo $hm->Zb('rs:def:last_name'); ?></td>
			<td style='text-align:left;'><?php echo $hm->Zb('rs:def:primary'); ?></td>
			<td style='text-align:left;'><?php echo $hm->Zb('rs:def:secondary'); ?></td>
			<td style='text-align:left;'><?php echo $hm->Zb('rs:def:privileges'); ?></td>
			<td style='text-align:left;'><?php echo $hm->Zb('rs:def:language'); ?></td>
			<td style='text-align:left;'><?php echo $hm->Zb('rs:def:email'); ?></td>
			<td style='text-align:left;'><?php echo $hm->Zb('rs:def:street1'); ?></td>
			<td style='text-align:left;'><?php echo $hm->Zb('rs:def:street2'); ?></td>
			<td style='text-align:left;'><?php echo $hm->Zb('rs:def:city'); ?></td>
			<td style='text-align:left;'><?php echo $hm->Zb('rs:def:state'); ?></td>
			<td style='text-align:left;'><?php echo $hm->Zb('rs:def:zip'); ?></td>
			<td style='text-align:left;'><?php echo $hm->Zb('rs:def:note'); ?></td>
			<td style='text-align:left;'><?php echo $hm->Zb('rs:def:country'); ?></td>
		</tr>
		<?php } ?>

	</table>
	</div>

	<?php include(INC_SR_BOTTOM_BAR); ?>

	<?php echo $hm->SectEnd(); ?>

	<?php } ?>
	<!-- [END] Search Result -->

	<?php echo $hm->SectEndMarker(); ?>

<?php include(INC_FORM_END); ?>

</div>
<!-- [END] Main Form -->

<?php include(INC_BODY_FOOTER); ?>

</div>
<!-- [END] Container -->

</body>
</html>

<?php include(INC_HTML_END); ?>