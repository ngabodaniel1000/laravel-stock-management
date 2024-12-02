<x-app-layout>
    <x-slot name="header">
        <div class="dashboard mt-[200px]">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Dashboard') }}
            </h2>
            <p class="mt-2 text-gray-600 dark:text-gray-300">
                Welcome to the XY Shop Stock Management System. Use this dashboard to manage your product inventory efficiently. Track product stock levels, monitor recent activity, and access essential tools to keep your inventory up to date.
            </p>

            <!-- Features Overview -->
            <div class="mt-6 grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="bg-white dark:bg-gray-800 shadow-sm rounded-lg p-4">
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Manage Products</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mt-2">
                        Add, update, and delete products to maintain accurate stock records.
                    </p>
                </div>
                <div class="bg-white dark:bg-gray-800 shadow-sm rounded-lg p-4">
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Track Stock Levels</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mt-2">
                        Monitor product availability and avoid running out of stock.
                    </p>
                </div>
                <div class="bg-white dark:bg-gray-800 shadow-sm rounded-lg p-4">
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Generate Reports</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mt-2">
                        Access detailed stock reports to analyze inventory trends.
                    </p>
                </div>
            </div>

            <!-- Quick Tips -->
            <div class="mt-6 bg-blue-50 dark:bg-blue-900 shadow-sm rounded-lg p-4">
                <h3 class="text-lg font-semibold text-blue-800 dark:text-blue-300">Quick Tips</h3>
                <ul class="list-disc list-inside text-sm text-blue-700 dark:text-blue-200 mt-2">
                    <li>Keep stock records updated daily to ensure accuracy.</li>
                    <li>Use the "Stock In" and "Stock Out" features to track inventory changes.</li>
                    <li>Generate reports regularly for better insights into product performance.</li>
                </ul>
            </div>
        </div>
    </x-slot>
</x-app-layout>
