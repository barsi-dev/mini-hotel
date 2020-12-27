@extends('layouts.index')

@section('contents')
<div class=" container mx-auto text-center py-3 bg-white">
    <h1 class="text-5xl text-green-600">Hotel California</h1>
    <livewire:room-menu :num="$numberOfRooms" />

    <div class="my-3 flex flex-row flex-wrap justify-center text-center">
        @for ($i = 1; $i
        <= $numberOfRooms; $i++) <livewire:room :num="$i" />
        @endfor
    </div>
</div>

@endsectioN

@section('scripts')
<script>
    function test(i) {
            console.log(i);
        }

    function uncheck() {
        test = document.getElementsByTagName("input");
        for( i = 0; i < test.length; i++){
            test[i].checked = false;
        }

    }
</script>
@endsection
