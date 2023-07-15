<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, intial-scale=1.0">
  <meta http-eqiv="X-UA-Compatible" content="ie=edge">
  <title> Forget Password</title>
</head>
    <form action="{{url('/forgot_password')}}" method="POST">
    {{csrf_field()}}

    @if(session('error'))
    <div>
        {{session('error')}}
        </div>
    @endif
    @if(session('success'))
    <div>
        {{session('success')}}
        </div>
    @endif

    <input type="email" name="email" id="email" placeholder="Enter Your Email">
    <button type="submit">Submit</button>
    </form>

<body>
</body>
</html>