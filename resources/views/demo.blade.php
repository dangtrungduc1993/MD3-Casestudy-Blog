<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<button>Show Product</button>
<table border="1px">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Full name</th>
    </tr>
    </thead>
    <tbody>

    </tbody>
</table>

</body>
</html>
<script>
    $(document).ready(function (){
        $('button').on('click',showProduct);
        function showProduct() {
            $.ajax({
                url:'https://api.github.com/users/doviethung2712/repos',
                method:'get',
                success:(function(response){
                    display(response);

                }),
                error:function (error){
                    console.log(error)
                }

            })
        }


        function display(response){
            let str = "";
            for (let i = 0; i < response.length; i++) {
                str += `<tr>
                                <td>${response[i].created_at}</td>
                                <td>${response[i].updated_at}</td>
                                <td><a href="${response[i].clone_url}">${response[i].full_name}</a></td>
                            </tr>`;
            }
            $("tbody").html(str);
        }
    })
</script>
