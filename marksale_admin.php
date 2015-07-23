<?php
if(!is_admin())
	die('No Admin Right');
 if(isset($_POST['marksaleTrackingId']))
	 update_option('marksaleTrackingId',$_POST['marksaleTrackingId']);
 ?>
<style>
	.wrap *{
		font-family: Tahoma;
		letter-spacing: 1px;
	}

	input[type=text],textarea{
		width:100px;
		padding:5px;
	}

	input{
		padding: 7px;
	}
</style>

<div class="wrap">
	<div class="icon32" id="icon-edit"><br></div>
	<h2>Marksale Settings</h2>

	<form action="" method="post" enctype="multipart/form-data">
		<table cellpadding="5" cellspacing="5">
			<tr>
				<td><nobr>Marksale Tracking ID:</nobr></td>
				<td><input size="90" type="text" value="<?php echo get_option("marksaleTrackingId"); ?>" name="marksaleTrackingId" /></td>
				<td align="right">
					<input type="submit" value="Update" accesskey="p" tabindex="5" id="publish" class="button-primary" name="publish">
				</td>
			</tr>

		</table>


	</form>

</div>