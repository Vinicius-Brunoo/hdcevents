<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>HDC Events</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <main class="page">
            <section class="panel" aria-label="Status do deploy">
                <p class="eyebrow">Laravel no EC2</p>
                <h1>HDC Events</h1>
                <p class="lead">
                    Aplicacao Laravel preparada para deploy automatico com GitHub Actions.
                </p>
                <ul class="status">
                    <li>Repositorio hdcevents</li>
                    <li>Workflow configurado</li>
                    <li>Deploy para EC2</li>
                </ul>
            </section>
        </main>
    </body>
</html>
