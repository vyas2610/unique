<div class="mb-3">
    {{ Form::label('state_id', 'State State', ['class' => 'form-label']) }}
    {{ Form::select('state_id', $states, null, ['class' => 'form-select', 'placeholder' => 'Select State']) }}
</div>
<div class="mb-3">
    {{ Form::label('name', null, ['class' => 'form-label']) }}
    {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter name']) }}
</div>