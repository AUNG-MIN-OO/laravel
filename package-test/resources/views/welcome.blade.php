<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Package test</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 my-5">
                <form action="{{ route("upload") }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="Choose Photo"></label>
                        <input type="file" name="photo">
                    </div>
                    <button class="btn btn-primary">submit</button>
                </form>
            </div>
            <div class="border border-faded rounded bg-white">
                <h4>Photos</h4>
                <div class="card-column">
                    @foreach(\Illuminate\Support\Facades\File::files('edited') as $photo)
                        <div class="card">
                            <img src="{{ asset($photo) }}" alt="">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</body>
</html>
