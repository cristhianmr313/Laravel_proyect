<div class="card">
    <div class="card-body">
        <table class="table table-striped">
            <div class="card-header">
              <input type="text" placeholder="Buscar..." wire:model="searchTerm" wire:keydown='search'>
            </div>
        @if ($users->count())

            <thead>
                <th>id</th>
                <th>Nombre</th>
                <th>Email</th>
                <th></th>
            </thead>
            @foreach ( $users as $user )
            <tbody>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td><a  class="btn btn-primary" href="{{route('admin.users.edit',$user)}}">Editar</a></td>
               </tbody>
            @endforeach ()



        </table>
        {{$users->links()}}
        @else
            <div class="card-body">
                <strong>no hay registro</strong>
            </div>
        @endif

    </div>

</div>
