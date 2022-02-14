<?php

use yii\helpers\Url;
use yii\helpers\StringHelper;
use yii\widgets\LinkPager;
use backend\models\Posts;

/* @var $this yii\web\View */

$pos = Posts::find()->where(['status' => 1,'id' => $id])->one();
$listPos = Posts::find()->where(['status' => 1])->one();
$listPos2 = Posts::find()->all();
$this->title = $pos->title;
?>
<div class="header-wrapper sm-padding bg-grey" style="padding: 25px;">
	<div class="container" style="width: 80%">
		<ul class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?= Url::to(['/site/']) ?>">Beranda</a></li>
			<li class="breadcrumb-item"><a href="<?= Url::to(['/posts/']) ?>">Postingan</a></li>
			<li class="breadcrumb-item active"><a href="#"><?= StringHelper::truncateWords(strip_tags($pos->title), 5)?></a></li>
		</ul>
	</div>
</div>
<div id="blog" class="section md-padding" style="padding-top: 50px;">

		<!-- Container -->
		<div class="container" style="width: 80%">

			<!-- Row -->
			<div class="row">

				
			  <!-- Start Blog Area -->
			  <main id="main" class="col-md-8">
			    <div class="blog-inner area-padding">
			        <div class="row">
			          <!-- Start Left Blog -->
					<h3 style="color: #ff4d4d; font-size: 50px; font-family: Garamond"><?= $pos->title ?></h3>

			          <table width="100%" border="0">
			          	<tr>
			          		<td width="26%">
			          			<div  class="fa fa-location-arrow"; style="font-size: 15px; text-align: justify; color: #354052"> Content </div>
			          		</td>
			          		<td width="1%">&nbsp;</td>
			          		<td width="73%">
			          			<div style="font-size: 15px; text-align: justify; color: #354052"><?= $pos->content ?> </div>
			          		</td>
			          	</tr>
			          	<tr> 
							    <td>&nbsp;</td>
							    <td>&nbsp;</td>
							    <td>&nbsp;</td>
						      </tr>
			          	<tr>
			          		<td>
			          			<div class="fa fa-sticky-note-o"; style="font-size: 15px; text-align: justify; color: #354052"> Category </div>
			          		</td>
			          		<td>&nbsp;</td>
			          		<td>
			          			<div style="font-size: 15px; text-align: justify; color: #354052"><?= $pos->category ?> </div>
			          		</td>
			          	</tr>
			          	<tr>
			          		<td>
			          			<div class="fa fa-sticky-note-o"; style="font-size: 15px; text-align: justify; color: #354052"> Created Date </div>
			          		</td>
			          		<td>&nbsp;</td>
			          		<td>
			          			<div style="font-size: 15px; text-align: justify; color: #354052"><?= $pos->created_date ?> </div>
			          		</td>
			          	</tr>
			          	<tr>
			          		<td>
			          			<div class="fa fa-sticky-note-o"; style="font-size: 15px; text-align: justify; color: #354052"> Update Date </div>
			          		</td>
			          		<td>&nbsp;</td>
			          		<td>
			          			<div style="font-size: 15px; text-align: justify; color: #354052"><?= $pos->update_date ?> </div>
			          		</td>
			          	</tr>
			          </table>

			    </div>
			  </main>
			  <!-- End Blog -->
			  <aside id="aside" class="col-md-4">

				<div class="widget">
					<a href="<?= Url::to(['/posts/']) ?>"><h3 class="title">Postingan Lainnya</h3></a>
					<div class="widget-category">
						<?php foreach ($listPos2 as $info) { ?>
						<a href="<?= Url::to(['/posts/baca?id='.$info->id]) ?>"><i class="fa fa-paper-plane"></i> <?= StringHelper::truncateWords(strip_tags($info->title), 8)?></a>
                        <?php } ?>
					</div>
				</div>
			</aside>

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>