
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Starter Template · Bootstrap</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dragula/3.7.2/dragula.css" integrity="sha256-EYSmiSz2daAX5Xq+m8lxGFf+qWABUgdCPUvU5X0vpI4=" crossorigin="anonymous" />
    <script src='https://cdnjs.cloudflare.com/ajax/libs/dragula/3.7.2/dragula.min.js'></script>
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
</head>
<body>

<main role="main" class="container">

    <div class="pt-4">
        <h1>Seat Planner</h1>
        <p class="lead">This is a Hackertoberfest Project, and a project to help us with our wedding!</p>

        <div id="people" class="card mb-4">
            <div class="card-header bg-primary text-white">
                People
            </div>

            <div id="peopleContainer" class="card-body row">

                @foreach ($data['people'] as $person)
                    <div class="border p-2 m-2 border-info col">
                        {{ $person }}
                    </div>
                @endforeach

            </div>
        </div>

        @foreach($data['tables'] as $table => $folks)
        <div class="card mb-4">
            <div class="card-header">
                {{ $table }}
            </div>

            <div class="card-body row" id="{{ \Str::snake($table) }}">
                @foreach($folks as $person)
                <div class="border p-2 m-2 border-info col">
                    {{ $person }}
                </div>
                @endforeach
            </div>
        </div>
        @endforeach

        <script src='//cdnjs.cloudflare.com/ajax/libs/dragula/3.7.2/dragula.min.js'></script>

        <script>

            containers = [
                document.querySelector('#peopleContainer'),
                @foreach($data['tables'] as $table => $folks)
                document.querySelector('#{{ Str::snake($table)  }}'),
                @endforeach
            ];

            dragula(containers, {
                isContainer: function (el) {
                    return false; // only elements in drake.containers will be taken into account
                },
                moves: function (el, source, handle, sibling) {
                    return true; // elements are always draggable by default
                },
                accepts: function (el, target, source, sibling) {
                    return true; // elements can be dropped in any of the `containers` by default
                },
                invalid: function (el, handle) {
                    return false; // don't prevent any drags from initiating by default
                },
                direction: 'vertical',             // Y axis is considered when determining where an element would be dropped
                copy: false,                       // elements are moved by default, not copied
                copySortSource: false,             // elements in copy-source containers can be reordered
                revertOnSpill: false,              // spilling will put the element back where it was dragged from, if this is true
                removeOnSpill: false,              // spilling will `.remove` the element, if this is true
                mirrorContainer: document.body,    // set the element that gets mirror elements appended
                ignoreInputTextSelection: true     // allows users to select input text, see details below
            });

        </script>



    </div>

</main><!-- /.container -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
