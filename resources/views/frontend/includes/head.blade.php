<title>@yield('title')</title>

<!-- Meta Tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="author" content="Webestica.com">
<meta name="description" content="@yield('description')">
<meta name="keywords" content="@yield('keywords')">
<meta name="author" content="Rsm Monaem">
<!-- Dark mode -->
<script>
    const storedTheme = localStorage.getItem('theme')

    const getPreferredTheme = () => {
        if (storedTheme) {
            return storedTheme
        }
        return window.matchMedia('(prefers-color-scheme: light)').matches ? 'light' : 'light'
    }

    const setTheme = function (theme) {
        if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
            document.documentElement.setAttribute('data-bs-theme', 'dark')
        } else {
            document.documentElement.setAttribute('data-bs-theme', theme)
        }
    }

    setTheme(getPreferredTheme())

    window.addEventListener('DOMContentLoaded', () => {
        var el = document.querySelector('.theme-icon-active');
        if(el != 'undefined' && el != null) {
            const showActiveTheme = theme => {
            const activeThemeIcon = document.querySelector('.theme-icon-active use')
            const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`)
            const svgOfActiveBtn = btnToActive.querySelector('.mode-switch use').getAttribute('href')

            document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
                element.classList.remove('active')
            })

            btnToActive.classList.add('active')
            activeThemeIcon.setAttribute('href', svgOfActiveBtn)
        }

        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
            if (storedTheme !== 'light' || storedTheme !== 'dark') {
                setTheme(getPreferredTheme())
            }
        })

        showActiveTheme(getPreferredTheme())

        document.querySelectorAll('[data-bs-theme-value]')
            .forEach(toggle => {
                toggle.addEventListener('click', () => {
                    const theme = toggle.getAttribute('data-bs-theme-value')
                    localStorage.setItem('theme', theme)
                    setTheme(theme)
                    showActiveTheme(theme)
                })
            })

        }
    })
    
</script>

<!-- Favicon -->
<link rel="shortcut icon" href="{{ asset('frontend/assets/images/favicon.ico') }}">

<!-- Google Font -->
<link rel="preconnect" href="../fonts.googleapis.com/index.html">
<link rel="preconnect" href="../fonts.gstatic.com/index.html" crossorigin>
<link href="../fonts.googleapis.com/css29c1d.css?family=Instrument+Sans:wght@400;500;600;700&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet">

<!-- Plugins CSS -->
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/vendor/font-awesome/css/all.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.css')}}">


<!-- Theme CSS -->
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/style.css')}}">