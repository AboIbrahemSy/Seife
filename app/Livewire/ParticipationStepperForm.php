<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Participation;

class ParticipationStepperForm extends Component
{
    public $currentStep = 1;

    public $company_name, $commercial_registration_no, $activity_type, $full_address;
    public $responsible_person, $job_title, $nationality, $email, $phone_number;
    public $requested_area, $setup_preference;

    public $successMessage = '';

    protected $rules = [
        // Step 1
        'company_name' => 'required|string|max:255',
        'commercial_registration_no' => 'required|string|max:100',
        'activity_type' => 'required|string|max:255',
        'full_address' => 'required|string|max:500',
        // Step 2
        'responsible_person' => 'required|string|max:255',
        'job_title' => 'required|string|max:255',
        'nationality' => 'required|string|max:100',
        'email' => 'required|email|max:255',
        'phone_number' => 'required|string|max:40',
        // Step 3
        'requested_area' => 'required|integer|min:1',
        'setup_preference' => 'required|in:raw_space,not_equipped,fully_equipped',
    ];

    public function nextStep()
{
    if ($this->currentStep == 1) {
        $this->validate([
            'company_name' => 'required|string|max:255',
            'commercial_registration_no' => 'required|string|max:100',
            'activity_type' => 'required|string|max:255',
            'full_address' => 'required|string|max:500',
        ]);
    } elseif ($this->currentStep == 2) {
        $this->validate([
            'responsible_person' => 'required|string|max:255',
            'job_title' => 'required|string|max:255',
            'nationality' => 'required|string|max:100',
            'email' => 'required|email|max:255',
            'phone_number' => 'required|string|max:40',
        ]);
    } elseif ($this->currentStep == 3) {
        $this->validate([
            'requested_area' => 'required|integer|min:1',
            'setup_preference' => 'required|in:raw_space,not_equipped,fully_equipped',
        ]);
    }
    $this->currentStep++;
}


    public function previousStep()
    {
        $this->currentStep--;
    }

    public function submit()
    {
        $this->validate();

        Participation::create([
            'company_name' => $this->company_name,
            'commercial_registration_no' => $this->commercial_registration_no,
            'activity_type' => $this->activity_type,
            'full_address' => $this->full_address,
            'responsible_person' => $this->responsible_person,
            'job_title' => $this->job_title,
            'nationality' => $this->nationality,
            'email' => $this->email,
            'phone_number' => $this->phone_number,
            'requested_area' => $this->requested_area,
            'setup_preference' => $this->setup_preference,
        ]);

        $this->reset();
        $this->currentStep = 1;
        $this->successMessage = __('forms.success_message');
    }

    public function render()
    {
        return view('livewire.participation-stepper-form');
    }
}
