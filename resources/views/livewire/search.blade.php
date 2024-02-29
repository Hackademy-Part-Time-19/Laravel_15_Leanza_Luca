<div>
    <div class="row">
        <div class="col-4" style="margin-top:20px;margin-left:20px">
            <form class="d-flex" role="search">
                <input wire:model.live="search" id="search" class="form-control me-2" type="search" placeholder="Search"
                    aria-label="Search">
            </form>
        </div>

        <div class="row justify-content-center gap-3">
            <h1 style="text-align: center; margin-bottom:30px;margin-top:10px">Users</h1>

            @foreach ($users as $user)
                <x-card :title="$user->name" :author="$user->surname" :content="$user->email" />
            @endforeach
        </div>
    </div>
</div>

