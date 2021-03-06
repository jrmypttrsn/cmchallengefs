<div class="w-full space-y-6">
    <div>
        <div class="flex justify-between text-sm font-semibold uppercase">
            <h6>Seller Application</h6>
            <h6>Step 1 of 2</h6>
        </div>
        <h1 class="text-2xl font-semibold">Share your work with us</h1>
    </div>

    <form action="#" x-data="{ selected: 'opt2' }" class="space-y-6">
        <div class="flex justify-between space-x-1">
            <div>
                <label for="first_name" class="mb-1 font-semibold inline-block">First Name</label>
                <input type="text"
                       class="border-2 rounded-lg w-full p-2"
                       name="first_name"
                       id="first_name"
                       wire:model="state.first_name"
                >
                @error('state.first_name')
                <div class='text-red-500 text-sm mt-2'>
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div>
                <label for="last_name" class="mb-1 font-semibold inline-block">Last Name</label>
                <input type="text"
                       class="border-2 rounded-lg w-full p-2"
                       name="last_name"
                       id="last_name"
                       wire:model="state.last_name"
                >
                @error('state.last_name')
                <div class='text-red-500 text-sm mt-2'>
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div>
            <label for="shop_category" class="mb-1 font-semibold inline-block">Your Shop Category</label>
            <select class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md"
                    name="shop_category"
                    id="shop_category"
                    wire:model="state.shop_category"
            >
                <option value="">Select Category</option>
                @foreach(\App\Models\Application::SHOP_CATEGORIES as $key => $value)
                    <option value="{{ $value }}">{{ $key }}</option>
                @endforeach
            </select>

            @error('state.shop_category')
            <div class='text-red-500 text-sm mt-2'>
                {{ $message }}
            </div>
            @enderror
        </div>

        <div>
            <div>
                <label for="portfolio_link" class="mb-1 font-semibold inline-block">Portfolio Link</label>
                <input type="text"
                       class="border-2 rounded-lg w-full p-2"
                       name="portfolio_link" id="portfolio_link"
                       wire:model="state.portfolio_link"
                >
                @error('state.portfolio_link')
                <div class='text-red-500 text-sm mt-2'>
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="relative flex items-start mt-2">
                <div class="flex items-center h-5">
                    <input id="content_confirmation"
                           aria-describedby="content-confirmation-description"
                           name="content_confirmation"
                           type="checkbox"
                           class="focus:ring-teal-500 h-4 w-4 text-teal-600 border-gray-300 rounded"
                           wire:model="state.content_confirmation"
                    >
                </div>
                <div class="ml-2 text-sm">
                    <label for="content_confirmation" class="font-medium text-gray-700">Yes, I confirm that the content I submit is authored by me.</label>
                </div>
            </div>
            @error('state.content_confirmation')
            <div class='text-red-500 text-sm mt-2'>
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mt-6">
            <div>
                <label class="text-sm font-semibold text-gray-900">Do you already have an online store?</label>
                <fieldset class="mt-4">
                    <div class="space-y-4">
                        <div class="flex items-center">
                            <input id="yes"
                                   name="has_stores"
                                   type="radio"
                                   class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                   x-on:click="selected = 'opt1'"
                            >
                            <label for="yes" class="ml-3 block text-sm font-medium text-gray-700">
                                Yes
                            </label>
                        </div>

                        <div class="flex items-center">
                            <input id="no"
                                   name="has_stores"
                                   type="radio"
                                   class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                   x-on:click="selected = 'opt2'"
                            >
                            <label for="no" class="ml-3 block text-sm font-medium text-gray-700">
                                No
                            </label>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
        <div class="mt-6" x-show="selected !== 'opt2'" x-cloak>
            <label for="online_stores" class="inline-block text-sm font-semibold text-gray-900">Online stores I sell on today</label>
            <div class="mt-1">
            <textarea rows="4"
                      name="online_stores"
                      id="online_stores"
                      class="shadow-sm border-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                      wire:model="state.online_stores"
            >
            </textarea>
            </div>
        </div>
        <div class="mt-6 flex justify-between">
            <div class=""></div>
            <button class="text-white text-md bg-teal-600 hover:bg-teal-800 px-10 py-4 block w-full md:w-1/4"
                    wire:click.prevent="submit"
            >
                Next
            </button>
        </div>
    </form>
</div>
