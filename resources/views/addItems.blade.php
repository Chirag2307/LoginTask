<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">{{ __('Add Items') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('itemsAdded') }}">
                            @csrf

                            <div class="form-group">
                                <label for="name">{{ __('Item Name') }}</label>
                                <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name"  required autocomplete="name" autofocus>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>

                               
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>