const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);
// button 
const modal = $('.modal')
const loginBtn = $('#header__navbar-item-login');
const registerBtn = $('#header__navbar-item-Register')
const returnShowbtn = $$('.auth-form__controls-back');
const paginationbtn = $$('.pagination-item');
const categoryActive = $$('.category-item');
// const categoryItems = $$('.category-item');
const tabContents = $$('.tab-content');
const filterButtons = $$(".home-filter__btn");
console.log(filterButtons);
// is fale true

let isselectedElement = false;

// show log and  Register
const showPaginationactive = $$('.pagination-item');
// console.log(showPaginationactive);
const showRegister = $('.auth-form-Register');
const showLogin = $('.auth-form-login');
//   app
const app = {
    handleEvents: function () {
        loginBtn.onclick = function () {
            modal.style.display = "flex";
            showLogin.style.display = "none";
        };

        registerBtn.onclick = function () {
            modal.style.display = "flex";
            showRegister.style.display = "none";
        };

        returnShowbtn.forEach(function (item) {
            item.addEventListener("click", function () {
                modal.style.display = "none";
                showLogin.style.display = "block";
                showRegister.style.display = "block";
            });
        });
        filterButtons.forEach(function (button) {
            button.addEventListener("click", function () {
                filterButtons.forEach(function (element) {
                    element.classList.remove("btn--primary");
                });
                this.classList.add("btn--primary");
            });
        });


    },

    removeActiveClass: function () {
        categoryActive.forEach(function (item) {
            item.classList.remove('category-item--active');
        });
    },

    start: function () {
        this.handleEvents();
    }
}

app.start();

