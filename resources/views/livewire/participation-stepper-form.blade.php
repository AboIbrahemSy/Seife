<div>
    @if($step == 1)
        <x-input wire:model="form.company_name" label="Company Name"/>
        <!-- other fields -->
    @endif

    <!-- Stepper navigation -->
    <x-button wire:click="prevStep" label="Previous" :disabled="$step == 1"/>
    <x-button wire:click="{{ $step == 3 ? 'submit' : 'nextStep' }}" label="{{ $step == 3 ? 'Submit' : 'Next' }}"/>
</div>
