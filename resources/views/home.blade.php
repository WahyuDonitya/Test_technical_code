<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        $(document).ready(function(){
            $('#segitiga_btn').click(function(){
                var number = $("#bilangan").val()
                $.ajax({
                    type: "POST",
                    data: {"number" : number},
                    url: "{{ route('segitiga') }}",
                    success: function(response){
                        alert('masuk');
                        $("#result").html(response);
                    }
                })
            })

            $('#ganjil_btn').click(function(){
                var number = $("#bilangan").val()
                $.ajax({
                    type: "POST",
                    data: {"number" : number},
                    url: "{{ route('ganjil') }}",
                    success: function(response){
                        alert('masuk');
                        $("#result").html(response);
                    }
                })
            })

            $('#prima_btn').click(function(){
                var number = $("#bilangan").val()
                $.ajax({
                    type: "POST",
                    data: {"number" : number},
                    url: "{{ route('prima') }}",
                    success: function(response){
                        alert('masuk');
                        $("#result").html(response);
                    }
                })
            })
        })
    </script>
</head>
<body>
    <h2>Inputkan Bilangan : </h2> <input type="number" name="bilangan" id="bilangan"> <br> <br>
    <button id="segitiga_btn"> Generate segitiga </button> <button id="ganjil_btn"> Generate Bilangan Ganjil </button> <button id="prima_btn"> Generate Bilangan Prima</button> <br>
    <h1>Result : </h1>

    <div class="result" id="result"></div>
</body>
</html>
