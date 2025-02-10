import './bootstrap';
import "./alpine"
import CountUp from "@/libs/counter";


const intFunction = () => {
    new CountUp({ threshold: 0.3, duration: 1500 });
}


document.addEventListener('livewire:load', (intFunction));

