


class MobileMenu {
    constructor(mobileMenu, headerOptions, headerOption, master) {
        this.mobileMenu = document.querySelector(mobileMenu);
        this.headerOptions = document.querySelector(headerOptions);
        this.headerOption = document.querySelector(headerOption);
        this.master = document.querySelector(master);
        this.activeClass = "active";

        this.handleClick = this.handleClick.bind(this);
        this.init(this)
    }

    handleClick () {
        this.headerOptions.classList.toggle(this.activeClass);
        this.mobileMenu.classList.toggle(this.activeClass);
        this.master.classList.toggle(this.activeClass);
    }

    addClickEvent () {
        this.mobileMenu.addEventListener("click", this.handleClick);
    }

    init (instance) {
        if (this.mobileMenu) {
            this.addClickEvent();
        }
        return this;
    }
}

const mobileMenu = new MobileMenu(
    ".Mobile-Menu",
    ".Header-Options",
    ".Header-Option",
    ".master",
);


mobileMenu.init();