<?php
/**
 * @package     Joomla.Module
 * @subpackage  Module.mod_customshow
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */ 


defined('_JEXEC') or die;

?>



<div class="item isotope-item even" style="">
	<!-- Article -->
	<!-- url('/siamwalla/funsecondlife/images/funsecondlife/default.jpg') -->
	<article itemscope="" itemtype="http://schema.org/Article" style="min-height: 272px; background-image: url('<?php echo $params->get('bgimg'); ?>')">
		<div class="item-image front">
		</div>
		<div class="item-show front">
			<div class="category-name">
				<a title="<?php echo $params->get('head') ;?>" href="" itemprop="genre"><?php echo $params->get('head') ;?></a>
			</div>
			<header class="article-header clearfix">
				<h2 itemprop="name" class="article-title">
					<a title="<?php echo $params->get('head') ;?>" itemprop="url" href="/siamwalla/funsecondlife/index.php?option=com_content&amp;view=article&amp;id=2:about-us&amp;catid=12&amp;Itemid=113">
						<?php echo $params->get('content') ;?>
					</a>
				</h2>
			</header>
		</div>
		<div class="item-desc back">
			<!-- Aside -->
			<!-- //Aside -->
			<section itemprop="articleBody" class="article-intro clearfix">
				<h3><?php echo $params->get('ohhead') ;?></h3>
				<?php echo $params->get('ohcontent') ;?>
				<!-- footer -->
				<!-- //footer -->
				<section class="readmore">
					<a title="<?= $params->get('ohbutton') ?>" itemprop="url" href="/siamwalla/funsecondlife/index.php?option=com_content&amp;view=article&amp;id=2:about-us&amp;catid=12&amp;Itemid=113" target="_blank">
						<span><?php echo $params->get('ohbutton') ;?></span>
					</a>
				</section>
			</section>
		</div>
	</article>
	<!-- //Article -->
</div>