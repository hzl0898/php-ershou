<?php 
	include_once("header.php");
?>
	<div id="page-content" class="home-page">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!-- Carousel -->
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators hidden-xs">
							<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
							<li data-target="#carousel-example-generic" data-slide-to="1"></li>
							<li data-target="#carousel-example-generic" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner">
							<div class="item active">
								<img src="<?php echo __PUBLIC__;?>/images/banner3.jpg">
								<div class="header-text hidden-xs">
									<div class="col-md-12 text-center">
									</div>
								</div>
							</div>
							<div class="item">
								<img src="<?php echo __PUBLIC__;?>/images/banner4.jpg">
								<div class="header-text hidden-xs">
									<div class="col-md-12 text-center">
									</div>
								</div>
							</div>
							<div class="item">
								<img src="<?php echo __PUBLIC__;?>/images/banner5.jpg">
								<div class="header-text hidden-xs">
									<div class="col-md-12 text-center">
									</div>
								</div>
							</div>
						</div>
						<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left"></span>
						</a>
						<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right"></span>
						</a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="heading"><h2>推荐商品</h2></div>
					<div class="products">
						<?php
						$goodsb = db_get_all("select * from goods where status=0 order by id desc limit 8"); foreach($goodsb as $row) {?>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<div class="product">
								<div class="image"><a href="goodshow.php?id=<?php echo $row['id'];?>&categoryid=<?php echo $row['categoryid'];?>">
								<?php if (!$row["img"]){?>
                                	<img src="<?php echo __PUBLIC__;?>/Upload/avatar.png"/>
								<?php }else{ ?>
									<img src="<?php echo __PUBLIC__;?>/Upload/<?php echo $row["img"];?>"/>
								<?php } ?></a>
                                </div>
								<div class="caption">
									<div class="name"><h3><a href="goodshow.php?id=<?php echo $row['id'];?>&categoryid=<?php echo $row['categoryid'];?>"><?php echo $row['title'];?></a></h3></div>
									<div class="price">$<?php echo $row['sprice'];?><span>$<?php echo $row['mprice'];?></span></div>
									<div class="rating"><div class="buttons">
									<a class="btn cart" href="addcart.php?id=<?php echo $row['id'];?>"><span class="glyphicon glyphicon-shopping-cart"></span></a>
								</div></div>
								</div>
							</div>
						</div>
                        <?php }?>
					</div>
				</div>
			</div>
		</div>
   </div>
<?php
	include("footer.php");
?>