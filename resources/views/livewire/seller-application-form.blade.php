<div>
{{--    {{ json_encode($state) }}--}}
    @if($step === 1)<livewire:seller-application-step-one-form :state="$state"/>@endif
    @if($step === 2)<livewire:seller-application-step-two-form :state="$state"/>@endif
    @if($step === 3)<livewire:seller-application-confirmation-form :state="$state"/>@endif
</div>