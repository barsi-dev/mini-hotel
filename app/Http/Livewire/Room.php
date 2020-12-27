<?php

namespace App\Http\Livewire;

use App\Models\Bookings;
use App\Models\GlobalVars;
use Livewire\Component;

class Room extends Component
{
    public $num;
    public $limit = false;

    public function destroy(Bookings $booking)
    {
        $booking->delete();
    }

    public function changeStatus(Bookings $booking)
    {
        $in = count(Bookings::where('status', 'in')->where('room', $this->num)->get());

        if ($booking->status === 'reserved') {
            if ($in == 0) {
                $booking->status = 'in';
            } else {
                $this->limit = true;
            }
        } else if ($booking->status === 'in') {
            $booking->status = 'out';
            $this->limit = false;
        } else if ($booking->status === 'out') {
            $booking->status = 'reserved';
            $this->limit = false;
        }

        $booking->save();
    }
    public function hydrate()
    {
        $this->limit = false;
    }

    public function render()
    {
        return view('livewire.room', [
            'bookings' => Bookings::where('room', $this->num)->orderBy('status')->get(),
        ]);
    }
}