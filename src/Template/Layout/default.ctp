<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
	<?= $this->Html->meta('keywords','PHP,CakePhp,framework');  ?>
	<?= $this->Html->meta('description','This is a asume app.'); ?>
    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('style.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
	<style>
	.pull-right{
		float:right;
	}
	</style>
</head>
<body>
   <nav class="navbar navbar-expand-md navbar-dark bg-dark" style="margin-bottom:20px;">
      <a class="navbar-brand" href="#">Posts</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
				<?php echo $this->Html->link('Home','/'); ?>
          </li>
		  <li class="nav-item">&nbsp;
				<?php echo $this->Html->link('Create Posts','/posts/create'); ?>
          </li>
         <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li> -->
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
	
    <div class="container clearfix">
<div class="container">
<div class="row">
	<div class="col-lg-3 col-md-4">
		<?= $this->element('latest'); ?>
	</div>
	<div class="col-lg-9 col-md-8">
		    <?= $this->Flash->render() ?>
			<?= $this->fetch('content') ?>
	</div>
</div>
</div>
    </div>
    <footer>
    </footer>
	<?= $this->Html->script('bootstrap.min.js'); ?>
	<?= $this->Html->script('jquery-3.4.1.js'); ?>
</body>
</html>
