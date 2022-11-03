
<!-- bread-crumb start here -->
<div class="bread-crumb">
	<img src="<?=base_url()?>assets/images/top-banner.jpg" class="img-fluid" alt="banner-top" title="banner-top">
	<div class="container">
		<div class="matter">
			<h2><span>itemary</span> Contact us</h2>
			<ul class="list-inline">
				<li>
					<a href="index-2.html">HOME</a>
				</li>
				<li>
					<a href="contactus.html">Contact us</a>
				</li>
			</ul>
		</div>
	</div>
</div>
<!-- bread-crumb end here -->

<!-- contactus start here -->
<div class="contactus">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 commontop text-center">
				<h4>
					<i class="icon_star_alt"></i>
					<i class="icon_star_alt"></i>
					<i class="icon_star_alt"></i> 
					Contact us
					<i class="icon_star_alt"></i>
					<i class="icon_star_alt"></i>
					<i class="icon_star_alt"></i>
				</h4>
				<p></p>
			</div>
			<div class="offset-2 col-md-8 col-sm-8  col-xs-12">
				<form id="submit-form" method="post" enctype="multipart/form-data" class="form-horizontal">
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="form-group">
								<input type="text" name="name" value="" id="input-name" class="form-control" placeholder="Name *" required/>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="form-group">
								<input type="email" name="email" value="" id="input-email" class="form-control" placeholder="Email *" required/>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="form-group">
								<input type="text" name="subject" value="" id="input-subject" class="form-control" placeholder="Subject *" />
							</div>
						</div>
						<div class="col-sm-12 col-md-12 col-xs-12">
							<div class="form-group">
								<i class="icofont icofont-pencil-alt-5"></i>
								<textarea name="message" id="input-enquiry" class="form-control" placeholder="Your Comment"></textarea>
							</div>
						</div>
					</div>
					<div class="buttons text-right">
						<input class="btn btn-primary" type="submit" value="Send Message" />
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- contactus end here -->

<!-- address start here -->
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="address">
				<ul class="list-inline">
					<li>
						<i class="icon_map_alt"></i>
						Sector 62,<br>
						Noida, Uttar Pradesh, 201301 
					</li>
					<li>
						<i class="fa fa-envelope-o"></i>
						info@itemary.com
					</li>
					<li>
						<i class="icon_mobile"></i>
						+91 74281 22444
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- address end here -->

<!-- map start here -->
<!-- <div class="map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.089950286261!2d77.37020801455954!3d28.627066091080277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce5336becb191%3A0xa89caf8bfb9e7068!2siThum-Noida!5e0!3m2!1sen!2sin!4v1659180331009!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div> -->
<!-- map end here -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<script type="text/javascript">
	$('#submit-form').submit(function(event){
			event.preventDefault();
		    var form = $(this);   
		    $.ajax({
		        type: "POST",
		        url: "<?=base_url()?>contact",
		        data: form.serialize(), // serializes the form's elements.
		        success: function(data)
		        {
		        if(data == 1){
		        	toastr.success("Submitted successfully");
			   //        Swal.fire({
						// 	  position: 'top-end',
						// 	  icon: 'success',
						// 	  title: 'Submitted successfully',
						// 	  showConfirmButton: false,
						// 	  timer: 1500
						// })
		      }
		      else{

		      	toastr.error("Something went wrong");
		    //   	Swal.fire({
						//   position: 'top-end',
						//   icon: 'error',
						//   title: 'Something went wrong',
						//   showConfirmButton: false,
						//   timer: 1500
						// })
		      		}
		        }
		    });
		
	})
</script>
