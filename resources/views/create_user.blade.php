<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<table>
{!! Form::open(['url'=>'users','method'=>'POST','files'=>true]) !!}
<tr>
  <td>{!! Form::label('account', '帳號') !!}</td>
  <td>{!! Form::text('account','') !!}</td>
</tr>
<tr>
  <td>{!! Form::label('password', '密碼') !!}</td>
  <td>{!! Form::password('password') !!}</td>
</tr>
<tr>
  <td>{!! Form::label('name', '姓名') !!}</td>
  <td>{!! Form::text('name','') !!}</td>
</tr>
<tr>
  <td>{!! Form::label('sex', '生理性別') !!}</td>
  <td>&nbsp;男{!! Form::radio('sex', 0,true) !!}
      &nbsp;女{!! Form::radio('sex', 1,false) !!}</td>
</tr>
<tr>
  <td>{!! Form::label('birthday', '生日') !!}</td>
  <td>{!! Form::date('birthday',$today) !!}</td>
</tr>
<tr>
  <td>{!! Form::label('telephone', '市內電話') !!}</td>
  <td>{!! Form::text('phoneZone','') !!}</td>
  <td>{!! Form::text('telephone','') !!}</td>
</tr>
<tr>
  <td>{!! Form::label('cellphone', '手機號碼') !!}</td>
  <td>+{!! Form::select('MCC', $MCC) !!}</td>
  <td>{!! Form::text('cellphone','') !!}</td>
</tr>
<tr><td>{!! Form::label('address','現居地址') !!}</td>
  <td>+{!! Form::select('city', $MCC) !!}</td>
    <td>+{!! Form::select('dist', $MCC) !!}</td>
</tr>
<tr><td>{!! Form::label('email', '電子信箱') !!}</td>
</tr>
<tr><td>{!! Form::label('url', '個人網站') !!}</td>
</tr>
<tr><td>{!! Form::label('comment', '評論') !!}</td>
</tr>
</tr>
</table>



{!! Form::close() !!}

</body>
</html>
