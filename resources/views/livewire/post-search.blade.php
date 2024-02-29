<div>
    <div class="row">
        <div class="col-4" style="margin-top:20px;margin-left:20px">
            <form class="d-flex" role="search">
                <input wire:model.live="search" id="search" class="form-control me-2" type="search" placeholder="Search"
                    aria-label="Search">
            </form>
        </div>

        <div class="row justify-content-center gap-3">
            <h1 style="text-align: center; margin-bottom:30px;margin-top:10px">Posts</h1>

            @foreach ($posts as $post)
                <x-card :title="$post->title" :author="$post->author" :content="$post->content" />
            @endforeach
        </div>
    </div>
</div>
