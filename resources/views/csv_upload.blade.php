@extends('layout.common')
@section('subtitle','CSVアップロード')

@section('content')

<form method="post" action="{{action('CsvUploadController@import')}}" enctype="multipart/form-data">
  {{ csrf_field() }}
ファイル選択：<input name="file" type="file" size="80" id="csvfile" />
<input type="submit" name="submit" value="CSV取込"  />
</form>

@endsection
