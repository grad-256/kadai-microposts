@if (Auth::user()->is_favorite($micropost->user_id))
    {!! Form::open(['route' => ['favorites.unfavorite', $micropost->user_id], 'method' => 'delete']) !!}
        {!! Form::submit('UnFavorite', ['class' => "btn btn-danger btn-block"]) !!}
    {!! Form::close() !!}
@else
    {!! Form::open(['route' => ['favorites.favorite', $micropost->user_id]]) !!}
        {!! Form::submit('Favorite', ['class' => "btn btn-primary btn-block"]) !!}
    {!! Form::close() !!}
@endif
