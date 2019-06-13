<?php include "header.php";
$stmt = $conn->prepare("SELECT * FROM business_post ");
$stmt->execute();
$rows = $stmt->fetchAll();
$user_id=22;
	$i = 0 ;


?>

<!---container post--->

<div class="container m-top-200px">
	<div class="row">
		<?php foreach($rows as $row) {
		?>
		<div class="col-xs-12">
			<center>
				<div class="post-box">
					<div class="post-content">
						<div class="post-profile-info f-left">
							<img src="images/img1.jpg" class="img-responsive">
						</div>
						<div class="post-heading">
							<h4 class="font-size-15px post-heading-name"><a href="#"><?php echo $row['business_id'];?></a> <span class="ml-1 "><small class="follow-color"><i class="fa fa-plus"></i> Follow</small></span></h4>
							<a href="">

							</a>
							<ul class="rating-heart">
								<li><span class="heart-color"><i class="fa fa-heart"></i></span></li>
								<li><span class="heart-color"><i class="fa fa-heart"></i></span></li>
								<li><span class="heart-color"><i class="fa fa-heart"></i></span></li>
								<li><span><i class="fa fa-heart"></i></span></li>
								<li><span><i class="fa fa-heart"></i></span></li>
								<li><span class="color-black"><small>3.5/5</small></span>  <span class="color-black"><small>(Good)</small></span></li>
							</ul>
						</div>
						<div class="pop-up-btn post-dropdown-btn mobile-m-top-55px">
							<button class="modal-btn f-right" type="button" data-toggle="modal" data-target="#myModal"><img src="images/three-dot.png"></button>
						</div>
					</div>

					<div class="box-img">

							<img src="<?php echo $row['post_file'];?>" class="img-responsive">

						<div class="offer-width">
								<span><?php echo $row['max_offer']."%";?></span>
							</div>
					</div>

					<div class="post-content m-post-content">
						<p class="offer-par"><?php echo $row['description'];?></p>
						<button class="post-offer-btn" type="button" data-toggle="modal" data-target="#myModal">Grab Offer</button>
					</div>
								<div class="like-comment-btn position-relative ">

							<div class="btn-group btn-group-lg position-absolute left-0">
							  <button type="button" class="like-comment"><img src="images/like1.svg" id="<?php echo $i; ?>"  onclick="changeImage(<?php echo $i.','.$row['post_id'].','.$user_id;?>)" class="width-60px"></button>
							  <button type="button" class="like-comment"><img src="images/comment.svg" class="width-20px"></button>
							  <button type="button" class="like-comment"><img src="images/share.png" class="width-25px"></button>
                <!---yha se mene likha h 53,--->
                <script language="javascript">
									var i;
									var post_id;
									var user_id;
                  function changeImage(i,post_id,user_id)
                  {
                    if (document.getElementById(i).getAttribute("src") == "images/like1.svg")
										{
    									document.getElementById(i).src = "images/like2.svg";
											$.ajax({
        											url: "likes.php",
        											type: "post",
        											data: {post_id:post_id,user_id:user_id};
    												});
										}
										else
										{
    							document.getElementById(i).src = "images/like1.svg";
										}
                  }

                </script>

							</div>




							 <button type="button" class="like-comment position-absolute right-0 font-20px"><i class="fa fa-bookmark-o"></i></button>

						<div class="likes-info">
							<p class="like-comment-text"><a href="likes.php"><span><?php echo $row['likes'];?></span> likes</a>, <a class="" href="comment.php"><span><?php echo $row['comments'];?></span> Comments...</a></p>
						</div>
						<div class="comments-text">
							<p class="comments-par"><a href=""> <b>user-name </b></a> lorem ipsum adasd adadad adada</p>
						</div>
						<div class="comments-text-input">
							<input type="text" class="comment-input" placeholder="Add a Comment">
							<input type="submit" class="comment-btn" value=">">
						</div>
					</div>
				</div>
			</center>
		</div>
	<?php $i+=1; } ?>

		<div class="col-xs-12">

			<center>
				<div class="post-box">
					<div class="post-content">
						<div class="post-profile-info f-left">
							<img src="images/img1.jpg" class="img-responsive">
						</div>
						<div class="post-heading">
							<h4 class="font-size-15px post-heading-name"><a href="#">Alia Bhatt</a> <span class="ml-1 "><small class="follow-color"><i class="fa fa-plus"></i> Follow</small></span></h4></h4>
							<ul class="rating-heart">
								<li><span class="heart-color"><i class="fa fa-heart"></i></span></li>
								<li><span class="heart-color"><i class="fa fa-heart"></i></span></li>
								<li><span class="heart-color"><i class="fa fa-heart"></i></span></li>
								<li><span><i class="fa fa-heart"></i></span></li>
								<li><span><i class="fa fa-heart"></i></span></li>
								<li><span class="color-black"><small>3.5/5</small></span>  <span class="color-black"><small>(Good)</small></span></li>
							</ul>
						</div>
						<div class="pop-up-btn post-dropdown-btn mobile-m-top-55px">
							<button class="modal-btn f-right" type="button" data-toggle="modal" data-target="#myModal"><img src="images/three-dot.png"></button>
						</div>
					</div>
					<div class="box-img">
					  <video id="my_video_1" class="video-js vjs-default-skin"
      					controls preload="none" poster='http://video-js.zencoder.com/oceans-clip.jpg'
					    data-setup='{ "aspectRatio":"640:267", "playbackRates": [1, 1.5, 2] }'>
    					<source src="https://vjs.zencdn.net/v/oceans.mp4" type='video/mp4' />
						 <source src="https://vjs.zencdn.net/v/oceans.webm" type='video/webm' />
					  </video>
					  <div class="offer-width">
								<span>50%</span>
							</div>
					</div>

					<div class="post-content m-post-content">
						<p class="offer-par">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p>
						<button class="post-offer-btn" type="button" data-toggle="modal" data-target="#myModal">Grab Offer</button>
					</div>
					<div class="like-comment-btn position-relative ">

							<div class="btn-group btn-group-lg position-absolute left-0">
							  <button type="button" class="like-comment"><img src="images/like1.svg" id="<?php echo 2; ?>"  onclick="changeImage(<?php echo 2; ?>)" class="width-60px"></button>
							  <button type="button" class="like-comment"><img src="images/comment.svg" class="width-20px"></button>
							  <button type="button" class="like-comment"><img src="images/share.png" class="width-25px"></button>
							</div>



							 <button type="button" class="like-comment position-absolute right-0 font-20px"><i class="fa fa-bookmark-o"></i></button>

						<div class="likes-info">
							<p class="like-comment-text"><a href="likes.php"><span>1000</span> likes</a>, <a class="" href="comment.php"><span>250</span> Comments...</a></p>
						</div>
						<div class="comments-text">
							<p class="comments-par"><a href=""> <b>user-name </b></a> lorem ipsum adasd adadad adada</p>
						</div>
						<div class="comments-text-input">
							<input type="text" class="comment-input" placeholder="Add a Comment">
							<input type="submit" class="comment-btn" value=">">
						</div>
					</div>
				</div>
			</center>
		</div>

				<div class="col-xs-12">
			<center>
				<div class="post-box">
					<div class="post-content">
						<div class="post-profile-info f-left">
							<img src="images/img1.jpg" class="img-responsive">
						</div>
						<div class="post-heading">
							<h4 class="font-size-15px post-heading-name"><a href="#">Alia Bhatt</a> <span class="ml-1 "><small class="follow-color"><i class="fa fa-plus"></i> Follow</small></span></h4></h4>
							<ul class="rating-heart">
								<li><span class="heart-color"><i class="fa fa-heart"></i></span></li>
								<li><span class="heart-color"><i class="fa fa-heart"></i></span></li>
								<li><span class="heart-color"><i class="fa fa-heart"></i></span></li>
								<li><span><i class="fa fa-heart"></i></span></li>
								<li><span><i class="fa fa-heart"></i></span></li>
								<li><span class="color-black"><small>3.5/5</small></span>  <span class="color-black"><small>(Good)</small></span></li>
							</ul>
						</div>
						<div class="pop-up-btn post-dropdown-btn mobile-m-top-55px">
							<button class="modal-btn f-right" type="button" data-toggle="modal" data-target="#myModal"><img src="images/three-dot.png"></button>
						</div>
					</div>
					<div class="box-img">
						<div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="swiper-zoom-container">
          <img src="http://lorempixel.com/800/800/sports/1/" >
        </div>
      </div>
      <div class="swiper-slide">
        <div class="swiper-zoom-container">
          <img src="http://lorempixel.com/800/400/sports/2/">
        </div>
      </div>
      <div class="swiper-slide">
        <div class="swiper-zoom-container">
          <img src="http://lorempixel.com/400/800/sports/3/" >
        </div>
      </div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination swiper-pagination-white"></div>
    <!-- Add Navigation -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
