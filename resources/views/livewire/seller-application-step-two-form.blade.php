<div class="w-full space-y-6">
    <div>
        <div class="flex justify-between uppercase text-sm font-semibold">
            <h6>Seller Application</h6>
            <h6>Step 2 of 2</h6>
        </div>
        <h1 class="text-2xl font-semibold">Tell us a little about yourself</h1>
    </div>
    <div>
        <h5 class="mt-4 text-lg font-semibold">Your answers will help us provide you with a more personalized experience as a seller!</h5>
    </div>

    <form action="#" class="space-y-6">
        <div>
            <label for="quality_perspective" class="mb-1 font-semibold inline-block">When creating products, which best describes your perspective on quality?</label>
            <select class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md"
                    name="quality_perspective"
                    id="quality_perspective"
                    wire:model="state.quality_perspective"
            >
                <option value="">Select Answer</option>
                @foreach(\App\Models\Application::QUALITY_PERSPECTIVES as $key => $value)
                    <option value="{{ $value }}">{{ $key }}</option>
                @endforeach
            </select>
            @error('state.quality_perspective')
            <div class='text-red-500 text-sm mt-2'>
                {{ $message }}
            </div>
            @enderror
        </div>
        <div>
            <label for="seller_experience" class="mb-1 font-semibold inline-block">How would you describe your experience level as an online seller?</label>
            <select class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md"
                    name="seller_experience"
                    id="seller_experience"
                    wire:model="state.seller_experience"
            >
                <option value="">Select Answer</option>
                @foreach(\App\Models\Application::SELLER_EXPERIENCE as $key => $value)
                    <option value="{{ $value }}">{{ $key }}</option>
                @endforeach
            </select>
            @error('state.seller_experience')
            <div class='text-red-500 text-sm mt-2'>
                {{ $message }}
            </div>
            @enderror
        </div>
        <div>
            <label for="marketing_understanding" class="mb-1 font-semibold inline-block">How would you describe your understanding of business and marketing?</label>
            <select class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md"
                    name="marketing_understanding"
                    id="marketing_understanding"
                    wire:model="state.marketing_understanding"
            >
                <option value="">Select Answer</option>
                @foreach(\App\Models\Application::MARKETING_UNDERSTANDING as $key => $value)
                    <option value="{{ $value }}">{{ $key }}</option>
                @endforeach
            </select>
            @error('state.marketing_understanding')
            <div class='text-red-500 text-sm mt-2'>
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mt-6 flex justify-between">
            <div class="flex items-center text-teal-600 hover:text-teal-800">
                <!-- Heroicons outline/chevron left -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
                <a href="#" wire:click.prevent="$emit('goToStep', 1)">Previous</a>
            </div>
            <button class="text-white text-md bg-teal-600 hover:bg-teal-800 px-10 py-4"
                    wire:click.prevent="submit"
            >
                Next
            </button>
        </div>
    </form>
</div>
