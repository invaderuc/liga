		<footer class="footer">
			<p>&copy; Company 2017</p>
		</footer>
	</div>
</body>

<script type="text/javascript">
	var base_url = '<?php echo base_url();?>'
</script>
<?php if ($this->uri->segment(1) == 'cliga'): ?>
	<script src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/liga.js'); ?>"></script>
<?php endif ?>