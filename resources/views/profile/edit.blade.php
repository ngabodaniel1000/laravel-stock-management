<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Profile') }}
        </h2>

    
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-6 bg-white dark:bg-gray-800 shadow-md rounded-lg">
                    <div class="max-w-xl">
                        <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">User Information</h3>
                        <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Here are your profile details:</p>
                        <ul class="mt-4 space-y-2">
                            <li class="flex justify-between border-b border-gray-300 pb-2">
                                <strong class="text-gray-800 dark:text-gray-200">Name:</strong>
                                <span class="text-gray-600 dark:text-gray-400">{{ $user->name }}</span>
                            </li>
                            <li class="flex justify-between border-b border-gray-300 pb-2">
                                <strong class="text-gray-800 dark:text-gray-200">Email:</strong>
                                <span class="text-gray-600 dark:text-gray-400">{{ $user->email }}</span>
                            </li>
                            <li class="flex justify-between border-b border-gray-300 pb-2">
                                <strong class="text-gray-800 dark:text-gray-200">Joined on:</strong>
                                <span class="text-gray-600 dark:text-gray-400">{{ $user->created_at->format('M d, Y') }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
    
</x-slot>
</x-app-layout>
