<h1>Purge all caches</h1>

<?php if ($this->done == "true"):?>
<div class="alert alert-success good">All caches have successfully been purged.</div>
<script type="text/javascript">
setTimeout(function() {
	jQuery('.good').fadeOut(3000);
}, 7000);
</script>

<?php endif; ?>

<p>Click the button below to purge all caches whose instances are defined in Mouf.</p>

<form action="purge" method="post">
	<input type="hidden" name="selfedit" value="<?php echo plainstring_to_htmlprotected($this->selfedit); ?>" />
	<button class="btn btn-danger" type="submit">Purge all caches</button>
</form>