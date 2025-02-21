<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Issue #54733</title>
</head>
<body>

@session('success')
    <p>Success! {{ $value }}</p>
@endsession

@session('error')
    <p>Error! {{ $value }}</p>
@endsession

@forelse($demands as $demand)
    <form method="POST" action="{{ route('demands.destroy', ['demand' => $demand]) }}">
        @csrf
        @method('DELETE')
        <p>
            <button type="submit">Remove demand #{{ $demand->id }}</button>
        </p>
    </form>
@empty
    <p>No demands</p>
@endforelse
</body>
</html>
