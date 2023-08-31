@push('script')
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
@endpush

<x-app-layout>
    <x-slot name="header">
        <h1 class="text-3xl font-bold">Dashboard</h1>
    </x-slot>

    <div class="grid grid-cols-6 gap-4 mb-4 lg:grid-cols-9">
        <div
            class="col-span-3 px-6 pt-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="flex flex-row items-center justify-start gap-4">
                <div class="p-6 text-white bg-red-900 rounded-lg">
                    <x-lucide-newspaper class="w-12 h-12" />
                </div>
                <div>
                    <dt class="mb-2 text-5xl font-extrabold">32</dt>
                    <dd class="font-semibold text-gray-500 dark:text-gray-400">Total Live News</dd>
                </div>
            </div>
            <hr class="my-3 border-zinc-200 sm:mx-auto dark:border-zinc-700 lg:my-3" />
            <div class="flex flex-row items-center gap-4 pb-2">
                <dt class="text-base font-semibold">0</dt>
                <dd class="font-semibold text-gray-500 dark:text-gray-400">Total Unpublished News</dd>
            </div>
        </div>
        <div
            class="col-span-3 px-6 pt-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="flex flex-row items-center justify-start gap-4">
                <div class="p-6 text-white bg-red-900 rounded-lg">
                    <x-lucide-newspaper class="w-12 h-12" />
                </div>
                <div>
                    <dt class="mb-2 text-5xl font-extrabold">32</dt>
                    <dd class="font-semibold text-gray-500 dark:text-gray-400">Total Live News</dd>
                </div>
            </div>
            <hr class="my-3 border-zinc-200 sm:mx-auto dark:border-zinc-700 lg:my-3" />
            <div class="flex flex-row items-center gap-4 pb-2">
                <dt class="text-base font-semibold">0</dt>
                <dd class="font-semibold text-gray-500 dark:text-gray-400">Total Unpublished News</dd>
            </div>
        </div>
        <div
            class="col-span-3 px-6 pt-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="flex flex-row items-center justify-start gap-4">
                <div class="p-6 text-white bg-red-900 rounded-lg">
                    <x-lucide-newspaper class="w-12 h-12" />
                </div>
                <div>
                    <dt class="mb-2 text-5xl font-extrabold">32</dt>
                    <dd class="font-semibold text-gray-500 dark:text-gray-400">Total Live News</dd>
                </div>
            </div>
            <hr class="my-3 border-zinc-200 sm:mx-auto dark:border-zinc-700 lg:my-3" />
            <div class="flex flex-row items-center gap-4 pb-2">
                <dt class="text-base font-semibold">0</dt>
                <dd class="font-semibold text-gray-500 dark:text-gray-400">Total Unpublished News</dd>
            </div>
        </div>
        <div
            class="col-span-3 px-6 pt-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="flex flex-row items-center justify-start gap-4">
                <div class="p-6 text-white bg-red-900 rounded-lg">
                    <x-lucide-newspaper class="w-12 h-12" />
                </div>
                <div>
                    <dt class="mb-2 text-5xl font-extrabold">32</dt>
                    <dd class="font-semibold text-gray-500 dark:text-gray-400">Total Live News</dd>
                </div>
            </div>
            <hr class="my-3 border-zinc-200 sm:mx-auto dark:border-zinc-700 lg:my-3" />
            <div class="flex flex-row items-center gap-4 pb-2">
                <dt class="text-base font-semibold">0</dt>
                <dd class="font-semibold text-gray-500 dark:text-gray-400">Total Unpublished News</dd>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
