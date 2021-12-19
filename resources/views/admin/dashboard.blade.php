<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Dashboard</title>
</head>
<body>
	<h4>Admin dashboard work in progress</h4>
	<a href="{{ url('/') }}">Back to home</a>
	<br>
	 @if (Auth::check() )
                        <li>
                             <form method="post" action="{{ route('/logout') }}">
                                @csrf
                               <button class="mt-4 btn btn-info">Logout</button>
                            </form>
                        </li>
    @endif

</body>
</html>