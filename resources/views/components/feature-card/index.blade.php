@props(['title', 'description', 'image', 'columnSpan' => 'col-span-full md:col-span-15'])

<div data-aos="fade-up"
     data-aos-duration="1000"
     class="bg-base-200 border-base-300 {{ $columnSpan }} group container isolate mx-auto flex flex-col gap-2 overflow-hidden rounded-2xl border p-2">
    <div
         class="group-hover:border-primary/10 group-hover:bg-primary/2 border-base-300 flex flex-col gap-6 rounded-lg border p-4 md:flex-row md:gap-x-8 md:p-6">
        <div>
            <span
                  class="text-base-content group-hover:text-primary text-xl/10 font-medium tracking-widest md:text-2xl/10">
                {{ $title }}
            </span>
            <p class="text-base-content/50 text-sm/7">
                {{ $description }}
            </p>
        </div>
    </div>

    <x-feature-card.showcase :image="$image" />
</div>
