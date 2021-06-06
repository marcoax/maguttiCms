@extends('website.app')
@section('content')
	<x-website.partials.page-header  :title="$article->menu_title"/>
	<section>
        <div class="container">
			<div class="row">
				<div class="col-12 col-md-6 col-lg-5 col-xxl-4 mx-auto login-box">
					<div class="login-box-content">
						<h4 class="login-box-title text-primary text-center">{{ $article->title }}</h4>
						@include('website.auth.form.login')
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
