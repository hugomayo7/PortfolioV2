<?php

namespace App\Http\Livewire;

use App\Models\About;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Content extends Component
{
    public int $currentTab = 0;
    public $selectedPortfolio;

    // contact form
    public $name;
    public $mail;
    public $message;

    public $abouts = [];

    public function mount()
    {
        $this->selectedPortfolio = Portfolio::first();
        $this->abouts = About::first();
    }

    public function render()
    {
        return view('livewire.content')->layout('layouts.app');
    }

    public function updateCurrentTab(int $tab)
    {
        $this->currentTab = $tab;
    }

    public function setSelectedPortfolio(Portfolio $portfolio)
    {
        $this->selectedPortfolio = $portfolio;
    }

    public function sendEmail(Request $request)
    {
        $this->resetErrorBag();
        $validated = Validator::validate($request['serverMemo']['data'], [
            'name' => 'required|string|min:3',
            'mail' => 'required|email',
            'message' => 'required|min:5'
        ], [
            'name.required' => 'Le nom est obligatoire.',
            'name.min' => 'Le nom est trop court.',
            'mail.required' => "L'adresse mail est obligatoire.",
            'mail.email' => "L'adresse mail n'est pas valide.",
            'message.required' => 'Le message est obligatoire.',
            'message.min' => 'Le message est trop court.'
        ]);

        Mail::to('hugomayonobe@gmail.com')->send(new \App\Mail\ContactMail([
            'name' => $validated['name'],
            'mail' => $validated['mail'],
            'message' => $validated['message']
        ]));
        $this->emit('emailSent');

        $this->name = "";
        $this->mail = "";
        $this->message = "";
    }
}
