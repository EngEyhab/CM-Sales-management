	<section class="content-header">
		<span class="content-title"><i class="fa fa-home"></i> طلبات المنتجات</span>
		<ul class="header-btns">
			<?php if(isset($_SESSION['user']) && $_SESSION['user']->aed_sales): ?>
			<li>
				<a href="<?= App::$path ?>purchase_order_clt/add" class="btn btn-success">
					<i class="fa fa-plus-circle"></i>
					<span class="hidden-xs hidden-sm"> إضافة</span>
				</a>
			</li>
			<?php endif; ?>
			<li>
				<a href="#" class="btn btn-primary" onclick="searchToogle('form-search-wrap', event);">
					<i class="fa fa-search"></i>
					<span class="hidden-xs hidden-sm"> بحث</span>
				</a>
			</li>
			<li>
				<a href="<?= App::$path ?>purchase_order_clt/printlist" target="_blank" class="btn btn-default">
					<i class="fa fa-print"></i>
					<span class="hidden-xs hidden-sm"> طباعة</span>
				</a>
			</li>
		</ul>
	</section>
	<section class="content">
		<div class="table-responsive">
			<table class="table main-table rtl_table data-table table-striped table-hover">
			<thead>
			<tr>
				<th>&nbsp;</th>
				<th>الرقم</th>
				<th>التاريخ</th>
				<th>الموضوع</th>
				<th>العميل</th>
			</tr>
			</thead>
			<tbody>
			<?php
			foreach($purchase_orders_clt as $purchase_order_clt): ?>
				<tr>
					<td class="table-actions">
						<a href="<?= App::$path ?>purchase_order_clt/printdetails/<?= $purchase_order_clt->id ?>" target="_blank" class="btn btn-default btn-xs">طباعة</a>
				<?php if(isset($_SESSION['user']) && $_SESSION['user']->aed_articles): ?>
					<a href="<?= App::$path ?>purchase_order_clt/edit/<?= $purchase_order_clt->id ?>" class="btn btn-warning btn-xs">تعديل</a>
						<a href="#" class="btn btn-danger btn-xs" purchase_order_id="<?= $purchase_order_clt->id ?>" onclick="deleteElement(this, event);">حذف</a>
					<a href="<?= App::$path ?>purchase_order_clt/articles/<?= $purchase_order_clt->id ?>" class="btn btn-primary btn-xs">المنتجات</a>

				<?php endif; ?>
					</td>
					<td><a href="<?= App::$path ?>purchase_order_clt/articles/<?= $purchase_order_clt->id ?>"><?= $purchase_order_clt->num ?></a></td>
					<td><?= $purchase_order_clt->dt ?></td>
					<td><?= $purchase_order_clt->subject ?></td>
					<td><a href="<?= App::$path ?>client/show/<?= $purchase_order_clt->client_id ?>"><?= $purchase_order_clt->client_name ?></a></td>

				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
		</div>

	</section>
