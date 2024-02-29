<div>
    <div class="container-fluid">
        <div class="row">
            <div style="margin: 10px">
                <label for="search">Cerca</label>
                <input type="text" wire:model.live='search' id="search">
            </div>

            @foreach ($users as $user)
                <div style="margin:5px; width:80%" class="card" style="width: 20rem">
                    <div class="card-body">
                        <h5 class="card-title">{{ $user->name }}</h5>
                        <p class="card-text">{{ $user->email }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
