const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

const modal = $('.modal');
const loginBtn = $('#header__navbar-item-login');
const registerBtn = $('#header__navbar-item-Register');
const returnShowbtn = $$('.auth-form__controls-back');
const paginationbtn = $$('.pagination-item');
const categoryActive = $$('.category-item');
const tabContents = $$('.tab-content');
const filterButtons = $$(".home-filter__btn");
const showMoreBtn = $(".show-more-btn");
const content = $(".product_detail-commit_description-content");
const decreaseBtns = $$(".decrease");
const increaseBtns = $$(".increase");
const quantityInputs = $$(".product_detail_commit-controll-quantity-input");
const discountBtnAll = $('#discountBtnAll');
const filterAll = $("#filterAll");
const hiddenInput = $('#result-input');
const selectLinks = $$(".select-input__link");
const productRows = $$(".home-product .grid__row");
const showRegister = $('.auth-form-Register');
const showLogin = $('.auth-form-login');
const slides = $$(".slide");
const dots = $$(".dot");
let isselectedElement = false;
let isExpanded = false;
let isAnimating = false;
let slideIndex = 1;

const app = {
    handleEvents: function () {
        if (loginBtn !== null && showRegister !== null) {
            loginBtn.onclick = function () {
                modal.style.display = "flex";
                showLogin.style.display = "none";
                showRegister.style.display = "block";
            };

            registerBtn.onclick = function () {
                modal.style.display = "flex";
                showRegister.style.display = "none";
                showLogin.style.display = "block";
            };
        }

        returnShowbtn.forEach(function (item) {
            item.addEventListener("click", function () {
                modal.style.display = "none";
                showLogin.style.display = "block";
                showRegister.style.display = "none";
            });
        });

        filterButtons.forEach(function (button) {
            button.addEventListener("click", function () {
                filterButtons.forEach(function (element) {
                    element.classList.remove("btn--primary");
                });
                this.classList.add("btn--primary");
                app.sortProducts(this.textContent);
            });
        });

        selectLinks.forEach(function (link) {
            link.addEventListener("click", function (event) {
                event.preventDefault();
                var selectedText = this.textContent;
                app.sortProducts(selectedText);
            });
        });

        if (showMoreBtn) {
            showMoreBtn.addEventListener('click', function () {
                if (!isAnimating) {
                    isAnimating = true;
                    if (!isExpanded) {
                        content.style.maxHeight = content.scrollHeight + 'px';
                        showMoreBtn.textContent = 'Thu gọn';
                    } else {
                        content.style.maxHeight = '';
                        showMoreBtn.textContent = 'Xem thêm';
                    }
                    isExpanded = !isExpanded;
                    setTimeout(() => {
                        isAnimating = false;
                    }, 400);
                }
            });
        }

        decreaseBtns.forEach(btn => {
            btn.addEventListener('click', function () {
                app.decreaseQuantity(btn);
            });
        });

        increaseBtns.forEach(btn => {
            btn.addEventListener('click', function () {
                app.increaseQuantity(btn);
            });
        });

        dots.forEach((dot, index) => {
            dot.addEventListener("click", function () {
                app.currentSlide(index + 1);
            });
        });

        $("#prevButton").addEventListener("click", function () {
            app.plusSlides(-1);
        });

        $("#nextButton").addEventListener("click", function () {
            app.plusSlides(1);
        });
    },

    updateHiddenInput(value) {
        hiddenInput.value = value;
    },

    decreaseQuantity(btn) {
        let quantityInput = btn.parentElement.querySelector('.product_detail_commit-controll-quantity-input');
        let currentValue = parseInt(quantityInput.value);
        if (isNaN(currentValue) || currentValue === "") {
            quantityInput.value = 1;
            this.updateHiddenInput(1);
        } else if (currentValue > 1) {
            quantityInput.value = currentValue - 1;
            this.updateHiddenInput(currentValue - 1);
        }
    },

    increaseQuantity(btn) {
        let quantityInput = btn.parentElement.querySelector('.product_detail_commit-controll-quantity-input');
        let currentValue = parseInt(quantityInput.value);
        if (isNaN(currentValue) || currentValue === "") {
            quantityInput.value = 1;
            this.updateHiddenInput(1);
        } else {
            quantityInput.value = currentValue + 1;
            this.updateHiddenInput(currentValue + 1);
        }
    },

    showSlides() {
        slides.forEach(slide => {
            slide.style.display = "none";
        });
        dots.forEach(dot => {
            dot.className = dot.className.replace("active", "");
        });
        if (slideIndex > slides.length) {
            slideIndex = 1
        }
        if (slideIndex < 1) {
            slideIndex = slides.length
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
    },

    plusSlides(n) {
        slideIndex += n;
        this.showSlides();
    },

    currentSlide(n) {
        slideIndex = n;
        this.showSlides();
    },

    sortProducts(sortType) {
        if (sortType === "Giá cao đến thấp") {
            productRows.forEach(function (productsContainer) {
                var products = Array.from(productsContainer.querySelectorAll(".tab-content"));

                products.sort(function (a, b) {
                    var priceA = parseInt(a.querySelector(".home-product-item__price-current").innerText.replace(/[^\d]/g, ''));
                    var priceB = parseInt(b.querySelector(".home-product-item__price-current").innerText.replace(/[^\d]/g, ''));
                    return priceB - priceA;
                });

                productsContainer.innerHTML = '';
                products.forEach(function (product) {
                    productsContainer.appendChild(product);
                });
            });
            console.log("Đã nhấn vào nút sắp xếp " + sortType);
        } else if (sortType === "Giá thấp đến cao") {
            productRows.forEach(function (productsContainer) {
                var products = Array.from(productsContainer.querySelectorAll(".tab-content"));

                products.sort(function (a, b) {
                    var priceA = parseInt(a.querySelector(".home-product-item__price-current").innerText.replace(/[^\d]/g, ''));
                    var priceB = parseInt(b.querySelector(".home-product-item__price-current").innerText.replace(/[^\d]/g, ''));
                    return priceA - priceB;
                });

                productsContainer.innerHTML = '';
                products.forEach(function (product) {
                    productsContainer.appendChild(product);
                });
            });
            console.log("Đã nhấn vào nút sắp xếp " + sortType);
        }
    },

    removeActiveClass: function () {
        categoryActive.forEach(function (item) {
            item.classList.remove('category-item--active');
        });
    },

    start: function () {
        this.handleEvents();
        this.showSlides();
    }
}

app.start();
