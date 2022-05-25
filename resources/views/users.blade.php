@extends("layout")

@section('content')
@foreach($users as $user)
    {{$user->first_name}} {{$user->last_name}}
    <hr>
@endforeach
{{--<p>--}}
{{--@if($users->currentPage() !== 1)--}}
{{--    <a href="?page=1">First Page</a>--}}
{{--    <a href="{{ $users->previousPageUrl() }}">Prev</a>--}}
{{--@endif--}}

{{--@if($users->currentPage() !== $users->lastPage())--}}
{{--    <a href="{{ $users->lastPage() }}">Last Page</a>--}}
{{--    <a href="{{ $users->nextPageUrl() }}">Next</a>--}}
{{--@endif--}}
{{--</p>--}}
{{ $users->links() }}
@endsection
