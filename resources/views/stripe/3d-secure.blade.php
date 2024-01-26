@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Complete the security step!</div>

                <div class="card-body">
                    <p>You need to follow some steps with your bank to complete this payment. Let's Go !</p>
                </div>
            </div>
        </div>
    </div>
</div>

@push('js')
<script src="https://js.stripe.com/v3/"></script>
<script>
    const stripe = Stripe('{{ config('services.stripe.key') }}');

    stripe.handleCardAction("{{ $clientSecret }}")
        .then(function(result) {
            if(result.error) {
                window.location.replace("{{ route('cancelled') }}");
            } else {
                window.location.replace("{{ route('approval') }}");
            }
        });

</script>
@endpush

@endsection
