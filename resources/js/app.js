import { SuperHero } from "./components/SuperHero";
import Hammer from "hammerjs";

window.superHero = new SuperHero();



window.addEventListener('load', () => {
    superHero.init()
             .then(() => {
                 const hammertime = new Hammer(document.querySelector('.banner'));
                 hammertime.on('swipe', ev => {
                     if(ev.deltaX > 20) {
                         return superHero.showNext();
                     }

                     if(ev.deltaX < 20) {
                         return superHero.showPrev();
                     }
                 });

                 document.body.addEventListener('keyup', ({code}) => {
                     if(code === 'ArrowLeft') {
                         return superHero.showPrev();
                     }

                     if(code === 'ArrowRight') {
                         return superHero.showNext();
                     }
                 });
             })
             .catch(() => console.log('failed to initialise banner'));
});