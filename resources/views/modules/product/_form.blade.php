<div class="mb-3">
    {{ Form::label('name', null, ['class' => 'form-label']) }}
    {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter product name.']) }}
</div>
<div class="mb-3">
    {{ Form::label('slug', null, ['class' => 'form-label']) }}
    {{ Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Enter product slug.']) }}
</div>
<div class="mb-3">
    {{ Form::label('category_id', null, ['class' => 'form-label']) }}
    {{ Form::select('category_id', $categories, null, ['class' => 'form-select', 'placeholder' => 'Select Category']) }}
</div>
<div class="mb-3">
    {{ Form::label('image_file', 'Choose Image', ['class' => 'form-label']) }}
    <label for="image_file" class="d-block upload-image">
        <img src="{{ !empty($product->image) ? $product->image : 'https://upload.wikimedia.org/wikipedia/commons/1/14/No_Image_Available.jpg?20200913095930'}}" alt="" id="img-preview" loading="lazy">
        {{ Form::file('image_file', ['class' => 'd-none', 'data-target' => '#img-preview','data-text-target' => '#image']) }}
    </label>
    <!-- <input type="hidden" name="image" id="image"> -->
    <textarea name="image" id="image" class="d-none">{{ !empty($product->image) ? $product->image : null}}</textarea>
</div>