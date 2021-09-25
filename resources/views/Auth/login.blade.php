@extends('base')

@section('content')
<body class="form-v4">
	<div class="page-content">
		<div class="form-v4-content">
			<form class="form-detail" action="#" method="post" id="myform">
				<h2 class="form-title">Start investing on primeCROWD</h2>
				<div class="social-login">
                    <div class="btn-group offset-md-2 social-login-item">
                        <button type="button" 
                        class="btn btn-primary dropdown-toggle-split linkedin-icon-button">
                            <i class="fab fa-linkedin-in linkedin-icon"></i>
                          </button>
                        <button type="button" class="btn btn-primary btn-rounded linkedin">
                            Sign in with linkedin
                        </button>
                    </div>
                    <div class="btn-group offset-md-2 social-login-item">
                        <button type="button" 
                        class="btn btn-primary dropdown-toggle-split google-icon-button">
                            <i class="fab fa-google"></i>
                          </button>
                        <button type="button" class="btn btn-primary btn-rounded google">
                            Sign in with Google
                        </button>
                    </div>
				</div>
                <hr>
                <div class="col-md-8 offset-md-2">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Saluation</label>
                        <div class="col-sm-3 ">

                            <div class="form-radio">
                                <label class="form-check-label">
                                <input type="radio" class="form-check-input radio-button" name="saluations" id="mr" value="" checked> Mr. </label>
                            </div>
                        </div>
                        
                        <div class="col-sm-3 ">

                            <div class="form-radio">
                                <label class="form-check-label">
                                <input type="radio" class="form-check-input radio-button" name="saluations" id="Mrs/Ms" value="option2"> Mrs/Ms </label>
                            </div>
                        </div>

                        <div class="col-sm-3 ">

                            <div class="form-radio">
                                <label class="form-check-label">
                                <input type="radio" class="form-check-input radio-button" name="saluations" id="mx" value="option2"> Mx </label>
                            </div>
                        </div>
                    </div>
                    <div class="register-form">
                        <div class="form-row ">
                            <input type="text" name="first_name" class="input-class input-text" placeholder="First Name"required>
                        </div>
                        <div class="form-row">
                            <input type="text" name="last_name" class="input-class input-text" placeholder="Last Name"required>
                        </div>
                        <div class="form-row">
                            <input type="password" name="password" class="input-class input-text" placeholder="Password (min 8 characters)" required>
                        </div>
                        <div class="form-row">
                            <input type="password" name="password_cofirmation" class="input-class input-text" placeholder="Confirm Password" required>
                        </div>
                    </div>
                    <div class="signup-div">
                        <button type="button" class="btn btn-primary btn-rounded signup-btn">
                            Sign Up
                        </button>
                        <p class="signup-msg">By signing up I agree to Terms of Service and Privacy Policy</p>
                    </div>
                </div> 
				<div class="form-checkbox">
					<label class="container"><p>I agree to the <a href="#" class="text">Terms and Conditions</a></p>
					  	<input type="checkbox" name="checkbox">
					  	<span class="checkmark"></span>
					</label>
				</div>
				<div class="form-row-last">
					<input type="submit" name="register" class="register" value="Register">
				</div>
			</form>
            <div class="form-left">
				<div class="top-part">
                    <div class="top-item">
                        <p class="item-title">2200+</p>
                        <p class="item-content">Investors</p>
                    </div>
                    <div class="top-item">
                        <p class="item-title">2300+</p>
                        <p class="item-content">startup funded</p>
                    </div>
                    <div class="top-item">
                        <p class="item-title">34</p>
                        <p class="item-content">startup cleaned</p>
                    </div>
                </div>
                <hr>
				<div class="middle-part">
                    <p class="middle-title">Some of your advantages with us</p>
                    <ul class="middle-ul">
                        <li class="middle-item"><i class="fas fa-check green-tick"></i>Invest in equity</li>
                        <li class="middle-item"><i class="fas fa-check green-tick"></i>Network with peers</li>
                        <li class="middle-item"><i class="fas fa-check green-tick"></i>Invest Hands on</li>
                        <li class="middle-item"><i class="fas fa-check green-tick"></i>Venture Capital grade startups</li>
                    </ul>
                </div>
                <hr>
                <div class="bottom-part">
                    <p class="bottom-title">What do our Business Angels say?</p>
                    <p class="bottom-content">"Specialization (in my case software and internet companies) is helpful in the search and evaluation of startup investments. Furthermore, in my opinion, the specific customer benefit of a product, as well as its unique selling proposition and scalability, are of special importance. I also check the "fit" of the founding team. These are the first priorities for me".</p>
                    <div class="investor-part">
                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <circle cx="25" cy="25" r="25" fill="url(#pattern0)"/>
                            <defs>
                            <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                            <use xlink:href="#image0" transform="scale(0.01)"/>
                            </pattern>
                            <image id="image0" width="100" height="100" xlink:href="data:image/png;base64,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"/>
                            </defs>
                        </svg>
                            
                        <div class="investor-body">
                            <p class="bottom-title">Investor</p>
                            <p class="bottom-content">Business angel at startup 1, startup 2</p>
                        </div>
                    </div>
                </div>
			</div>
		</div>
	</div>
	@include('inc.scripts')
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
@endsection

