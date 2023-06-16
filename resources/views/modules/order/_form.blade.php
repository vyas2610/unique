<div class="mb-3">
    {{ Form::label('code', null, ['class' => 'form-label']) }}
    {{ Form::text('code', null, ['class' => 'form-control', 'placeholder' => 'Enter code']) }}
</div>
<div class="mb-3">
    {{ Form::label('description', null, ['class' => 'form-label']) }}
    {{ Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Enter description']) }}
</div>
<div class="mb-3">
    {{ Form::label('gst', null, ['class' => 'form-label']) }}
    {{ Form::number('gst', null, ['class' => 'form-control', 'placeholder' => 'Enter gst %']) }}
</div>