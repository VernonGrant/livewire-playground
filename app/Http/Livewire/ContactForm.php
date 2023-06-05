<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContactForm extends Component
{
    public $name = "";
    public $email = "";
    public $message = "";

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required|min:10'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submitForm()
    {
        $contact = $this->validate();

        sleep(1);

        session()->flash('success', 'Form has been submitted successfully.');

        $this->resetForm();
    }

    private function resetForm()
    {
        $this->name = '';
        $this->email = '';
        $this->message = '';
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
