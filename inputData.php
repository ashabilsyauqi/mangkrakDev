<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <title>Document</title>
</head>
<body>
<div class="d-flex justify-content-center align-items-center vh-100 ">
    <div class="card border-0 bg-body-tertiary p-5 shadow p-3 mb-5 bg-white rounded">
        
        <form action="/">
            <div class="mb-3">
                <label for="nama">nama</label>
                <input type="text" name="nama" class="form-control">
            </div>
            <div class="mb-3">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="mb-3">
                <label for="phoneNumber">Whatsapp Number</label>
                <input type="tel" name="phoneNumber" class="form-control">
            </div>
            <div class="d-flex justify-content-end align-items-center">
                <button type="submit" class="btn btn-primary">submit</button>
            </div>
        </form>

    </div>
</div>
<script src="./js/bootstrap.js"></script>
</body>
</html>