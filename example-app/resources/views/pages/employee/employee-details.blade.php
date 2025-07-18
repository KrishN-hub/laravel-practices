
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee's Information</title>
    <style>
        table,th,td{
            border-collapse: collapse;
            border:1px solid black;
        }
    </style>
</head>
<body>
    <h3>Employee's Information</h3>
    <hr color="black">
    <table>


            <td>ID:</td>
            <td>{{$id}}</td>
        </tr>
        <tr>
            <td>Name:</td>
            <td>{{$name}}</td>
        </tr>
        <tr>
            <td>Age:</td>
            <td>{{$age}}</td>
        </tr>
        <tr>
            <td>Phone Number:</td>
            <td>
            @php
                $converted = Str::substr($number, 0, 3);
            @endphp

            @if ($converted === "077" )
            Dialog number
            @elseif($converted === "075" )
             Airtel number
            @else
             Slt number
             @endif

            </td>
            <tr>
            <td>Nice Number:</td>
            <td>

        @php
        $length = Str::length($nic);
        @endphp

    @if ((int)$length == 10)
    @php
        $dayNumber = Str::substr($nic, 2, 3);
    @endphp
        @if ($dayNumber > 500)
            $dayNumber -= 500
            Female
        @else
            Male
        @endif

        @php
        $year = Str::substr($nic, 0, 2);
        $year = ($year >= 20) ? 1900 + $year : 2000 + $year;
        @endphp




     @elseif ($length == 12)
        @php
        $year = Str::substr($nic, 0, 4);
        $dayNumber = Str::substr($nic, 4, 3);
        @endphp

        @if ($dayNumber > 500)
            $dayNumber -= 500;
            Female
         @else
            Male
        @endif

     @else
        Invalid NIC format;

     @endif
     <br>

            @php
                $monthDays = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
                $month = 1;
                $day = $dayNumber;
                foreach ($monthDays as $m => $days) {
                    if ($day <= $days) {
                        $month = $m + 1;
                        break;
                    } else {
                        $day -= $days;
                    }
                }
            @endphp
            {{$year}}/{{$month}}/{{$day}}
            <br>

            @php
                $age = (int)date('Y') - (int)$year;
            @endphp
            <span>Age is {{$age}}</span>
            <br>















             </td>
             @php
            $data = [' id'=> $id, 'name' => $name, 'age' => $age, 'number' => $number, 'nic' => $nic];
            @endphp
            @foreach ($data as $key => $value)
            <span>{{ $value }}</span><br>
            @endforeach
        </tr>
        </tr>
    </table>
</body>
</html>
@endsection