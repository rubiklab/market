<?php

namespace App\Livewire;

use App\Models\Item;
use Livewire\Component;

class ItemList extends Component
{
    public int $currentRecords = 8;
    public int $totalRecords;

    public function mount()
    {
        $this->totalRecords = Item::count();
    }


    public function loadMore()
    {
        $this->currentRecords += 8;
        logger($this->currentRecords);
    }


    public function render()
    {
        $items = Item::take($this->currentRecords)->get();

        return view('livewire.item-list', compact('items'));
    }
}
