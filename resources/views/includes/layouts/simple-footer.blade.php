

<div class="simple-footer border-top">
	<div class="padding-section padd-left-right max">
			
		<div class="max-container no-padd need-padd">
			<div class="footer-menu">
			  	<div class="space0-xs flex-items-xs-top">
				  	<ul>
					  	<li>
							<div class="align" style="text-align:right;">
								<h4>About</h4>
							</div>
						</li>
						<li>
							<div class="align">
								<h4>Quote Request</h4>
							</div>
						</li>
						<li>
							<div class="align">
								<h4>Product & Service</h4>
							</div>
						</li>
						<li>
							<div class="align" style="text-align:left;">
								<h4>Contact Us</h4>
							</div>
						</li>
					</ul>
			  	</div>
		  	</div>

			<a class="scroll-top" href="#" ng-click="scrollToEle('')">
			   	<span class="icon-arrow-up"></span>
			</a>

	  	</div>

  	</div>
  	<div class="copy-right">

		<?php
			$startYear = 2016;
			$yearNow = '';
			if(date("Y")>$startYear)
				$yearNow = date("Y");
			$createdSine= $startYear. ' - '.$yearNow;
		?>
		{{-- <button  style="border-radius:17px;padding:5px;width:200px;background-color:#595959;border-color:#1E90FF;"><a href="#" style="color:white;">Create a free website</a></button> --}}
  		<h6 class="_text">{{ trans('content.footer.copy_right',['year' => $createdSine]) }} <a href="http://www.flexitech.io" target="_blank" class="dev_link" title="Flexitech Cambodia">Flexitech</a>.</h6>
  	</div>
</div>