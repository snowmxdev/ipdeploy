<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>IP-Deploy</title>

    </head>
   
   <body>
        <div>
            <span>Enter your name:</span>
            <input type="text" id='username'>
            <button onclick="getMessage()">Get IP Address</button>
        </div>
        <div id='msg'></div>
        <div id='ip'></div>
    </body>


    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <script>
         var token = '{{csrf_field()}}'.split('value="');
         token = token[1].split('">');

        function getMessage() {
            var username = $("#username").val();
            $.ajax({
               type:'POST',
               url:'/getmsg',
               data: {
                        _token: token[0],
                        name: username,
                    },
               success:function(data) {
                    $("#msg").html(data.msg);
                    $("#ip").html(data.ip);
               }
            });
         }
    </script>
</html>
