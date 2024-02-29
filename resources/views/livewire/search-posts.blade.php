<div>
    <div class="container-fluid">
        <div class="row">
            <div style="margin: 10px">
                <label for="search">Cerca</label>
                <input type="text" wire:model.live='search' id="search">
            </div>

            @foreach ($posts as $post)
                <div style="margin:5px; width:80%" class="card" style="width: 20rem">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
