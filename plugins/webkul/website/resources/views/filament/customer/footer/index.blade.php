<footer class="px-6 py-12 bg-gradient-to-r from-blue-50 via-purple-50 to-blue-100">
    <div class="container max-w-6xl mx-auto">
        <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
            <div class="md:col-span-1">
                <div class="mb-6">
                    <a href="{{ url('/') }}">
                        <x-filament-panels::logo />
                    </a>
                </div>

                <p class="mb-4 text-gray-700">
                    A **BaraSuite** egy modern, magyar specifikációkra optimalizált ERP rendszer, amely segít a vállalkozások mindennapi folyamatainak automatizálásában.
                </p>

                <p class="text-gray-700">
                    Fókuszban az átlátható számlázás, a pontos készletkezelés és a zökkenőmentes CRM integráció áll, minden méretű vállalkozás számára.
                </p>
            </div>

            <div class="md:col-span-1">
                <h3 class="mb-4 text-lg font-medium">Hasznos Linkek</h3>

                <ul class="space-y-2">
                    @foreach ($navigationItems as $item)
                        <li>
                            <a href="{{ $item->getUrl() }}" class="text-gray-700 hover:text-primary-600">
                                {{ $item->getLabel() }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="md:col-span-1">
                <h3 class="mb-4 text-lg font-medium">Kapcsolat</h3>

                <div class="mb-2">
                    <a href="mailto:info@barasuite.hu" class="flex items-center text-gray-700 hover:text-primary-600">
                        <x-filament::icon icon="heroicon-m-envelope" class="w-5 h-5 mr-2" />
                        info@barasuite.hu
                    </a>
                </div>

                <div class="mb-6">
                    <a href="tel:+36301234567" class="flex items-center text-gray-700 hover:text-primary-600">
                        <x-filament::icon icon="heroicon-m-phone" class="w-5 h-5 mr-2" />
                        +36 30 123 4567
                    </a>
                </div>

                @if (! $socialLinks->isEmpty())
                    <h3 class="mb-4 text-lg font-medium">Kövess minket</h3>
                    <div class="flex flex-wrap gap-2">
                        @foreach ($socialLinks as $item)
                            <a href="{{ $item->getUrl() }}" class="p-2 text-white bg-gray-800 rounded-full hover:bg-primary-600" target="_blank">
                                {!! $item->getIcon() !!}
                            </a>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>

        <div class="flex flex-col justify-between pt-8 mt-8 border-t border-gray-200 md:flex-row">
            <div class="text-sm text-gray-600">
                Copyright © {{ date('Y') }} <a href="https://barasuite.hu" class="text-primary-500" target="_blank">BaraSuite</a>
            </div>

            <div class="mt-2 text-sm text-gray-600 md:mt-0">
                Rendszergazda: <a href="https://barasuite.hu" class="text-primary-500" target="_blank">BaraSuite ERP Solutions</a>
            </div>
        </div>
    </div>
</footer>