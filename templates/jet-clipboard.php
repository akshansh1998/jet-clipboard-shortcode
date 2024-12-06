<div class="jet-clipboard" data-jet-clipboard="<?php echo htmlspecialchars($atts['copy_text'], ENT_QUOTES, 'UTF-8'); ?>">
	
	<span class="jet-clipboard-content">
		<?php echo $atts['label'] ?> 
	</span>
	<?php if ( $atts['icon'] === '1' ): ?>
		<div class="jet-listing-dynamic-field__icon is-svg-icon jet-clipboard-icon">
			<div class="jet-clipboard-icon-copy">
				<?php echo $icon. "Copy Text"?>
			</div>
			<div class="jet-clipboard-icon-copied">
				<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M14.83 4.89001L16.17 5.83001L10.36 14.21H9.02L5.78 9.67001L7.12 8.42001L9.69 10.82L14.83 4.89001Z" fill="black"/>
				</svg> Copied Successfully!!
			</div>
		</div>
	<?php endif; ?>
</div>
