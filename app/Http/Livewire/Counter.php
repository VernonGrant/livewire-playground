<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    /*
     * These properties are reactive, meaning once they change the related
     * component will be re-rendered. Public properties are automatically passed
     * to the view.
     */

    public $count = 0;

    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        if ($this->count !== 0) {
            $this->count--;
        }
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
