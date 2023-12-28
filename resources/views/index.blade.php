<!DOCTYPE html>
<html>

<head>
    <title>Bootstrap Search Box</title>
    <link rel="stylesheet" href="/css/total.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
    <div class="container center-form">
        <form class="form-search" method="post" action="/download">
            @csrf
            <div class="input-group">
                <input type="text" name="url" class="form-control input-lg" placeholder="Images URL" />
                <span class="input-group-btn">
                    <button type="submit" class="btn btn-default btn-lg">
                        <span class="glyphicon glyphicon-download-alt"></span>
                    </button>
                </span>
            </div>
            @if ($errors->any())
            <div class="alert alert-danger form-group">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </form>
    </div>
</body>

</html>