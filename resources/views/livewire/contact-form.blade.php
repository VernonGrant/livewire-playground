<div>
    <div class="w-full max-w-md mx-auto">

        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" wire:submit.prevent="submitForm"
            action="{{ route('contact') }}" method="POST">
            @csrf

            @if (session()->has('success'))
                <div class="mb-4 text-green-500">
                    <p>{{ session('success') }}</p>
                </div>
            @endif

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                    Name
                </label>
                <input
                    class="shadow appearance-none border @error('name') border-red-500 @enderror rounded w-full py-2 px-3 mb-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    wire:model="name" id="name" type="text" name="name" placeholder="Jhon"
                    value="{{ old('name') }}">
                @error('name')
                    <p class="text-red-500 text-xs italic">Please input your name.</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                    Email
                </label>
                <input
                    class="shadow appearance-none border @error('email') border-red-500 @enderror rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    wire:model="email" id="email" type="email" name="email" placeholder="jhon@email.com"
                    value="{{ old('email') }}">
                @error('email')
                    <p class="text-red-500 text-xs italic">Please input a valid email.</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="message">
                    Message
                </label>
                <textarea
                    class="shadow appearance-none border @error('message') border-red-500 @enderror rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    wire:model="message" name="message" id="message" cols="30" rows="10">{{ old('message') }}</textarea>
                @error('message')
                    <p class="text-red-500 text-xs italic">Please input your message.</p>
                @enderror
            </div>

            <div class="flex items-center justify-between">
                <button
                    class="disabled:opacity-50 inline-flex bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">
                        <svg wire:loading wire:target="submitForm" class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor"
                                d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                            </path>
                        </svg>
                        Send
                </button>
            </div>
        </form>
    </div>
</div>
