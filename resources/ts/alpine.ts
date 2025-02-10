import { Livewire, Alpine } from '../../vendor/livewire/livewire/dist/livewire.esm';

declare global {
    interface Window {
        Livewire: any;
        Alpine: any
    }
}


import intersect from '@alpinejs/intersect'

Alpine.plugin(intersect)

Livewire.start()
