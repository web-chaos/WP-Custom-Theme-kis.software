const spans = document.querySelectorAll('.hide-link');

spans.forEach(span => {
    span.addEventListener('click', function() {
        const link = this.getAttribute('data-link');
        window.open(link, '_blank');
    });
});

const scrollTopBtn = document.querySelector('.js-scroll-top');

if(scrollTopBtn) {
    const offset = 200;
    scrollTopBtn.onclick = () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    };

    window.addEventListener(
        'scroll',
        function (event) {
            const scrollPos =
                window.scrollY ||
                window.scrollTop ||
                document.getElementsByTagName('html')[0].scrollTop;

            scrollPos > offset
                ? scrollTopBtn.classList.add('is-active')
                : scrollTopBtn.classList.remove('is-active');
        },
        false,
    );
}

document.addEventListener('DOMContentLoaded', function() {
    var menuBtn = document.querySelector('.messenger-btn');
    var menu = document.querySelector('.messenger-links');

    if (menuBtn && menu) {
            menuBtn.addEventListener('click', function() {
            if (menu.classList.contains('show')) {
                menu.classList.remove('show');
            } else {
                menu.classList.add('show');
            }
        });

        document.addEventListener('mouseup', function(e) {
            var div = document.querySelector('.messenger');
            if (!div.contains(e.target)) {
                menu.classList.remove('show');
            }
        });
    }


    
    let popupBg = document.querySelector('.popup__bg')
    let popup = document.querySelector('.custom_popup')
    let openPopupButtons = document.querySelectorAll('.open-popup')
    let closePopupButton = document.querySelector('.close-popup')

    if ( popupBg && popup && openPopupButtons && closePopupButton ) {
        openPopupButtons.forEach(button => {
            button.addEventListener('click', e => {
                e.preventDefault()
                popupBg.classList.add('active')
                popup.classList.add('active')
            })
        })

        closePopupButton.addEventListener('click', () => {
            popupBg.classList.remove('active')
            popup.classList.remove('active')
            document.body.style.position = 'relative'
        })

        document.addEventListener('click', e => {
            if (e.target === popupBg) {
                popupBg.classList.remove('active')
                popup.classList.remove('active')
            }
        })
    }
});
