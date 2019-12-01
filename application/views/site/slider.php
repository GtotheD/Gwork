<div class="row">
			<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 clearpadding">
				<div class="panel panel-info">
					<div class="panel-body" style="padding:0px">
						<div class="list-group">
						<?php foreach ($catalog as $value)
						{
							$name = covert_vi_to_en($value->name);
							$name = strtolower($name);
						?>
							<div class="list-group">
								<a href="<?php echo base_url($name.'-c'.$value->id); ?>" class="list-group-item active">
							    <?php echo $value->name; ?>
							  	</a>
								<?php foreach ($value->sub as $val) { 
									$namesub = covert_vi_to_en($val->name);
									$namesub = strtolower($namesub);
									?>
									<a href="<?php echo base_url($namesub.'-c'.$val->id); ?>" class="list-group-item"><?php echo $val->name; ?></a>
								<?php } ?>
							</div>
						<?php } ?>
						</div>
					</div>
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
            <?php foreach ($slider as $value) { ?>
            <div class="item <?php if ($value->sort_order=='1') {
                echo 'active';
                             } ?>">
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