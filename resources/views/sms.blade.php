<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>

    <div class="container m-5">

       

        <div class="col-md-8 offset-md-2 m-5">
            <h3 class="text-center"> Send your sms from here! </h3>

            <form action="{{ route('sent') }}" method="post">
                
                @csrf
                <label for=""> Number </label>
                <input type="text" name="number" class="form-control"> <br>
                <textarea name="message" id="" cols="30" rows="10" class="form-control"></textarea><br>
                <input type="submit" class="bg-success " value="Send Now!">
            </form>
            

        </div>
    </div>
</body>
</html>