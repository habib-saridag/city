<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Ajax ile İL / İlçe</title>
</head>
<body>
<div class="container">
    <div class="row">

        <div class="col-md-3">
            <label for="il">İl</label>
            <select name="il" id="il" class="form-control">
                <option value="0">Seçin...</option>
                @foreach($city as $key)
                    <option value="{{$key->id}}">{{$key->title}}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-3">
            <label for="ilce">İlçe</label>
            <select name="ilce" id="ilce" class="form-control"></select>
        </div>
    </div>

</div>

<script>
    $("#il").on("change",function(){
        $.ajax("/getDistrict/"+$(this).val())
            .then((e)=> {
                console.log(e)
            var html ='<option value="">Seçin...</option>'
                e.district.forEach(( ilce )=> {
                    html+='<option value="'+ilce.id+'">'+ilce.name+'</option>'
                });
                $('#ilce').html(html)
            })

    });
</script>


</body>
</html>
