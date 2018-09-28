<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method='Post' action="{!! route('product2.store') !!}">
        @csrf
        <input type="text" name="txtName" value="{{ old('txtName') }}" >
         <span>  <?php if (isset($v['txtName'])) {  echo($v['txtName'][0]) ;} ?> </span> <br>
        <input type="text" name="txtPrice" value="{{ old('txtPrice') }}">
        <span>  <?php if (isset($v['txtPrice'])) {  echo($v['txtPrice'][0]) ;} ?> </span><br>
        <input type="text" name="txtCate" value="{{ old('txtCate') }}">
        <span>  <?php if (isset($v['txtCate'])) {  echo($v['txtCate'][0]) ;} ?> </span><br>
        
        <button type="reset">Reset</button>
        <button type="submit">Submit</button>
    </form>
</body>
</html>