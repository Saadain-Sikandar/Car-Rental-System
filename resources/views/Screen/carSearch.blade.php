@if ($cars->count() > 0)

    @foreach ($cars as $car)
        <div class="col-md-4 col-sm-6">
            <div class="card shadow-sm">
                <img height="320" src="{{ asset('car_images/' . $car->image) }}" class="card-img-top">
                <div class="card-body text-center">
                    <h5 class="fw-bold bg-black text-white p-1">{{ $car->name }}</h5>
                    <p class="bg-black text-white p-1">PKR {{ $car->price }}/day</p>
                    <div class="d-flex justify-content-center gap-2">
                        <a href="{{ route('car-details', $car->id) }}" class="btn btn-dark btn-sm">
                            View Details
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@else
    <div class="d-flex justify-content-center align-items-center p-3">
        <div>
            <h3 class="text-danger fw-semibold">⚠️ No Cars Found</h3>
        </div>
    </div>
@endif
