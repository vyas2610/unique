@if($errors->any())
<div class="alert alert-danger">
    {!! implode('', $errors->all(':message')) !!}
</div>
@endif

@if (\Session::has('success'))
<div class="alert alert-success">
    {!! \Session::get('success') !!}
</div>
@endif