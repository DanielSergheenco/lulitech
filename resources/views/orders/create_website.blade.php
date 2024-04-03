<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Plaseaza comanda') }}
        </h2>
    </x-slot>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">


                    <form method="POST" action="{{ route('order.store') }}">
                        @csrf
                        <div>

                            <label for="category">Website Category:</label>
                            <select id="category" name="category"
                                class="form-control @error('category') is-invalid @enderror">
                                <option value="presentation">My Business Presentation</option>
                                <option value="e-commerce">E-commerce</option>
                                <option value="blog">Blog/Portal</option>
                                <option value="custom">Custom</option>
                            </select>
                            @error('category')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div>
                            <label for="business_name">Nume afacere:</label>
                            <input type="text" name="business_name" id="business_name" maxlength="255" required>
                        </div>
                        <div>
                            <label for="business_description">Descriere afacere:</label>
                            <textarea name="business_description" id="business_description" rows="5" maxlength="4012"
                                required></textarea>
                        </div>
                        <div>
                            <label for="email">Adresa de email:</label>
                            <input type="email" name="email" id="email" required>
                        </div>
                        <div>
                            <label for="full_name">Nume și prenume:</label>
                            <input type="text" name="name" id="full_name" maxlength="255" required>
                        </div>
                        <div>
                            <label for="phone_number">Număr de telefon:</label>
                            <input type="tel" name="phone" id="phone_number" required>
                        </div>
                        <x-primary-button class="ms-4">Trimite comanda</x-primary-button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
