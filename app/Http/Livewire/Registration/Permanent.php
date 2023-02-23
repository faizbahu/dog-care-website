<?php

namespace App\Http\Livewire\Registration;

use Livewire\Component;
use Illuminate\Support\Arr;
use Livewire\WithFileUploads;
use Illuminate\Validation\Rule;
use App\Mail\FormSubmissionMail;
use Illuminate\Support\Facades\Mail;

class Permanent extends Component
{
    use WithFileUploads;

    public $first_name;

    public $last_name;

    public $email, $phone;

    public $country = 'United States';

    public $state;

    public $address;

    public $address2;

    public $city;

    public $zip;

    public $dog_name;

    public $dob = '';

    public $mob = '';

    public $yob = '';

    public $sex;

    public $breed;

    public $color;

    public $sire_name;

    public $dam_name;

    public $dog_image;

    public $pedigree_image_front;

    public $pedigree_image_back;

    public $shipping;

    public $signature;

    protected $listeners = ['signed'];

    public function signed($signature)
    {
        $this->signature = $signature;
    }

    public function updated($name)
    {
        $this->validateOnly($name);
    }

    public function updatedCountry()
    {
        $this->state = '';
    }

    public function submit()
    {
        $validated = $this->validate();

        $images = [
            'dog_image' => $this->dog_image->store('photos'),
            'pedigree_image_front' => $this->pedigree_image_front->store('photos'),
            'pedigree_image_back' => $this->pedigree_image_back->store('photos')
        ];

        $validated = Arr::except($validated, [
            'dog_image',
            'pedigree_image_front',
            'pedigree_image_back',
            'signature'
        ]);

        Mail::send(new FormSubmissionMail($validated, $images, $this->signature));
        dd('done');
    }

    public function render()
    {
        return view('livewire.registration.permanent')->extends('layouts.master');
    }

    protected function getRules()
    {
        return [
            'first_name' => ['required', 'string', 'max:100'],
            'last_name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:100'],
            'country' => ['required', 'string', Rule::in(countries())],
            'state' => ['required', 'string', 'max:100'],
            'address' => ['required', 'string', 'max:100'],
            'address2' => ['required', 'string', 'max:100'],
            'city' => ['required', 'string', 'max:100'],
            'zip' => ['required', 'string', 'max:100'],
            'dog_name' => ['required', 'string', 'max:100'],
            'dob' => ['required', 'numeric', 'min:1', 'max:31'],
            'mob' => ['required'],
            'yob' => ['required', 'numeric', 'min:2000', 'max:'.now()->format('Y')],
            'sex' => ['required', 'string', 'in:Male,Female'],
            'breed' => ['required', 'string', 'max:100'],
            'color' => ['required', 'string', 'max:100'],
            'sire_name' => ['required', 'string', 'max:100'],
            'dam_name' => ['required', 'string', 'max:100'],
            'dog_image' => ['required', 'image', 'max:10000'],
            'pedigree_image_front' => ['required', 'image', 'max:10000'],
            'pedigree_image_back' => ['required', 'image', 'max:10000'],
            'shipping' => ['required', 'numeric', 'in:1,3,7'],
            'signature' => ['required', 'string'],
        ];
    }
}
