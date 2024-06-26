<div>
    @if(session('success'))
        <span class="px-3 py-3 bg-green-600 text-white rounded">{{ session('success')}} </span>
    @endif
    <form class="p-5" wire:submit="createNewUser" action="">
        <input class="block rounded border border-gray-100 px-2 py1 mb-1" wire:model="name" type="text" placeholder="name">
        @error('name')
            <span class="text-red-500 text-xs">{{ $message }}</span>
        @enderror
        <input class="block rounded border border-gray-100 px-2 py1 mb-1" wire:model="email" type="text" placeholder="email">
        @error('email')
            <span class="text-red-500 text-xs">{{ $message }}</span>
        @enderror
        <input class="block rounded border border-gray-100 px-2 py1 mb-1" wire:model="password" type="password" placeholder="password">
        @error('password')
            <span class="text-red-500 text-xs">{{ $message }}</span>
        @enderror
        <button class="block rounded px-3 py-1 bg-gray-400 text-white">create</button>
    </form>
    <hr>
    @foreach($users as $user)
        <p>{{ $user->name }}</p>
    @endforeach

    {{ $users->links() }}
</div>
