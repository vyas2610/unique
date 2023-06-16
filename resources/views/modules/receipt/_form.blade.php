<div class="mb-3">
    {{ Form::label('order_id', 'Select order ID / invoice no. *', ['class' => 'form-label']) }}
    {{ Form::select('order_id', $orders, null, ['class' => 'form-select', 'placeholder' => 'Select order ID / invoice no.', 'required' => 'required']) }}
</div>
<div class="mb-3">
    {{ Form::label('amount', null, ['class' => 'form-label']) }}
    {{ Form::text('amount', null, ['class' => 'form-control', 'placeholder' => 'Enter amount']) }}
</div>
<div class="mb-3">
    {{ Form::label('next_date', null, ['class' => 'form-label']) }}
    {{ Form::date('next_date', null, ['class' => 'form-control', 'placeholder' => 'Enter next date']) }}
</div>
<div class="mb-3">
    {{ Form::label('remarks', null, ['class' => 'form-label']) }}
    {{ Form::textarea('remarks', null, ['class' => 'form-control', 'placeholder' => 'Enter remarks', 'rows' => 5]) }}
</div>