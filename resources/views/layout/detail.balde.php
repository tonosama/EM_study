<h5 class="article-body-inner">プロフィール詳細</h5>
<p>※は、必須入力項目です。</p>

  <div class="box1">
  <form action="" enctype="multipart/form-data" method="post" autocomplete="off">
    <table border="0">
      <tr>
        <td align="right"><b> 社員コード※</b></td>
        <td>
          @if(empty($User->emp_sid))
            <input type="text" name="emp_sid" size="30" maxlength="20" readonly value="">
          @else
            <input type="text" name="emp_sid" size="30" maxlength="20" readonly value="{{$User->emp_sid}}">
          @endif
        </td>
      </tr>
      <tr>
        <td align="right" ><b> 所属 </b></td>
        <td>
          @if(empty($User->department))
            <input type="text" name="department" size="30" maxlength="15" value="">
          @else
            <input type="text" name="department" size="30" maxlength="15" value="{{$User->department}}">
          @endif
        </td>
      </tr>
      <tr>
        <td align="right" rowspan="2" ><b> フリガナ※</b></td>
        <td><b> ｾｲ</b>
          @if(empty($User->furi_given_name))
            <input type="text" name="furi_given_name" size="27" maxlength="15" value="">
          @else
            <input type="text" name="furi_given_name" size="27" maxlength="15" value="{{$User->furi_given_name}}">
          @endif
        </td>
      </tr>
      <tr>
        <td><b> ﾒｲ</b>
          @if(empty($User->furi_family_name))
            <input type="text" name="furi_family_name" size="27" maxlength="15" value="">
          @else
            <input type="text" name="furi_family_name" size="27" maxlength="15" value="{{$User->furi_family_name}}">
          @endif
        </td>
      </tr>
      <tr>
        <td align="right" rowspan="2" ><b> 氏名※</b></td>
        <td><b> 姓</b>
          @if(empty($User->given_name))
            <input type="text" name="given_name" size="27" maxlength="15" value="">
          @else
            <input type="text" name="given_name" size="27" maxlength="15" value="{{$User->given_name}}">
          @endif
        </td>
      </tr>
      <tr>
        <td><b> 名</b>
          @if(empty($User->family_name))
            <input type="text" name="family_name" size="27" maxlength="15" value="">
          @else
            <input type="text" name="family_name" size="27" maxlength="15" value="{{$User->family_name}}">
          @endif
        </td>
      </tr>
      <tr>
        <td align="right" ><b> 生年月日 </b></td>
        <td>
          @if(empty($User->birthday))
            <input type="date" name="birthday" max="9999-12-31"  value="">
          @else
            <input type="date" name="birthday" max="9999-12-31"  value="{{$User->birthday}}">
          @endif
        </td>
      </tr>
      <tr>
        <td align="right" ><b> メールアドレス </b></td>
        <td>
          @if(empty($User->email))
            <input type="text" name="email" size="27" maxlength="15" value="">
          @else
            <input type="text" name="email" size="27" maxlength="15" value="{{$User->email}}">
          @endif
        </td>
      </tr>
      <tr>
        <td align="right" ><b> 住所 </b></td>
        <td>
          @if(empty($User->address))
            <input type="text" name="address" size="27" maxlength="15" value="">
          @else
            <input type="text" name="address" size="27" maxlength="15" value="{{$User->address}}">
          @endif
        </td>
      </tr>
    </table>
  </div>

  <div class='box2'>
    <img src=''  width='130' height='150'>
    <input type='file' name='upfile' accept='image/*' size='80' />
    <li><input type='submit' name='add_data' value='更新' /></li>
    </form>
  </div>
