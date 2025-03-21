
<!-- Tabs -->
@vite(['resources/css/app.css'])
@vite(['modules/Components/resources/css/app.css', 'modules/Components/resources/js/app.js'])

<x-tabs class="bg-gray-600">

    <x-slot:items>
      <x-tabs.item>
        tab 1
      </x-tabs.item>
      <x-tabs.item>
        tab 2
      </x-tabs.item>
    </x-slot:items>
    
    <x-slot:panels>
      <x-tabs.panel>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit, quae.
      </x-tabs.panel>
      <x-tabs.panel>
        tab 2 Lorem ipsum dolor sit amet, consectetur adipisicing elit.
      </x-tabs.panel>
    </x-slot:panels>
  </x-tabs>