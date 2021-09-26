@extends('base')

@section('content')
<body class="form-v4">
	<div class="page-content">
		<div class="form-v4-content">
			<form class="form-detail offset-md-2" action="#" method="post" id="myform">
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
                    <div class="login-form">
                        <div class="form-row ">
                            <input type="text" name="email" class="input-class input-text" placeholder="Email"required>
                        </div>
                        <div class="form-row">
                            <input type="password" name="password" class="input-class input-text" placeholder="Password " required>
                        </div>
                    </div>
                    <div class="signup-div">
                        <button type="button" class="btn btn-primary btn-rounded signup-btn">
                            Login
                        </button>
                    </div>
                </div> 
                <hr>
			</form>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
@endsection

