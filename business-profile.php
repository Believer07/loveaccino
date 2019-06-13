<?php include "header.php";
$business_id =1;
$stmt = $conn->prepare("SELECT * FROM business_profile where business_id = ?");
$stmt->execute(array($business_id));
$rows = $stmt->fetchAll();

$stmt = $conn->prepare("SELECT count(id) FROM follow where business_id = ? and rating is not NULL");
$stmt->execute(array($business_id));
$counts = $stmt->fetchAll();

$stmt = $conn->prepare("SELECT * FROM business_post where business_id = ?");
$stmt->execute(array($business_id));
$row = $stmt->fetchAll();
$i = 0;
?>

<div class="container m-top-200px">
	<div class="row">
		<div class="col-xs-12 col-md-3">
			<center>
			<div class="profile profile-border">
		    <div class="profile-img">
         <img src="<?php echo $rows[0]['img_path'];?>" alt=""/>
         <div class="file btn btn-lg btn-primary">
          Change Photo
          <input type="file" name="file"/>
          </div>
        </div>
			</div>
			<div class="m-top-20px">
				<span class="follow-following-text"><a href="">1m Followers</a></span> | <span class="follow-following-text"><a href="">1m Following</a></span>
			</div>
			<div class="m-top-20px">
				<input type="submit" class="follow-btn" value="Follow">
			</div>
		</center>
		</div>
    <div class="col-xs-12 col-md-9 ">
      <div class="name">
        <h3><?php echo $rows[0]['page_name'];?> <a href="business-page-info.php"><button class="profile-page-edit-btn">Edit Profile</button></a> | <a href="page-insight.php" class="setting-tab"><i class="fa fa-bar-chart"></i></a></h3>
        <h4><?php echo $rows[0]['page_user_name'];?> </h4>
        <ul class="profile-social-icon">
          <li><a href=""><i class="fa fa-facebook"></i></a></li>
          <li><a href=""><i class="fa fa-instagram"></i></a></li>
          <li><a href=""><i class="fa fa-linkedin"></i></a></li>
          <li><a href=""><i class="fa fa-twitter"></i></a></li>
        </ul>
          <div class="rating-stars block" id="another-rating">
                <div class="rating-stars-container">
                    <div class="rating-star">
                        <i class="fa fa-heart"></i>
                    </div>
                    <div class="rating-star">
                        <i class="fa fa-heart"></i>
                    </div>
                    <div class="rating-star">
                        <i class="fa fa-heart"></i>
                    </div>
                    <div class="rating-star">
                        <i class="fa fa-heart"></i>
                    </div>
                    <div class="rating-star">
                        <i class="fa fa-heart"></i>

                        <span class="rating-text"><?php echo $rows[0]['rating'];?>/5</span>  	<span class="rating-text"> <i class="fa fa-eye"></i> <?php echo $counts[0][0];?></span>
                    </div>

                </div>
            </div>
        <p>Time: <span>9 am</span> - <span>10 pm</span></p>
        <p>Address: <span>Indore, India</span></p>
        <p>Website: <span><a href="">www.loveaccino.com</a></span></p>
      </div>
    </div>

	</div>
