<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>


<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-6 my-3">
            <div class="card p-4 shadow">
                <h4 class="text-center mb-4">Add a Bus Trip</h4>
                <form method="POST" action="{{ route('bustrip') }}">
                    @csrf
                    <div class="form-group">
                        <label for="from_journey">From</label>
                        <input type="text" name="from_journey" id="from_journey" class="form-control" >
                    </div>
                    @error('from_journey')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="to_journey">To</label>
                        <input type="text" name="to_journey" id="to_journey" class="form-control" >
                    </div>
                    @error('to_journey')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="date_journey">Date of Journey</label>
                        <input type="datetime-local" name="date_journey" id="date_journey" class="form-control" >
                    </div>
                    @error('date_journey')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <div>
                        <button type="submit" class="btn btn-primary w-100 mt-3">Add a Journey</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>


</body>
</html>