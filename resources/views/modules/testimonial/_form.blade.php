<div class="mb-3">
    {{ Form::label('name', null, ['class' => 'form-label']) }}
    {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter name']) }}
</div>
<div class="mb-3 d-flex align-items-center">
    {{ Form::label('image_file', 'Choose Image', ['class' => 'form-label flex-grow-1']) }}
    <label for="image_file" class="d-block upload-image">
        <img src="{{ !empty($testimonial->image) ? $testimonial->image : 'https://upload.wikimedia.org/wikipedia/commons/1/14/No_Image_Available.jpg?20200913095930'}}" alt="" id="img-preview" loading="lazy" style="width: 40px; height: 40px;">
        {{ Form::file('image_file', ['class' => 'd-none', 'data-target' => '#img-preview','data-text-target' => '#image', 'data-size' => 185]) }}
    </label>
    <!-- <input type="hidden" name="image" id="image"> -->
    <textarea name="image" id="image" class="d-none">{{ !empty($testimonial->image) ? $testimonial->image : null}}</textarea>
</div>
<div class="mb-3">
    {{ Form::label('comment', null, ['class' => 'form-label']) }}
    {{ Form::textarea('comment', null, ['class' => 'form-control', 'placeholder' => 'Enter comment']) }}
</div>