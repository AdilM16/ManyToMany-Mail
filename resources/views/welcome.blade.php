<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="mt-5">
        <form action="{{route('sendMail')}}" method="post" class="php-email-form container d-flex flex-column align-item-center">
            @csrf
            <div class="mb-3  d-flex flex-column align-items-center">
                <label  class="form-label  fw-bold ">Name</label>
                <input type="text" name="name" class="form-control w-25" id="exampleInputEmail1" >
            </div>
            <div class="mb-3  d-flex flex-column align-items-center">
                <label  class="form-label  fw-bold">Email</label>
                <input type="email" name="email" class="form-control w-25" id="exampleInputEmail1" >
            </div>
            <div class="mb-3  d-flex flex-column align-items-center">
                <label  class="form-label  fw-bold">Phone</label>
                <input type="text" name="phone" class="form-control w-25" id="exampleInputEmail1" >
            </div>
            <div class="mb-3  d-flex flex-column align-items-center">
                <label  class="form-label  fw-bold">Message</label>
                <textarea type="text" name="message" class="form-control w-50" id="exampleInputEmail1" ></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>