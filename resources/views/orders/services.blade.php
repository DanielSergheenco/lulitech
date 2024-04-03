<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Alegeți serviciul dorit:!') }}
        </h2>
    </x-slot>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Alegeți serviciul dorit:!") }}

                    <div class="container">

                        <div class="row">
                            <div class="col-md-6">
                                <a href="{{ route('order.website')}}" class="btn btn-primary">
                                    Web Development</a>
                            </div>

                            <div class="col-md-6">
                                <a href="" class="btn btn-primary">SEO</a>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-6">
                                <a href="" class="btn btn-primary">SEM</a>
                            </div>

                            <div class="col-md-6">
                                <a href="" class="btn btn-primary">Social Media Marketing</a>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-6">
                                <a href="" class="btn btn-primary">E-mail Marketing</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
