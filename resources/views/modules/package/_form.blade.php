<div class="row">
    <div class="col-sm-8 mb-3">
        <div class="card">
            <h5 class="card-header">
                Package Information
            </h5>
            <div class="card-body">
                <div class="mb-3">
                    {{ Form::label('title', null, ['class' => 'form-label']) }}
                    {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter title', 'required' => 'required']) }}
                </div>

                <div class="mb-3">
                    {{ Form::label('price', null, ['class' => 'form-label']) }}
                    {{ Form::text('price', null, ['class' => 'form-control', 'placeholder' => 'Enter price', 'required' => 'required']) }}
                </div>

                <div class="mb-3">
                    {{ Form::label('summary', null, ['class' => 'form-label']) }}
                    {{ Form::textarea('summary', null, ['class' => 'form-control', 'placeholder' => 'Enter summary']) }}
                </div>

                <div class="mb-3">
                    {{ Form::label('description', null, ['class' => 'form-label']) }}
                    {{ Form::textarea('description', null, ['class' => 'form-control editor', 'rows' => 15, 'placeholder' => 'Enter description']) }}
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-4 mb-3">
        <div class="card">
            <h5 class="card-header">Package Images</h5>
            <div class="card-body">
                <div class="row" id="package-images">
                    <div class="col-sm-4 mb-3">
                        <label for="package-image" class="d-block choose-package-images">
                            <img src="https://icons.veryicon.com/png/o/miscellaneous/o2o-middle-school-project/plus-104.png" alt="" loading="lazy">
                            <input type="file" name="" id="package-image" class="d-none">
                        </label>
                    </div>

                    @if(!empty($package->images))

                    @foreach ($package->images as $pimg)
                    <div class="col-sm-4 mb-3 p-image">
                        <div class="choose-package-images">
                            <button type="button" class="close">
                                <i class="bx bx-minus-circle"></i>
                            </button>
                            <img src="{{ $pimg->image }}" alt="" loading="lazy">
                            <textarea name="images[]" class="d-none">{{ $pimg->image }}</textarea>
                        </div>
                    </div>
                    @endforeach

                    @endif
                </div>
            </div>
        </div>

    </div>
</div>


@push('extra_scripts')
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<script>
    $(function() {
        tinymce.init({
            selector: '.editor',
            branding: false
        });
        $(document).on('click', '.p-image .close', function(e) {
            let parent = $(this).closest('.p-image');
            parent.remove();
        });
        $(document).on('change', '#package-image', function(e) {
            let [file] = e.target.files;
            let max_size = 1200;
            if (file) {
                // Ensure it's an image
                if (file.type.match(/image.*/)) {
                    // console.log("An image has been loaded");

                    // Load the image
                    var reader = new FileReader();
                    reader.onload = function(readerEvent) {
                        var image = new Image();
                        image.onload = function(imageEvent) {
                            // Resize the image
                            var canvas = document.createElement("canvas"),
                                width = image.width,
                                height = image.height;

                            if (width > height) {
                                if (width > max_size) {
                                    height *= max_size / width;
                                    width = max_size;
                                }
                            } else {
                                if (height > max_size) {
                                    width *= max_size / height;
                                    height = max_size;
                                }
                            }

                            canvas.width = width;
                            canvas.height = height;

                            canvas
                                .getContext("2d")
                                .drawImage(image, 0, 0, width, height);

                            var dataUrl = canvas.toDataURL(file.type);

                            $('#package-images').append(`
                                <div class="col-sm-4 mb-3 p-image">
                                    <div class="choose-package-images">
                                        <button type="button" class="close">
                                            <i class="bx bx-minus-circle"></i>
                                        </button>
                                        <img src="${dataUrl}" alt="" loading="lazy">
                                        <textarea name="images[]" class="d-none">${dataUrl}</textarea>
                                    </div>
                                </div>
                            `);
                        };
                        image.src = readerEvent.target.result;
                    };
                    reader.readAsDataURL(file);
                }
            }
        });
    });
</script>
@endpush