<form action="{{ route('web.booking.store') }}" method="post" class="booking-form">
    @csrf
    <x-alert />
    <div class="form-group col-md-12 no-padding booking_location">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-6">
                <label>Name<span>*</span></label>
                <input type='text' name="name" class="form-control" placeholder="Name" required />
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6">
                <label>Email<span>*</span></label>
                <input type='email' name="email" class="form-control" placeholder="Email" required />
            </div>
        </div>
    </div>
    <div class="form-group col-md-12 no-padding">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-6">
                <label>Mobile No.<span>*</span></label>
                <input type='text' name="mobile" class="form-control" placeholder="Mobile No." required />
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6">
                <label>Date<span>*</span></label>
                <input type='date' name="date" class="form-control" required />
            </div>
        </div>
    </div>
    <div class="form-group col-md-12 no-padding">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-6 select-options">
                <label>I am traveling from?<span>*</span></label>
                <select name="city" class="form-control" required>
                    <option value="">Select City</option>
                    @foreach($cities as $index => $name)
                    <option value="{{ $name }}">{{ $name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6 select-options">
                <label>Select Package<span>*</span></label>
                {{ Form::select('package_id', $packages, @$package->id, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Select Package']) }}
            </div>
        </div>
    </div>
    <div class="form-group col-md-12 no-padding">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-6">
                <label>Adults<span>*</span></label>
                <input type="number" name="adult" class="form-control" placeholder="No. of Adults" min="1" required>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6">
                <label>Children<span>*</span></label>
                <input type="number" name="children" class="form-control" placeholder="No. of Children" min="0" required>
            </div>
        </div>
    </div>
    <div class="form-group col-md-12 no-padding">
        <button title="Book Now">Book Now</button>
    </div>
</form>