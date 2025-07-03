<?php

namespace App\Livewire;

use App\Models\Visitor;
use Livewire\Component;

class VisitorStepperForm extends Component
{
    public $currentStep = 1;

    // Fields
    public $first_name, $last_name, $phone_number, $email;
    public $company, $job_title, $country, $address, $company_info;

    public $successMessage = '';

    protected $rules = [
        // Step 1
        'company' => 'nullable|string|max:255',
        'company_info' => 'nullable|string|max:1000',
        'address' => 'nullable|string|max:500',
        // Step 2
        'first_name' => 'required|string|max:100',
        'last_name' => 'required|string|max:100',
        'job_title' => 'nullable|string|max:255',
        'country' => 'required|string|max:100',
        // Step 3
        'phone_number' => 'nullable|string|max:30',
        'email' => 'nullable|email|max:255',
    ];

    public function nextStep()
    {
        // validation based on current step
        $this->validate($this->getRulesForCurrentStep());
        $this->currentStep++;
    }

    public function previousStep()
    {
        $this->currentStep--;
    }

    public function submit()
    {
        $this->validate();

        Visitor::create([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'phone_number' => $this->phone_number,
            'email' => $this->email,
            'company' => $this->company,
            'job_title' => $this->job_title,
            'country' => $this->country,
            'address' => $this->address,
            'company_info' => $this->company_info,
        ]);

        $this->reset();
        $this->currentStep = 1;
        $this->successMessage = __('forms.success_message');
    }

    private function getRulesForCurrentStep()
    {
        $rules = [];
        if ($this->currentStep == 1) {
            $rules = [
                'company' => 'nullable|string|max:255',
                'company_info' => 'nullable|string|max:1000',
                'address' => 'nullable|string|max:500',
            ];
        } elseif ($this->currentStep == 2) {
            $rules = [
                'first_name' => 'required|string|max:100',
                'last_name' => 'required|string|max:100',
                'job_title' => 'nullable|string|max:255',
                'country' => 'required|string|max:100',
            ];
        } elseif ($this->currentStep == 3) {
            $rules = [
                'phone_number' => 'nullable|string|max:30',
                'email' => 'nullable|email|max:255',
            ];
        }
        return $rules;
    }

    public function render()
    {
        return view('livewire.visitor-stepper-form');
    }
}
