const header = {
  init() {
    this.header = document.querySelector('[data-header]');

    if (this.header) {
      this.scroll();
    }

    this.s = document.documentElement.scrollTop;
    this.ls = this.s;
    this.offset = 200;
  },

  scroll() {
    window.addEventListener('scroll', () => {
      this.s = document.documentElement.scrollTop;

      if (this.offset < this.s) {
        if (this.s > this.ls) {
          this.hide();
        } else {
          this.show();
        }
      } else {
        this.clear();
      }

      this.ls = this.s;
    });
  },

  hide() {
    this.header.classList.add('-hide');
    this.header.classList.remove('-show');
  },

  show() {
    this.header.classList.add('-show');
    this.header.classList.remove('-hide');
  },

  clear() {
    this.header.classList.remove('-hide');
    this.header.classList.remove('-show');
  },
}

export default header;
