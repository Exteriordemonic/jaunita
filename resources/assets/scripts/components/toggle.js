const Toggle = {
  init() {
    this.toggle = document.querySelectorAll('[data-toggle]');

    this.class = '-is-active';

    if (this.toggle) {
      this.addEvents();
    }
  },

  addEvents() {
    this.toggle.forEach(element => {
      element.addEventListener('click', e => {
        const $this = e.currentTarget;
        const toggleElem = document.querySelector(`[${$this.dataset.toggle}]`);

        this.toggleClass($this);

        if (toggleElem) {
          this.toggleClass(toggleElem);

        } else {
          console.warn(`${$this.dataset.toggle} dont exist`);
        }
      });
    });
  },

  toggleClass(elem) {
    elem.classList.toggle(this.class);

    if (elem.classList.contains(this.class)) {
      document.body.style.overflow = 'hidden';
    } else {
      document.body.style.overflow = 'visible';
    }
  },
}

export default Toggle;
