@include('template.header')
<!-- <div class="container mt-5"> -->
    <h1>Posts</h1>
    <ul>
        @foreach($posts as $post)
            <li>
                <p>
                    {{ $post->title }}
              </p>
            </li>
        @endforeach
    </ul>
    <div class="d-flex">
        {{ $posts->links() }}
    </div>
<!-- </div> -->
@include('template.footer')