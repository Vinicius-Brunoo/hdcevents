<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <main class="laravel-page">
            <section class="hero" aria-label="Laravel">
                <svg class="laravel-logo" viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path d="M61.8548 14.6253C61.8778 14.7102 61.8895 14.7978 61.8897 14.8858V28.5615C61.8898 28.737 61.8434 28.9095 61.7554 29.0614C61.6675 29.2132 61.5409 29.3392 61.3887 29.4265L49.9104 36.0351V49.1337C49.9104 49.4902 49.7209 49.8192 49.4118 49.9987L25.4519 63.7916C25.3971 63.8227 25.3372 63.8427 25.2774 63.8639C25.255 63.8714 25.2338 63.8851 25.2101 63.8913C25.0426 63.9354 24.8666 63.9354 24.6991 63.8913C24.6716 63.8838 24.6467 63.8689 24.6205 63.8589C24.5657 63.8389 24.5084 63.8215 24.456 63.7916L0.501061 49.9987C0.348882 49.9113 0.222437 49.7853 0.134469 49.6335C0.0465019 49.4816 0.000120578 49.3092 0 49.1337L0 8.10652C0 8.01678 0.0124642 7.92953 0.0348998 7.84477C0.0423783 7.81606 0.0598282 7.78984 0.0697995 7.76113C0.0884959 7.70879 0.105946 7.65521 0.133367 7.6066C0.152063 7.57414 0.179485 7.54812 0.202668 7.51813C0.230216 7.47956 0.260888 7.44332 0.294251 7.40991C0.323086 7.38182 0.361145 7.36084 0.394372 7.33718C0.430083 7.30995 0.46829 7.28614 0.50847 7.26608L12.4863 0.369526C12.6393 0.28147 12.8128 0.235107 12.9893 0.235107C13.1658 0.235107 13.3393 0.28147 13.4923 0.369526L25.469 7.26608H25.4715C25.5118 7.28653 25.55 7.31034 25.5856 7.33718C25.6187 7.36084 25.6569 7.38182 25.6857 7.40991C25.7197 7.44337 25.7507 7.48016 25.7785 7.51937C25.8004 7.54936 25.828 7.57414 25.8466 7.6066C25.8753 7.65645 25.8915 7.70879 25.9115 7.76113C25.9215 7.78984 25.9389 7.81606 25.9464 7.84601C25.9709 7.92988 25.9837 8.01677 25.9845 8.10403V33.7317L35.9677 27.9844V14.8846C35.9677 14.7973 35.9801 14.7088 36.0026 14.6253C36.0113 14.5954 36.0275 14.5692 36.0375 14.5405C36.0575 14.4881 36.0749 14.4345 36.1023 14.386C36.121 14.3535 36.1484 14.3275 36.1716 14.2975C36.1994 14.2587 36.2304 14.2221 36.2644 14.1881C36.2932 14.16 36.3313 14.139 36.3645 14.1154C36.4003 14.0882 36.4384 14.0644 36.4786 14.0443L48.4564 7.14776C48.6094 7.05971 48.7829 7.01334 48.9594 7.01334C49.1359 7.01334 49.3094 7.05971 49.4624 7.14776L61.4402 14.0443C61.4816 14.0656 61.5189 14.0881 61.5545 14.1154C61.5864 14.139 61.6257 14.16 61.6546 14.1881C61.6883 14.2226 61.7192 14.259 61.7474 14.2975C61.7706 14.3275 61.798 14.3535 61.8167 14.386C61.8454 14.4345 61.8616 14.4881 61.8816 14.5405C61.8928 14.5692 61.9103 14.5954 61.9178 14.6253H61.8548Z" fill="#FF2D20"/>
                </svg>

                <p class="deploy-note">Teste de alteração com deploy automático usando Github Actions</p>
            </section>

            <section class="cards" aria-label="Recursos do Laravel">
                <article class="card">
                    <span class="card-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24"><path d="M4 5.5A2.5 2.5 0 0 1 6.5 3H20v15H7.5A3.5 3.5 0 0 0 4 21.5v-16Z"/><path d="M4 18.5A3.5 3.5 0 0 1 7.5 15H20"/></svg>
                    </span>
                    <h2>Documentation</h2>
                    <p>Laravel has wonderful documentation covering every aspect of the framework. Whether you are a newcomer or have prior experience with Laravel, we recommend reading our documentation from beginning to end.</p>
                    <span class="card-arrow" aria-hidden="true">-></span>
                </article>

                <article class="card">
                    <span class="card-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24"><path d="M4 7.5A2.5 2.5 0 0 1 6.5 5h7A2.5 2.5 0 0 1 16 7.5v9A2.5 2.5 0 0 1 13.5 19h-7A2.5 2.5 0 0 1 4 16.5v-9Z"/><path d="m16 10 4-2.5v9L16 14"/></svg>
                    </span>
                    <h2>Laracasts</h2>
                    <p>Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.</p>
                    <span class="card-arrow" aria-hidden="true">-></span>
                </article>

                <article class="card">
                    <span class="card-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24"><path d="M5 4h10l4 4v12H5z"/><path d="M14 4v5h5"/><path d="M8 13h8M8 16h5"/></svg>
                    </span>
                    <h2>Laravel News</h2>
                    <p>Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.</p>
                    <span class="card-arrow" aria-hidden="true">-></span>
                </article>

                <article class="card">
                    <span class="card-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24"><path d="M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18Z"/><path d="M3.6 9h16.8M3.6 15h16.8"/><path d="M12 3a14 14 0 0 1 0 18M12 3a14 14 0 0 0 0 18"/></svg>
                    </span>
                    <h2>Vibrant Ecosystem</h2>
                    <p>Laravel's robust library of first-party tools and libraries, such as Forge, Vapor, Nova, and Envoyer help you take your projects to the next level.</p>
                    <span class="card-arrow" aria-hidden="true">-></span>
                </article>
            </section>
        </main>
    </body>
</html>
