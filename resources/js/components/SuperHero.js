export class SuperHero {
    constructor() {
        this.banner = document.querySelector('.banner .stage');
        this.initial_image = document.querySelector('.banner .stage > img');
        this.current = 0;
        this.interval = null;
        this.showPosition = document.querySelector('.banner .count');

    }

    init() {
        return new Promise((resolve, reject) => {
            try {
                const sources = JSON.parse(this.initial_image.getAttribute('data-alternates'));
                this.slides = [];
                sources.forEach(source => {
                    const slide = this.makeSlide(source);
                    this.banner.insertBefore(slide, this.initial_image);
                    this.slides.push(slide);
                })

            } catch(e) {
                reject();
            }

            Promise.all(this.slides.map(slide => this.loadImage(slide, slide.getAttribute('data-src'))))
                   .then(() => {
                       this.begin();
                       resolve();
                   })
                   .catch(reject);
        });
    }

    makeSlide(source) {
        const slide = document.createElement('img');
        slide.style.width = '100%';
        slide.style.height = '100%';
        slide.style.objectFit = "cover";
        slide.className = 'absolute inset-0';
        slide.setAttribute('data-src', source);

        return slide;
    }

    loadImage(image, source) {
        return new Promise((resolve, reject) => {
            image.addEventListener('load', resolve);
            image.addEventListener('error', reject);
            image.src = source;
        })
    }

    begin() {
        this.slides = [...document.querySelectorAll('.banner .stage > img')];
        this.slides.forEach((slide, index) => {
           if(index !== this.slides.length - 1) {
               slide.parentNode.removeChild(slide);
           }
        });

        this.current = 4;
        this.updateCount();
        document.querySelector('.banner').classList.add('ready');

        this.startInterval();
    }

    startInterval() {
        if(this.interval) {
            window.clearInterval(this.interval);
        }
        this.interval = window.setInterval(() => {
            const current = document.querySelector('.banner .stage > img');
            const next = this.nextSlide();
            this.change(current, next);

            this.incCurrent();
            this.updateCount();
        }, 8000)
    }

    showNext() {
        const current = document.querySelector('.banner .stage > img');
        const next = this.nextSlide();

        this.change(current, next);
        this.incCurrent();
        this.updateCount();
        this.startInterval();
    }

    showPrev() {
        const current = document.querySelector('.banner .stage > img');
        const next = this.prevSlide();

        this.change(current, next);
        this.decCurrent();
        this.updateCount();
        this.startInterval();
    }

    change(current, next) {

        this.banner.insertBefore(next, current);
        current.addEventListener('transitionend', this.resetNode);
        current.style.transition = "1s";
        current.style.opacity = "0";

        next.style.transition = "none";
        next.style.opacity = "1";

    }

    resetNode(ev) {
        ev.target.parentNode.removeChild(ev.target);
        ev.target.style.opacity = "1";
        ev.target.style.transition = "none";
        ev.target.removeEventListener('transitionend', this.resetNode);
    }

    nextSlide() {
        if(this.current >= this.slides.length -1) {
            return this.slides[0];
        }

        return this.slides[this.current + 1];
    }

    prevSlide() {
        if(this.current === 0) {
            return this.slides[this.slides.length -1];
        }

        return this.slides[this.current - 1];
    }

    incCurrent() {
        if(this.current >= this.slides.length -1) {
            return this.current = 0;
        }

        this.current++;
    }

    decCurrent() {
        if(this.current === 0) {
            return this.current = this.slides.length -1;
        }

        return this.current--;
    }

    updateCount() {
        this.showPosition.innerHTML = this.current === 4 ? '1' : this.current + 2;
    }
}
