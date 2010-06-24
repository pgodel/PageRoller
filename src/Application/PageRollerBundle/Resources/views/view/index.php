<?php $view->extend('PageRollerBundle::layout') ?>

<div style="float: right"><a href="?reload" title="Next: <?php echo $url ?>">Next</a></div><div>Viewing <a href="<?php echo $url ?>" target="_blank" ><?php echo $url ?></a></div>
<iframe style="border: 0; margin: 0; border-top: #000 1px solid" width="100%" height="800" src="<?php echo $url?>"></iframe>