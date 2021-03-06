<?php if (!defined('INTEL')) die('go away'); ?>

<!-- Uploader -->
<div class="container">

    <h4>We need your help!</h4>
    <div class="panel panel-default">
	<div class="panel-body">
	    <p>
		Please be active reporting meaningful intel (inlcuding a system name) through our coalition and blue intel channels.<br>
		In addition we need volunteers running the <i><?=$cfg_alliance_name?> Intel Reporter</i>. If nobody uploads intel (keep an eye on the <i>Uploader</i> count on the map) our map will stay empty. 
	    </p>
	</div>
    </div>

    <h4><?=$cfg_alliance_name?> Intel Reporter</h4>
    <div class="panel panel-default">
	<div class="panel-body">
	    <p>
		The <i><?=$cfg_alliance_name?> Intel Reporter</i> is a Windows tool uploading data from in-game intel channels to this website.<br>
		Please keep it running while your Eve client is active and accept any updates distributed through its auto-update mechanism.
	    </p>
<p>
	    <strong>Download: <a href="<?=$cfg_intel_download_link?>"><?=$cfg_alliance_name?> Intel reporter</a></strong> (<a href="https://github.com/IslayTzash/EveIntelReporter">source code</a>) forked from the original of <a href="http://evewho.com/pilot/Serinus+Gareth">Serinus Gareth</a>.
</p>
<p>
<strong>Note</strong>: If you're paranoid and build from source, change the DownloadFile url in main/BraveIntelReporter/Configuration.cs to http://52.25.48.246/slyce/intelGlobalConfig.xml.
</p>
	</div>
    </div>

    <div class="panel panel-success">
	<div class="panel-heading">
	    <h3 class="panel-title">Auth Token</h3>
	</div>
	<div class="panel-body text-center">
	    <h6><?php echo authUploaderToken(); ?></h6>
	    <small>The auth token listed above will expire in case you don't login into this site for some time.</small>
	</div>
    </div>

</div>
<!-- Uploader -->
