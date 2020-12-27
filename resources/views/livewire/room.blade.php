<div class="mx-1 my-1 w-96 p-3 bg-gray-100 rounded" @if (count($bookings)==0) style="display:none;" @endif
    wire:poll.100ms>
    <h1 class="font-bold text-xl">Room {{ $num }}</h1>
    @if ($limit === true)
    <span class="font-bold text-red-600">This room has already been booked.</span>
    @endif
    <table class="table-fixed w-full">
        <thead>
            <tr>
                <th class="w-3/6">Name</th>
                <th class="w-2/6">Status</th>
                <th class="w-1/6"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($bookings as $booking)
            <tr>
                <td>{{$booking->name}}</td>
                <td class="">
                    <div class="border-2 rounded cursor-pointer @if($booking->status === 'reserved') border-yellow-500 hover:bg-yellow-500 @elseif($booking->status === 'in')border-blue-500 hover:bg-blue-500 @else border-red-500 hover:bg-red-500 @endif"
                        style="height: 100%; width:100%" wire:click="changeStatus({{$booking}})">
                        {{ $booking->status }}</div>
                </td>
                <td class="">
                    <div class="border-2 border-black rounded cursor-pointer align-middle hover:bg-black hover:text-white"
                        style="height: 100%; width:100%" wire:click="destroy({{$booking}})">
                        X
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
