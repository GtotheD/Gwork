<div class="row">
			<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 clearpadding">
				<!-- <li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Thời trang<span class="caret"></span></a>
					<ul class="dropdown-menu" id="re-dropdown-menu">
					<?php foreach ($catalog as $value)
					{
							$name = covert_vi_to_en($value->name);
							$name = strtolower($name);
					?>
						<li><a style="color: #337ab7;padding: 10px 20px;" href="<?php echo base_url($name.'-c'.$value->id); ?>"><?php echo $value->name; ?></a></li>
					<?php } ?>
					</ul>
				</li> -->
				<div class="w3-sidebar w3-bar-block">
					<a href="#" class="w3-bar-item w3-button">Link 1</a>
					<a href="#" class="w3-bar-item w3-button">Link 2</a>
					<div class="w3-dropdown-hover">
					<button class="w3-button">Dropdown <i class="fa fa-caret-down"></i></button>
					<div class="w3-dropdown-content w3-bar-block">
					  <a href="#" class="w3-bar-item w3-button">Link</a>
					  <a href="#" class="w3-bar-item w3-button">Link</a>
					</div>
					</div>
					<a href="#" class="w3-bar-item w3-button">Link 3</a>
				</div>
			</div>
			<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 clearpadding">				
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				  <!-- Indicators -->
				  <ol class="carousel-indicators">
				    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
				  </ol>

				  <!-- Wrapper for slides -->
				  <div class="carousel-inner" role="listbox">
				  <?php foreach ($slider as  $value) { ?>
				  	<div class="item <?php if($value->sort_order=='1') echo 'active'; ?>">
				      <a href="<?php echo $value->link; ?>"><img src="<?php echo base_url(); ?>/upload/slider/<?php echo $value->image_link; ?>" alt="..."></a>
				      <div class="carousel-caption">
				      </div>
				    </div>
				  <?php } ?>
				    
				  </div>

				  <!-- Controls -->
				  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
			   </div>
			</div>
		</div>