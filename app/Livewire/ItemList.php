<?php

namespace App\Livewire;

use App\Models\Item;
use Livewire\Component;
use Illuminate\Support\Facades\Cookie;

class ItemList extends Component
{
    public int $currentRecords;
    public int $totalRecords;
    static string $COOKIE_KEY = 'current_records';

    public function mount()
    {
        $this->totalRecords = Item::count();

        $this->currentRecords = Cookie::get(self::$COOKIE_KEY, 8);
    }


    public function loadMore()
    {
        $this->currentRecords += 8;
    }


    public function render()
    {
        $items = Item::take($this->currentRecords)->get();

        Cookie::queue(self::$COOKIE_KEY, $this->currentRecords);
        return view('livewire.item-list', compact('items'));
    }
}
