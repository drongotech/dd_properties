<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Payment Receipts') }}
        </h2>
    </x-slot>

    @php
        $images = [
            [
                'title'         => 'UNIT A-101 #',
                'client_name'   => 'Daniel Bekele',
                'image'         => 'images/screenshot_1.jpeg'
            ],
            [
                'title'         => 'UNIT A-102 #',
                'client_name'   => 'Sarah Tadesse',
                'image'         => 'images/screenshot_2.jpeg'
            ],
            [
                'title'         => 'UNIT A-103 #',
                'client_name'   => 'Michael Alemu',
                'image'         => 'images/screenshot.png'
            ],
            [
                'title'         => 'UNIT A-104 #',
                'client_name'   => 'Helena Girma',
                'image'         => 'images/screenshot_1.jpeg'
            ],
            [
                'title'         => 'UNIT A-201 #',
                'client_name'   => 'Daniel Bekele',
                'image'         => 'images/screenshot.png'
            ],
            [
                'title'         => 'UNIT A-202 #',
                'client_name'   => 'Sarah Tadesse',
                'image'         => 'images/screenshot_2.jpeg'
            ],
            [
                'title'         => 'UNIT A-203 #',
                'client_name'   => 'Michael Alemu',
                'image'         => 'images/screenshot_1.jpeg'
            ],
        ];
    @endphp

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
                <h3 class="mb-4 text-lg font-bold">Payment Receipt Images</h3>
                
                <div class="grid grid-cols-6 gap-4">
                    @foreach ($images as $item)
                        <div class="flex flex-col mb-3">
                            <em class="text-left"><strong>{{ $item['title'] }}</strong></em>
                            <p class="text-left">{{ $item['client_name'] }}</p>
                            <img src="{{ asset($item['image']) }}" alt="{{ $item['title'] }}" class="w-full h-auto rounded mb-2" />
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
