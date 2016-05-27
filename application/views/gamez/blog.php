<!-- Games Page Starts here -->
<div class="games">
	<div class="container">
		<div class="page-path">
			<ul class="path-list">
				<li><a href="index.html">Home</a></li>&nbsp;&nbsp;/&nbsp;&nbsp;
				<li class="act">Blog</li>
			</ul>
			<p><a href="index.html">Back to Home</a></p>
			<div class="clearfix"></div>
		</div>
		<h3 class="page-header">
			Recent Blogs
		</h3>
		<div class="blog-content">
			<div class="blog-post">
				<h3><a href="single.html">Internet tend to repeat predefined chunks as necessary</a></h3>
				<div class="post-details">
					<p>Posted By <a href="#">Jackie</a> &nbsp;&nbsp; On <span>15 jan, 2015</span> &nbsp;&nbsp; Comments<span>(10)</span></p>
				</div>
				<img src="<?php echo base_url();?>assets/images/blog1.jpg" alt="">
				<h4>sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free</h4>
				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.There are many variations of passages of Lorem Ipsum available, but the majority have suffered.</p>
				<nav class="cl-effect-3"><a href="single.html">More</a></nav>
			</div>
			<div class="blog-post">
				<h3><a href="single.html">Internet tend to repeat predefined chunks as necessary</a></h3>
				<div class="post-details">
					<p>Posted By <a href="#">Jackie</a> &nbsp;&nbsp; On <span>15 jan, 2015</span> &nbsp;&nbsp; Comments<span>(10)</span></p>
				</div>
				<img src="<?php echo base_url();?>assets/images/blog2.jpg" alt="">
				<h4>sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free</h4>
				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.There are many variations of passages of Lorem Ipsum available, but the majority have suffered.</p>
				<nav class="cl-effect-3"><a href="single.html">More</a></nav>
			</div>
			<div class="blog-post">
				<h3><a href="single.html">Internet tend to repeat predefined chunks as necessary</a></h3>
				<div class="post-details">
					<p>Posted By <a href="#">Jackie</a> &nbsp;&nbsp; On <span>15 jan, 2015</span> &nbsp;&nbsp; Comments<span>(10)</span></p>
				</div>
				<img src="<?php echo base_url();?>assets/images/blog3.jpg" alt="">
				<h4>sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free</h4>
				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.There are many variations of passages of Lorem Ipsum available, but the majority have suffered.</p>
				<nav class="cl-effect-3"><a href="single.html">More</a></nav>
			</div>
		</div>
		<div class="blog-sidebar">
			<h3 class="page-header">Catgeories</h3>
			<ul class="product-categories color">
                            <?php foreach ($all_published_cat as $value) {
                                ?>
                                <li class="cat-item cat-item-60"><a href="#"><?php echo $value->cat_name; ?></a> <span class="count">(2)</span></li>
                                <p><?php echo $value->cat_description; ?></p>
                            <?php
                              }
                              ?>
                            
			 </ul>
			<h3 class="page-header">Subscribe</h3>
			<div class="subscribe">
				<h4>Subscribe For News</h4>
				<input type="text" placeholder="Email.." required="" />
				<input type="submit" value="Subscribe" />
			</div>
			<h3 class="page-header">Papular Tags</h3>
			<ul class="tags_links">
					<li><a href="#">Design</a></li>
					<li><a href="#">Branding</a></li>
					<li><a href="#">Art</a></li>
					<li><a href="#">Developing</a></li>
					<li><a href="#">CSS</a></li>
					<li><a href="#">HTML</a></li>
					<li><a href="#">Wordpress</a></li>
					<li><a href="#">Photography</a></li>
			</ul>

		</div>
		<div class="clearfix"></div>
		
	</div>
</div>