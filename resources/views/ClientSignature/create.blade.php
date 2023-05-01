@php 
    $user = auth()->user();
@endphp

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


@if (!$user->hasBeenSigned())
<form action="{{ $user->getSignatureRoute() . '&id=' . $user->employee_id }}" method="POST">

        @csrf
        <div style="text-align: center">
            <x-creagia-signature-pad />
        </div>
    </form>
    <script src="{{ asset('vendor/sign-pad/sign-pad.min.js') }}"></script>
@endif
