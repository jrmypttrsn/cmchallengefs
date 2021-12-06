<div>
    @if($step === 1)
        <div class="md:p-6">
            <livewire:seller-application-step-one-form :state="$state" />
        </div>
    @endif
    @if($step === 2)
        <div class="md:p-6">
            <livewire:seller-application-step-two-form :state="$state" />
        </div>
    @endif
    @if($step === 3)
        <div class="mx-24 md:p-6">
            <livewire:seller-application-confirmation-form :state="$state" />
        </div>
    @endif
</div>
