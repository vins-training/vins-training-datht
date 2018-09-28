<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>


<style>
        .container-max{
           width:1000px;
        }
        .bt{
            float:left;
        }
        .pagination li{
            float:left;
            list-style:none;
            
            
        }
        #logout{
            color:red;
        }
        .th-color{
            background: lightblue;
        }
    </style>
</head>
<body>
<?php print_r(Session::get('locale')); ?>
    <h1>List</h1>
    <a href="car/create">them</a>
    <div class="container container-max">
   
    <table class="table  table-bordered" width='300px'>
        <tr class="th-color" >
            <th>ten</th>
            <th>gia</th>
            <th>danh muc</th>
            <th>cong cu</th>
        </tr>
        @foreach($data as $v)
        <tr>
            <td>{{$v['name']}}</td>
            <td>{{number_format($v['price'])}} <sup>đ</sup> </td>
            <td>{{$v->category->name}}</td>
            <td  >
                <form class="bt" method="post" action="{{ route('car.destroy',$v['id']) }}">
                    @method('delete')
                    @csrf
                    <button  class="btn btn-danger" type="submit">xoa</button>
                </form>
                <form  class="bt" method="post" action="{{ route('car.edit',$v['id']) }}">
                    @method('get')
                    @csrf
                    <input type="hidden" name="id" value="{{$v['id']}}">
                    <button  class="btn btn-primary" type="submit">sua</button>
                </form>
            </td>

        </tr>
        @endforeach
    </table>
   
       
       <div>
        <a id=logout href="/logout">{{ __('messages.logout') }}</a>
       </div>
 </div>
</body>
</html>