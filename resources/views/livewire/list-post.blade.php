{{--  LIST  --}}
<div class="bg-white p-4">

    @foreach ($posts as $post )
        <div class="flex flex-col p-4 my-6 bg-white shadow-xl rounded-xl">
       <span>{{$post->user->name}}</span>
       <span>{{$post->body}}</span>
       <span>{{$post->created_at}}</span>
       <button wire:click="showUpdateForm ({{ $post->id }})" class="p-2 bg-green-300 hover:bg-blue-400 text-white">Edit</button>
    </div>
    <div>
        @if ($updateStateId !== $post->id)
        <span>{{ $post->body }}</span>
        @endif

        @if ($updateStateId === $post->id)
        <textarea wire:model="body"
        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" rows="3" placeholder="Tuliskan">

       </textarea>
       <button wire:click="update ({{ $post->id }})" class="p-2 bg-blue-300 hover:bg-blue-400 text-white">Save</button>

        @endif

    </div>
    @endforeach

</div>
