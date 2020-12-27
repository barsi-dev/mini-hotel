<div x-data="{x: 0}">
    <div class="my-3 flex flex-row flex-wrap justify-center text-center">
        @for ($i = 1; $i <= $num; $i++) <button @click=" x={{ $i }}; uncheck();" class=" mx-1 my-1 w-30 p-3 rounded border-2 border-black hover:bg-black hover:text-white
        cursor-pointer" :class="{ 'bg-black text-white' : x === {{ $i }} }">
            Room
            {{$i}}</button>
            @endfor
    </div>
    @for ($i = 1; $i <= $num; $i++) <div x-show="x === {{ $i }}" class="p-3 m-auto w-96 bg-gray-200 text-left rounded">
        <center>
            <div class="font-bold text-xl"> Room {{ $i }}</div>

        </center>

        @if ($limit === true)
        <span class="font-bold text-red-600">This room has already been booked.</span>
        @endif

        <form wire:submit.prevent="submit({{ $i }})">
            @error('name')
            <center>
                <span class="text-red-600 font-bold">{{ $message }}</span>
            </center>
            @enderror
            @error('status')
            <center>
                <span class="text-red-600 font-bold">{{ $message }}</span>
            </center>
            @enderror
            @error('room')
            <center>
                <span class="text-red-600 font-bold">Please confirm before submitting.</span>
            </center>
            @enderror

            <label for=" name">Name: </label><br>
            <input class="w-full border-2 border-black rounded" wire:model="name" type="text" name="name"
                value="{{ old('name')}}"><br>

            <label for="status">Status: </label><br>
            <select class="w-full border-2 border-black rounded" name="status" wire:model="status" id="">
                <option value=""></option>
                <option value="reserved">Reserved</option>
                <option value="in">In</option>
                <option value="out">Out</option>
            </select>
            <div class="flex flex-row items-center justify-between">

                <div class="my-2 flex items-center space-x-2">
                    <label for="room">Confirm? </label>
                    <input class="form-checkbox h-6 w-6" type="checkbox" value="{{ $i }}" wire:model="room" name="room"
                        id="checkbox" :checked="false" /><br>
                </div>

                <button class="p-1 w-9/10 bg-black text-white  rounded border-2 border-white" type="submit">Book
                    Room</button>

            </div>
        </form>
</div>
@endfor
</div>
