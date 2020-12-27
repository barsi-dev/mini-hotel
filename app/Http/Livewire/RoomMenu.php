<?php

namespace App\Http\Livewire;

use App\Models\Bookings;
use Livewire\Component;
use App\Models\GlobalVars;

class RoomMenu extends Component
{
    public $num;

    public $room;
    public $name;
    public $status;

    public $limit = false;

    protected $rules = [
        'room' => 'required|integer',
        'name' => 'required|max:256',
        'status' => 'required',
    ];

    public function submit($num)
    {
        $in = count(Bookings::where('status', 'in')->where('room', $this->room)->get());

        $this->validate();

        if (($this->status !== 'in') || ($in === 0 && $this->status === 'in')) {
            Bookings::create([
                'room' => $this->room,
                'name' => $this->name,
                'status' => $this->status,
            ]);
            $this->limit = false;
        } else {
            $this->limit = true;
            return;
        }
    }
    public function updatedName()
    {
    }
    public function hydrate()
    {
        $this->limit = false;
    }

    public function render()
    {
        return view('livewire.room-menu');
    }
}