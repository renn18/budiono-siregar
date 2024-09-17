<x-app-layout>
  <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

    <!-- Welcome banner -->
    <x-dashboard.welcome-banner />

    <!-- Dashboard actions -->
    <div class="sm:flex sm:justify-between sm:items-center mb-8">

      <!-- Right: Actions -->
      <div class="grid grid-flow-col sm:auto-cols-max justify-start sm:justify-end gap-2">

      </div>

    </div>

    <!-- Cards -->
    <div class="grid grid-cols-12 gap-6">

      <!-- Ringkasan Data -->
      <x-dashboard.dashboard-card-06 />

      <!-- Table (Top Channels) -->
      <x-dashboard.dashboard-card-07 />

      <!-- Card (Customers)  -->
      <x-dashboard.dashboard-card-10 />

      <!-- Card (Income/Expenses) -->
      <x-dashboard.dashboard-card-13 />

</x-app-layout>
