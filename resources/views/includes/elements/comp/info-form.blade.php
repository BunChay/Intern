
<?php
    $slideInfo = array(

        'home'  => array(
            'header1' => false,
            'header' => true, 
            'text' => true,
            'img' => false,
            'nor-text' => false,
            'nor-text1' => false,
            'nor-text2' => false,
            'color'=>	'#EEEEEE',
            'nor-text3' => false,
        ),

        'about'  => array(
           'header1' => false,
            'header' => true, 
            'text' => true,
            'img' => false,
            'nor-text' => false,
            'nor-text1' => false,
            'nor-text2' => false,
            'color'=>	'#EEEEEE',
            'nor-text3' => false,
        ),

         'our-work'  => array(
           'header1' => false,
            'header' => true, 
            'text' => true,
            'img' => false,
            'nor-text' => false,
            'nor-text1' => false,
            'nor-text2' => false,
            'color'=>	'#EEEEEE',
            'nor-text3' => false,
        ),

         '2030'  => array(
            'header1' => false,
            'header' => true, 
            'text' => true,
            'img' => false,
            'nor-text' => false,
            'nor-text1' => false,
            'nor-text2' => false,
            'color'=>	'#EEEEEE',
            'nor-text3' => false,
            
        ),
         'community'  => array(
            'header1' => false,
            'header' => false, 
            'text' => false,
            'img' => false,
            'nor-text' => false,
            'nor-text1' => false,
            'nor-text2' => false,
            'color'=>	'transparent',
            'nor-text3' => false,
        ),
        'pp-tech'  => array(
            'header1' => false,
            'header' => false, 
            'text' => false,
            'img' => false,
            'nor-text' => false,
            'nor-text1' => false,
            'nor-text2' => false,
            'color'=>	false,
            'nor-text3' => false,
        ),
        'blog'  => array(
            'header1' => false,
            'header' => false, 
            'text' => false,
            'img' => false,
            'nor-text' => false,
            'nor-text1' => false,
            'nor-text2' => false,
            'color'=>	false,
            'nor-text3' => false,
        ),

    );

    $slideByPage = $slideInfo[$page_name]

?>


<section class="hire-us" style="background-image:url('{{ asset('/img/'.$slideByPage['img']) }}');background-color: {{ $slideByPage['color'] }} ;" id="hu">
	<div class="blog">
        @if($slideByPage['header'])
		<div class="title">
			<p>Hire Us</p>
			<hr>
		</div>
        @endif
        @if($slideByPage['header1'])
		<div class="title">
			<p>How To Get Involved</p>
			<hr>
		</div>
        @endif
        @if($slideByPage['text'])
            <p>Let’s build a great product together</p>
            <p>Get in touch with us</p>
        @endif
        @if($slideByPage['nor-text1'])
            <p>Let’s build a great product together</p>
            <p> Get in touch with us</p>
        @endif
         @if($slideByPage['nor-text2'])
            <p style="font-weight:bold;font-size:1.5em;">​​We primarily build our own ideas with our own funds. We sometimes partner with market access</p>
        @endif
        @if($slideByPage['nor-text3'])
            <br>
            <u style="font-size:20px">Get in Touch With us</u>
            <br><br>
        @endif
		<div class="form-field">
			<div class="row">
				<div class="col-md-6 my-space1">
					<input type="text" name="" placeholder="NAME">
				</div>
				<div class="col-md-6 text-left my-space2">
					<input type="text" name="" placeholder="YOUR E-MAIL">
				</div>
			</div>
			<div class="row txtarea">
				<div class="col-md-12 text-left">
					<textarea placeholder="TELL US ABOUT YOUR PROJECT" ></textarea>
				</div>
			</div>
			<div class="text-left">
				<input type="checkbox" name="">
				<label style="padding-top:10px;">subscribe to receive our latest insights</label>
			    <a href="#" class="btnsub">SUBMIT</a>
			</div>
            @if($slideByPage['nor-text'])
            <br><br><br>
            <p>Let’s build a great product together Get in touch with us</p>
            @endif
		</div>
	</div>
</section>