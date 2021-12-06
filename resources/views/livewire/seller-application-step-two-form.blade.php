<div>
    <div class="w-full space-y-3">
        <div class="flex justify-between uppercase font-semibold">
            <h6>Seller Application</h6>
            <h6>Step 2 of 2</h6>
        </div>

        <div>
            <h1 class="text-2xl">Tell us a little about yourself</h1>

            <h5 class="mt-4 font-semibold">Your answers will help us provide you with a more personalized experience as a seller!</h5>
        </div>

        <form action="#">
            <div>
                <label for="quality_perspective" class="mb-1 font-semibold inline-block">When creating products, which best describes your perspective on quality?</label>
                <select class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md"
                        name="quality_perspective"
                        id="quality_perspective"
                        wire:model="state.quality_perspective"
                >
                    <option value="">Select Answer</option>
                    <option value="I don’t care what it takes, my products are the highest quality possible">I don’t care what it takes, my products are the highest quality possible</option>
                    <option value="I put in enough effort to make my product pretty high quality, but at some point my time is better spent elsewhere">I put in enough effort to make my product pretty high quality, but at some point my time is better spent elsewhere</option>
                    <option value="I try to get quality products out quickly, even if I need to take a shortcut now and then">I try to get quality products out quickly, even if I need to take a shortcut now and then</option>
                    <option value="I spend the minimum amount of time & effort it takes to create products that are acceptable quality.">I spend the minimum amount of time & effort it takes to create products that are acceptable quality.</option>
                    <option value="Quantity is more important to me than quality.">Quantity is more important to me than quality.</option>
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
                    <option value="I sell on multiple marketplaces and through my own website">I sell on multiple marketplaces and through my own website</option>
                    <option value="I have experience selling through only my own website">I have experience selling through only my own website</option>
                    <option value="I have experience selling through multiple marketplaces">I have experience selling through multiple marketplaces</option>
                    <option value="I have experience selling through one online marketplace">I have experience selling through one online marketplace</option>
                    <option value="I’m new to selling creative products online">I’m new to selling creative products online</option>
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
                    <option value="I have an extensive background in business and/or marketing">I have an extensive background in business and/or marketing</option>
                    <option value="I’m familiar with some skills & techniques, but I’m not sure how to apply them when selling my creative work">I’m familiar with some skills & techniques, but I’m not sure how to apply them when selling my creative work</option>
                    <option value="I’m vaguely aware of basic business & marketing concepts">I’m vaguely aware of basic business & marketing concepts</option>
                    <option value="I’m not interested in understanding business & marketing">I’m not interested in understanding business & marketing</option>
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
</div>
