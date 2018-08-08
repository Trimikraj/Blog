<aside class="col-md-4 blog-sidebar">
    <div class="p-3 mb-3 bg-light rounded">
        <h4 class="font-italic">About</h4>
        <p>A blog page where you can view all the contents and comments that the users post but you need to <em>Sign In </em>to
            commit any changes to the blog, like adding a post or a comment in the post.</p>
        <p>There is <em>Archive </em>section at the sidebar to filter the posts according to their published month and year.</p>
        <p>A <em>Tag </em>section is present to highlight the post with different tags. It can be used to filter posts according
            to the tags they belong to.</p>
    </div>

    <div class="p-3">
        <h4 class="font-italic">Archives</h4>
        <ol class="list-unstyled mb-0">
            @foreach($archives as $stats)

            <a class="page-link row" href="/?month={{ $stats['month'] }}&year={{ $stats['year'] }}">
                    <span class="col-md-6"> {{ $stats['month']. ' ' .$stats['year'] }}</span>
                    <span class="badge badge-primary pull-right">{{$stats['published']}}</span> 
            </a> @endforeach
        </ol>
    </div>

    <div class="p-3">
        <h4 class="font-italic">Archives</h4>
        <ol class="list-unstyled mb-0">
            @foreach($archives as $stats)

            <a class="page-link row" href="/?month={{ $stats['month'] }}&year={{ $stats['year'] }}">
                    <span class="col-md-6"> {{ $stats['month']. ' ' .$stats['year'] }}</span>
                    <span class="badge badge-primary pull-right">{{$stats['published']}}</span> 
            </a> @endforeach
        </ol>
    </div>

</aside>
<!-- /.blog-sidebar -->