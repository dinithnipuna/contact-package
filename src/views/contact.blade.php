<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contact Us</title>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
	<div class="container">
		<form action="{{ route('contact') }}" method="POST">
			{{csrf_field()}}
			<div class="field">
			  <label class="label">Name</label>
			  <div class="control">
			    <input class="input" type="text" placeholder="Text input" name="name">
			  </div>
			</div>

			<div class="field">
			  <label class="label">Email</label>
			  <div class="control has-icons-left has-icons-right">
			    <input class="input" type="email" placeholder="Email input" value="hello@" name="email">
			    <span class="icon is-small is-left">
			      <i class="fas fa-envelope"></i>
			    </span>
			  </div>
			</div>

			<div class="field">
			  <label class="label">Message</label>
			  <div class="control">
			    <textarea class="textarea" placeholder="Textarea" name="message"></textarea>
			  </div>
			</div>

			<div class="field is-grouped">
			  <div class="control">
			    <button class="button is-link">Submit</button>
			  </div>
			  <div class="control">
			    <button class="button is-text">Cancel</button>
			  </div>
			</div>
		</form>
	</div>
	<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>