</div>
<div class="container m-top-20px">
	<div class="row">
		<form>
			<div class="col-xs-12 col-md-8">
				<div class="section-1">
				<div id="file-upload-form" class="uploader f-left">
					<input id="file-upload" type="file" name="fileUpload" accept="image/*" />
			        <label for="file-upload" id="file-drag">
    				<img id="file-image" src="#" alt="Preview" class="hidden">
   					 <div id="start">
   					   <i class="fa fa-download" aria-hidden="true"></i>
            		   <div>Select a file or drag here (Image, Gif, Video)</div>
      				   <div id="notimage" class="hidden">Please select an image</div>
      				   <span id="file-upload-btn" class="btn btn-primary">Select a file</span>
    				 </div>
    				 <div id="response" class="hidden">
    				  <div id="messages"></div>
    				  <progress class="progress" id="file-progress" value="0">
    				    <span>0</span>%
    				  </progress>
    				</div>
  		    	  </label>
  				</div>
  				<textarea placeholder="Write Post" class="m-top-3per business-post-textarea"></textarea>
  				<h5 class="m-top-20px">Describe Your Offer</h5>
  				<ul class="discount-info-ul">
  					<li class="width-300px">
  						<div>Offer Type</div>
  						<select class="select-field select-icon border-bottom width-300px">
  							<option>Discount Percent</option>
  							<option>Discount Amount</option>
  							<option>Buy X Get Y Discount</option>
  							<option>Spend X Get Y Off</option>
  							<option>Free Shipping</option>
  							<option>Discount Amount</option>
  						</select>
  					</li>
  					<li class="width-300px">
  						<div>Discount Percent</div>
  						<select class="select-field select-icon border-bottom width-300px">
  							<option>Discount Percent</option>
  							<option>Discount Amount</option>
  							<option>Buy X Get Y Discount</option>
  							<option>Spend X Get Y Off</option>
  							<option>Free Shipping</option>
  							<option>Discount Amount</option>
  						</select>
  					</li>
  				</ul>
  				<div class="">
  					<h5>Offer Expires</h5>
  					<ul class="expires-ul">
  						<li class="date">
  							<div class="input-group input-append date calendar" id="datePicker">
                				<input type="text" class="form-control" name="date" placeholder="mm/dd/yy" />
                				<span class="input-group-addon add-on"><span class="fa fa-calendar"></span></span>
            				</div>
        				</li>
  						<li class="m-top-20px">
  							<input type="text" placeholder="Select Time" class="time-picker">
                		</li>
  					</ul>
  				</div>
  				<div class="m-top-20px ">
  					<ul class="inline-htn">
  					<li><input type="submit" value="Preview" class="btn2"></li>
  					<li><input type="submit" value="Trendng" class="btn1"></li>

  					<li><input type="submit" value="Post" class="btn2"></li>
  					<li><div class="dropdown ">
  						<button class=" dropdown-toggle drop-btn" type="button" data-toggle="dropdown">
  							<span class="caret"></span></button>
  						<ul class="dropdown-menu">
    						<li><a href="#">Schedule</a></li>
    						<li><a href="#">Save Draft</a></li>
  						</ul>
					</div></li>
					</ul>
  				</div>
  			</div>
  			</div>

  			<div class="col-xs-12 col-md-4">
  				<h4>Search User</h4>
  				<div class="m-top-20px">
  					<input type="text" placeholder="Offer ID" class="input-field">
  				</div>
  				<div class="m-top-20px">
  					<input type="submit" value="Search" class="btn2"> <input type="submit" value="Submit" class="btn1">
  				</div>

  				<div class="m-top-20px box">
  					<div class="row">
  						<div class="col-md-3">
  							<center>
								<div class="user-profile">
									<img src="images/img1.jpg" class="img-responsive">
								</div>
							</center>
  						</div>
  						<div class="col-md-9">
  							<div class="p-left-5per">
  								<h4>Name</h4>
  							</div>
  							<div class="p-left-5per">
  								<h4>User-Name</h4>
  							</div>
  						</div>
  					</div>
  				</div>

  			</div>
		</form>
	</div>
</div>
<section>
  <div class="container-fluid">
		<div class="list-group gallery">
		<?php foreach($row as $rows) {
		?>

            <div class="col-sm-4 col-xs-6 col-md-3 col-lg-3">
                <a class="thumbnail fancybox" rel="ligthbox" href="http://placehold.it/300x320.png">
                    <img class="img-responsive"  alt="" src="<?php echo $rows['post_file'];?>" />

                </a>
                <center>
                	<button class="btn2 btn-hover-view">
                		Promote Post
                	</button>
                </center>
            </div>
          

	<?php $i+=1; } ?>
</div>

</div>
</section>
<?php include "footer.php"?>