</div>
<!-- /.carousel -->

<div class="offer-width">
								<span>50%</span>
							</div>
</div>
					<div class="post-content m-post-content">
						<p class="offer-par">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p>
						<button class="post-offer-btn" type="button" data-toggle="modal" data-target="#myModal">Grab Offer</button>
					</div>
			<div class="like-comment-btn position-relative ">

							<div class="btn-group btn-group-lg position-absolute left-0">
							  <button type="button" class="like-comment"><img src="images/like1.svg" id="<?php echo 3; ?>"  onclick="changeImage(<?php echo 3; ?>)" class="width-60px"></button>
							  <button type="button" class="like-comment"><img src="images/comment.svg" class="width-20px"></button>
							  <button type="button" class="like-comment"><img src="images/share.png" class="width-25px"></button>
							</div>



							 <button type="button" class="like-comment position-absolute right-0 font-20px"><i class="fa fa-bookmark-o"></i></button>

						<div class="likes-info">
							<p class="like-comment-text"><a href="likes.php"><span>1000</span> likes</a>, <a class="" href="comment.php"><span>250</span> Comments...</a></p>
						</div>
						<div class="comments-text">
							<p class="comments-par"><a href=""> <b>user-name </b></a> lorem ipsum adasd adadad adada</p>
						</div>
						<div class="comments-text-input">
							<input type="text" class="comment-input" placeholder="Add a Comment">
							<input type="submit" class="comment-btn" value=">">
						</div>
					</div>
				</div>
			</center>
		</div>

			</div>
	</div>
</div>
<!---end of container post--->
<?php include"footer.php"?>
