{{-- <h1>hiiiiiiiiiiii, i am real <br/>

    {{ $msg }} <br>

    {{ $result }}


    @if ($result==100)
    student is good

    @elseif ($result<100)

    student is bed
    @else
    student out of the hoeld

    @endif --}}


<body>


    <ul>
        @foreach ($users as $eachUser)

            <li>User name is ={{ $eachUser['name'] }} and city is {{ $eachUser['city'] }} </li>

        @endforeach


    </ul>
</body>
