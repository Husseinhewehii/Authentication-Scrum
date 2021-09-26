@extends('base')

@section('content')
<body class="form-v4">
	<div class="page-content">
		<div class="form-v4-content">
			<div class="form-detail offset-md-2" action="#" method="post" id="myform">
				<div class="social-login">
                    <h2 class="offset-md-2">Welcome</h2>
                    <div class="btn-group offset-md-2 social-login-item">
                        <a href="{{route('logout')}}" class="btn btn-primary btn-rounded signup-btn">
                            logout
						</a>
                    </div>
				</div>
			</div>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
@endsection

