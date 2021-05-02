<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dummy testing json Api</title>
    <!-- asset -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">



</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <h1 style="margin: 50px 0px;" class="text-center">data list fetch from json api-> https://jsonplaceholder.typicode.com/posts</h1>


                <!-- <ul>
                @foreach($data as $item)
                    <li>ID: {{$item['id']}}</li>
                    <li>Title: {{$item['title']}}</li>
                    <li>Body: {{$item['body']}}</li><br>
                @endforeach
                </ul> -->

                <button class="btn btn-primary m-4">BTN</button>
                <!-- table view -->
                <table id="table table-bordered" border="1">
                    <thead class="text-center">
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Body</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $item=>$value)
                        <tr>
                            <td class="text-center">{{$value['id']}}</td>
                            <td class="px-2">{{$value['title']}}</td>
                            <td class="px-2">{{$value['body']}}</td>
                        <tr>
                    </tbody>
                    @endforeach
                </table>
                <!--  -->
            </div>
        </div
    </div>



</body>
</html>


