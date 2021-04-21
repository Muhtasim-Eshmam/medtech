<html>
    <head>
        <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    </head>
    <body>
        <form action="{{route('add.chck')}}" method="post">

            <input type="text" name="key" id="key "placeholder="Enter Security Key">
            <input type="text" name="key" id="key "placeholder="Enter Security Key">

            <button type="submit">Press</button> <br> <br>

         
            {{-- {!! Toastr::render() !!} --}}



        </form>

        <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
        <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
        {!! Toastr::message() !!}
    </body>
</html>