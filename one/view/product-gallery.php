<div id="product-grid">
	<div class="txt-heading">   </div>
	<div class="product-item">
		<div class="product-image">
			<img src="data/11.jpg" id="<?php echo "3DcAM01";?>"
				class="product-img">
		</div>
		<div>
			<strong><?php echo "GOLD TICKET";?></strong>
		</div>
		<div class="product-price"><?php echo "150.00";?></div>

		<input type="button" id="add_<?php echo "3DcAM01";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "3DcAM01";?>','<?php echo "GOLD TICKET";?>','<?php echo "150.00";?>')" />

	</div>
	<div class="product-item">
		<div class="product-image">
			<img src="data/22.jpg" id="<?php echo "wristWear03";?>"
				class="product-img">
		</div>
		<div>
			<strong><?php echo "SILVER TICKET";?></strong>
		</div>
		<div class="product-price"><?php echo "130.00";?></div>

		<input type="button" id="add_<?php echo "wristWear03";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "wristWear03";?>','<?php echo "SILVER TICKET";?>','<?php echo "130.00";?>')" />
	</div>
	<div class="product-item">
		<div class="product-image">
			<img src="data/33.jpg" id="<?php echo "LPN45";?>"
				class="product-img">
		</div>
		<div>
			<strong><?php echo "BRONZE TICKET";?></strong>
		</div>
		<div class="product-price"><?php echo "100.00";?></div>

		<input type="button" id="add_<?php echo "LPN45";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "LPN45";?>','<?php echo "BRONZE TICKET";?>','<?php echo "100.00";?>')" />
	</div>
</div>