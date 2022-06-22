<div class="symbol-group symbol-hover ms-0">
    <span class="me-4">Currently Online:</span>
    @forelse ($users as $user)
    <a wire:click.prevent="$emit('user-message-selected', {{ $user->id }})"
        onclick="document.querySelector('[chat-window]').click()">
        <div wire:key='user-{{ $user->id }}' class="cursor-pointer symbol symbol-30px symbol-md-40px">
            <img src="{{ route('images', ['type' => 'avatar', 'user_id' => $user->id, 'size' => 40]) }}"
                alt="User Profile Image" />
        </div>
    </a>

    @empty
    There are no other users online
    @endforelse
</div>
