@extends('layout.common')
@section('subtitle','社員マスタ一覧')

@section('content')
<script type="text/javascript">
 function check(){
     confirm('本当に削除しますか');
 }
</script>

<form action="{{action('EmployeeController@postCtl')}}" method="post" name="frm" id="frm">
<!-- <form action="{{ url('emp_detail') }}" method="post" name="frm" id="frm"> -->
  {{ csrf_field() }}
<table border="0">
  <tr>
    <td align="right"><b> 社員コード：</b></td>
    <td>
      @if(empty($emp_sid))
        <input type="text" name="emp_sid" size="30" maxlength="20" value="">
      @else
        <input type="text" name="emp_sid" size="30" maxlength="20" value="{{$emp_sid}}">
      @endif
    </td>
  </tr>
  <tr>
    <td align="left" colspan="3"><b> 姓：</b>
      @if(empty($given_name))
        <input type="text" name="given_name" size="16" maxlength="15" value="">
      @else
        <input type="text" name="given_name" size="16" maxlength="15" value="{{$given_name}}">
      @endif
    <b> 名：</b>
    @if(empty($family_name))
      <input type="text" name="family_name" size="16" maxlength="15" value=""></td>
    @else
      <input type="text" name="family_name" size="16" maxlength="15" value="{{$family_name}}"></td>
    @endif
  </tr>
  <tr>
    <td></td>
    <td>
      <input type="submit" value="検索" name="search">
      <input type="submit" value="CSV出力" name="csv_export">
      <!-- <input type="" value="追加" name="user_add"> -->
      <input type="button" id="user_add" value="追加" onClick="window.location.href='/emp_add'">
    </td>
  </tr>
</table>
</form>
<table border='1'>
    <tr>
      <td align='right' bgcolor='#80ffff'><b>社員コード</b></td>
      <td align='right' bgcolor='#80ffff'><b>社員名</b></td>
      <td align='right' bgcolor='#80ffff'><b>社員名(フリガナ)</b></td>
      <td align='right' bgcolor='#80ffff'><b>所属部署</b></td>
      <td align='right' bgcolor='#80ffff'><b>メールアドレス</b></td>
      <td align='right' bgcolor='#80ffff'><b>更新/削除</b></td>
    </tr>
    @foreach ($employees as $employee)
      <tr>
        <td align='right'>{{$employee->emp_sid}} </td>
        <td align='right'>{{$employee->given_name . $employee->family_name}}</td>
        <td align='right'>{{$employee->furi_given_name . $employee->furi_family_name}}</td>
        <td align='right'>{{$employee->department}}</td>
        <td align='right'>{{$employee->email}}</td>
        <td align='right'><a href='emp_detail/{{$employee->emp_sid}}'>更新</a> / <a href='delete/{{$employee->emp_sid}}'>削除</a>  </td>
      </tr>
    @endforeach
</table>
{{ $employees->links() }}


@endsection
