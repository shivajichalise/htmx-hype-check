<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <div id="parent-div">
            Click below button for a greeting.
        </div>
        <button
            hx-post="{{ route('tests.hello') }}"
            hx-trigger="click"
            hx-target="#parent-div"
            hx-swap="outerHTML"
        >
            Click Me!
        </button>

        <script src="https://unpkg.com/htmx.org@1.9.10" integrity="sha384-D1Kt99CQMDuVetoL1lrYwg5t+9QdHe7NLX/SoJYkXDFfX37iInKRy5xLSi8nO7UC" crossorigin="anonymous"></script>
    </body>
</html>
