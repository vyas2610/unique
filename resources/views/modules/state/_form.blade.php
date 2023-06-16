<div class="mb-3">
    {{ Form::label('name', null, ['class' => 'form-label']) }}
    {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter name']) }}
</div>
<div class="mb-3">
    {{ Form::label('code', 'State Code', ['class' => 'form-label']) }}
    {{ Form::text('code', null, ['class' => 'form-control', 'placeholder' => 'Enter state code']) }}
</div>