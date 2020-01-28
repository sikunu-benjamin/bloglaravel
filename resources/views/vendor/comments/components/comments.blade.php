@php
    if (isset($approved) and $approved == true) {
        $comments = $model->approvedComments;
    } else {
        $comments = $model->comments;
    }
@endphp

{{--@if($comments->count() < 1)
    <div class="alert alert-warning">There are no comments yet.</div>
@endif--}}

<ul class="list-unstyled">
    @php
        $grouped_comments = $comments->sortByDesc('created_at')->groupBy('child_id');
    @endphp
    @foreach($grouped_comments as $comment_id => $comments)
        {{-- Process parent nodes --}}
        @if($comment_id == '')
            @foreach($comments as $comment)
                @include('comments::_comment', [
                    'comment' => $comment,
                    'grouped_comments' => $grouped_comments,
                ])
            @endforeach
        @endif
    @endforeach

</ul>

@auth
    @include('comments::_form')
@elseif(config('comments.guest_commenting') == true)
    @include('comments::_form', [
        'guest_commenting' => true
    ])
@else
    <div class="card">
        <div class="card-body">
            <form action="{{ route('login') }}">

                <div class="row">
                    <div class="form-group col-12 col-md-6">
                        <input class="form-control" type="text" placeholder="Name" required>
                    </div>

                    <div class="form-group col-12 col-md-6">
                        <input class="form-control" type="text" placeholder="Email" required>
                    </div>
                </div>

                <div class="form-group">
                    <textarea class="form-control" placeholder="Comment" rows="4" required></textarea>
                </div>

                <button class="btn btn-primary btn-block" >Submit your comment</button>
            </form>
        </div>
    </div>
@endauth
