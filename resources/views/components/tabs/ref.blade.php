﻿
<!-- Tabs -->
@vite(['resources/css/app.css'])
@vite(['modules/Components/resources/css/app.css', 'modules/Components/resources/js/app.js'])

<div
    x-data="{
        selectedId: null,
        init() {
            // Set the first available tab on the page on page load.
            this.$nextTick(() => this.select(this.$id('tab', 1)))
        },
        select(id) {
            this.selectedId = id
        },
        isSelected(id) {
            return this.selectedId === id
        },
        whichChild(el, parent) {
            return Array.from(parent.children).indexOf(el) + 1
        }
    }"
    x-id="['tab']"
    class="mx-auto max-w-3xl"
>
    <!-- Tab List -->
    <ul
        x-ref="tablist"
        @keydown.right.prevent.stop="$focus.wrap().next()"
        @keydown.home.prevent.stop="$focus.first()"
        @keydown.page-up.prevent.stop="$focus.first()"
        @keydown.left.prevent.stop="$focus.wrap().prev()"
        @keydown.end.prevent.stop="$focus.last()"
        @keydown.page-down.prevent.stop="$focus.last()"
        role="tablist"
        class="-mb-px flex items-stretch"
    >
        <!-- Tab -->
        <li>
            <button
                :id="$id('tab', whichChild($el.parentElement, $refs.tablist))"
                @click="select($el.id)"
                @mousedown.prevent
                @focus="select($el.id)"
                type="button"
                :tabindex="isSelected($el.id) ? 0 : -1"
                :aria-selected="isSelected($el.id)"
                :class="isSelected($el.id) ? 'border-gray-200 bg-white' : 'border-transparent'"
                class="inline-flex rounded-t-md border-t border-l border-r px-5 py-2.5"
                role="tab"
            >Tab 1</button>
        </li>

        <li>
            <button
                :id="$id('tab', whichChild($el.parentElement, $refs.tablist))"
                @click="select($el.id)"
                @mousedown.prevent
                @focus="select($el.id)"
                type="button"
                :tabindex="isSelected($el.id) ? 0 : -1"
                :aria-selected="isSelected($el.id)"
                :class="isSelected($el.id) ? 'border-gray-200 bg-white' : 'border-transparent'"
                class="inline-flex rounded-t-md border-t border-l border-r px-5 py-2.5"
                role="tab"
            >Tab 2</button>
        </li>
    </ul>

    <!-- Panels -->
    <div role="tabpanels" class="rounded-b-md border border-gray-200 bg-white">
        <!-- Panel -->
        <section
            x-show="isSelected($id('tab', whichChild($el, $el.parentElement)))"
            :aria-labelledby="$id('tab', whichChild($el, $el.parentElement))"
            role="tabpanel"
            class="p-8"
        >
            <h2 class="text-xl font-bold">Tab 1 Content</h2>
            <p class="mt-2 text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, quo sequi error quibusdam quas temporibus animi sapiente eligendi! Deleniti minima velit recusandae iure.</p>
            <button class="mt-5 rounded-md border border-gray-200 px-4 py-2 text-sm">Something focusable</button>
        </section>

        <section
            x-show="isSelected($id('tab', whichChild($el, $el.parentElement)))"
            :aria-labelledby="$id('tab', whichChild($el, $el.parentElement))"
            role="tabpanel"
            class="p-8"
        >
            <h2 class="text-xl font-bold">Tab 2 Content</h2>
            <p class="mt-2 text-gray-500">Fugiat odit alias, eaque optio quas nobis minima reiciendis voluptate dolorem nisi facere debitis ea laboriosam vitae omnis ut voluptatum eos. Fugiat?</p>
            <button class="mt-5 rounded-md border border-gray-200 px-4 py-2 text-sm">Something else focusable</button>
        </section>
    </div>
</div>