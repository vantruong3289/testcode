<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container-fuild">
        <div class="row">
            <div class="col-2">
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="#">Users</a>
                        <span class="badge badge-primary badge-pill">14</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="{{ route('questions.index') }}">Questions</a>
                        <span class="badge badge-primary badge-pill">2</span>
                    </li>
                </ul>
            </div>
            <div class="col-3"></div>
            <div class="col-7"></div>
        </div>
    </div>
</body>
</html>