@extends('layout.common')
@section('subtitle','社員マスタ更新')

@section('content')



<h5 class="article-body-inner">プロフィール詳細</h5>
<p>※は、必須入力項目です。</p>

  <div class="box1">
    <ul>
    @foreach ($errors->all() as $error)
      <li><font color="red">{{ @$error }}</font></li>
    @endforeach
    </ul>

  <form action="{{action('EmpDetailAddController@uplode')}}" enctype="multipart/form-data" method="post" autocomplete="off">
    {{ csrf_field() }}
    <table border="1">
      <tr>
        <td align="right"><b> 社員コード※</b></td>
        <td>
            <input type="text" name="emp_sid" size="30" maxlength="30" value="{{old('emp_sid')}}">
        </td>
      </tr>
      <tr>
        <td align="right" ><b> 所属 </b></td>
        <td>
            <input type="text" name="department" size="30" maxlength="30" value="{{old('department')}}">
        </td>
      </tr>
      <tr>
        <td align="right" rowspan="2" ><b> フリガナ※</b></td>
        <td><b> ｾｲ</b>
            <input type="text" name="furi_given_name" size="30" maxlength="30" value="{{old('furi_given_name')}}">
        </td>
      </tr>
      <tr>
        <td><b> ﾒｲ</b>
            <input type="text" name="furi_family_name" size="30" maxlength="30" value="{{old('furi_family_name')}}">
        </td>
      </tr>
      <tr>
        <td align="right" rowspan="2" ><b> 氏名※</b></td>
        <td><b> 姓</b>
            <input type="text" name="given_name" size="30" maxlength="30" value="{{old('given_name')}}">
        </td>
      </tr>
      <tr>
        <td><b> 名</b>
            <input type="text" name="family_name" size="30" maxlength="30" value="{{old('family_name')}}">
        </td>
      </tr>
      <tr>
        <td align="right" ><b> 生年月日 </b></td>
        <td>
            <input type="date" name="birthday" max="9999-12-31"  value="{{old('birthday')}}">
        </td>
      </tr>
      <tr>
        <td align="right" ><b> メールアドレス </b></td>
        <td>
            <input type="text" name="email" size="30" maxlength="30" value="{{old('email')}}">
        </td>
      </tr>
      <tr>
        <td align="right" ><b> 住所 </b></td>
        <td>
          <input type="text" name="address" size="30" maxlength="30" value="{{old('address')}}">
        </td>
      </tr>
    </table>
  <!-- </div>

  <div class='box2'> -->
    <img src=''  width='130' height='150'>
    <input type='file' name='upfile' accept='image/*' size='80' />

    <li class="button_sub"><input type='submit' name='add_data' value='更新' /></li>
    </form>
  </div>


@endsection
