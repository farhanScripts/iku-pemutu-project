<div class="flex gap-3">
    @foreach ($stats as $stat)
        {{-- <div class="overflow-hidden shadow-sm bg-yellow-50 sm:rounded-lg">
            test
        </div> --}}
        <div class="overflow-hidden shadow-sm bg-yellow-50 sm:rounded-lg">
            <h3 class="text-lg font-bold">{{ $stat['label'] }}</h3>
            <p class="text-2xl font-semibold">{{ $stat['value'] }}</p>
            <p class="{{ $stat['color'] }} text-sm font-medium">
                {{ $stat['percentage'] }}%
            </p>
            <p class="text-sm text-gray-600">{{ $stat['note'] }}</p>
        </div>
    @endforeach
</div>
