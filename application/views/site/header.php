<div class="row" style="margin-top: 8px;height: 110px">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 clearpadding">
				<a href="#"><img style="max-height: 215px;width: 100%" src="<?php echo base_url(); ?>upload/banner.jpg" alt="" class="img-responsive"></a>
			</div>
		</div>
		<div class="row">
			<nav class="navbar navbar-info re-navbar" >
			  <div class="container-fluid re-container-fluid">
				<!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse re-navbar-collapse" id="bs-example-navbar-collapse-1">
			      <ul class="nav navbar-nav">
			        <li class="active"><a href="<?php echo base_url(); ?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> HOME<span class="sr-only">(current)</span></a></li>

			        <li><a href="<?php echo base_url('moi'); ?>">Mới</a></li>
			        <li><a href="<?php echo base_url('ban-chay'); ?>">Bán chạy</a></li>
			        <li><a href="<?php echo base_url('khuyen-mai'); ?>">Khuyến mại</a></li>
			        <li><a href="<?php echo base_url('gioi-thieu'); ?>">Giới thiệu</a></li>
			       </ul>
			      <ul class="nav navbar-nav navbar-right">
			        <?php $this->load->view('site/cart/cart_sh'); ?>
			        
			        <?php if (!isset($user)) { ?>
			        	<li><a href="<?php echo base_url('dang-nhap'); ?>">Đăng nhập</a></li>
			        <?php }else{ ?>
						<li class="dropdown">
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Xin chào: <?php echo $user->name; ?><span class="caret"></span></a>
				          <ul class="dropdown-menu">
				          	<li><a href="<?php echo base_url('user'); ?>">Tài khoản</a></li>
						    <li role="separator" class="divider"></li>
						    <li><a href="<?php echo base_url('user/logout'); ?>">Đăng xuất</a></li>
				          </ul>
				        </li>
			        <?php } ?>
			      </ul>
			    </div><!-- /.navbar-collapse -->
			    
			  </div><!-- /.container-fluid -->
			</nav>
		</div>