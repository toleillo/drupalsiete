			<div id="header"ª
				
				<?php if ($is_front): ?>
					<h1 id="logo"><?php print l($site_name, '', array('attributes' => array('title' => $site_name))); ?></h1>
				<?php else: ?>
					<div id="logo"><?php print l($site_name, '', array('attributes' => array('title' => $site_name))); ?></div>
				<?php endif; ?>
				
				<?php if ($page['header']): ?>
					<?php print render($page['header']); ?>
				<?php endif; ?>
						
			</div> <!-- //#header -->
			
			<?php if ($messages): ?>
		    <?php print $messages; ?>
		  <?php endif; ?>
		  
	    <?php if ($page['help']): ?>
				<?php print render($page['help']); ?>
			<?php endif; ?>
			
			<?php if ($breadcrumb): ?>
	      <div id="breadcrumb">
	      	<?php print $breadcrumb; ?>
	      </div> <!-- //#breadcrumb -->
	    <?php endif; ?>
	    
	    <?php if ($tabs): ?>
        <div id="tabs">
          <?php print render($tabs); ?>
        </div>
      <?php endif; ?>