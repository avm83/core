<!--ZAP-->
<input type="hidden" name="usercontext" value="notneeded"/>
<div class="element-container">
	<div class="row">
		<div class="col-md-12">
			<div class="">
				<div class="form-group row">
					<div class="col-md-3">
						<label class="control-label" for="channelid"><?php echo _("Zap Identifier") ?></label>
						<i class="fa fa-question-circle fpbx-help-icon" data-for="channelid"></i>
					</div>
					<div class="col-md-9">
						<input type="text" class="form-control" id="channelid" name="channelid" value="<?php echo $channelid ?>" tabindex="<?php echo ++$tabindex;?>">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<span id="channelid-help" class="help-block fpbx-help-block"><?php echo _("ZAP channels are referenced either by a group number or channel number (which is defined in zapata.conf).  <br><br>The default setting is <b>g0</b> (group zero).")?></span>
		</div>
	</div>
</div>
<!--END ZAP-->
