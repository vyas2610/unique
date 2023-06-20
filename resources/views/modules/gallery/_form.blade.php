<div class="mb-3">
    {{ Form::label('title', null, ['class' => 'form-label']) }}
    {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter gallery name.']) }}
</div>

<div class="mb-3">
    {{ Form::label('image_file', 'Choose Image', ['class' => 'form-label']) }}
    <label for="image_file" class="d-block upload-image">
        <img src="{{ !empty($gallery->image) ? $gallery->image : 'https://upload.wikimedia.org/wikipedia/commons/1/14/No_Image_Available.jpg?20200913095930'}}" alt="" id="img-preview" loading="lazy">
        {{ Form::file('image_file', ['class' => 'd-none', 'data-target' => '#img-preview','data-text-target' => '#image']) }}
    </label>
    <!-- <input type="hidden" name="image" id="image"> -->
    <textarea name="image" id="image" class="d-none">{{ !empty($gallery->image) ? $gallery->image : null}}</textarea>
</div>