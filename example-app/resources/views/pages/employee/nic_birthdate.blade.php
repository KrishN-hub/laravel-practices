{{-- Blade template snippet to extract birthdate and gender from NIC number --}}

@php
function getBirthdateFromNIC($nicNumber) {
    $length = strlen($nicNumber);
    if ($length == 10) { // Old format
        $year = intval(substr($nicNumber, 0, 2));
        $dayNumber = intval(substr($nicNumber, 2, 3));
        if ($dayNumber > 500) {
            $dayNumber -= 500;
            $gender = "Female";
        } else {
            $gender = "Male";
        }
        $year = ($year >= 20) ? 1900 + $year : 2000 + $year;
    } elseif ($length == 12) { // New format
        $year = intval(substr($nicNumber, 0, 4));
        $dayNumber = intval(substr($nicNumber, 4, 3));
        if ($dayNumber > 500) {
            $dayNumber -= 500;
            $gender = "Female";
        } else {
            $gender = "Male";
        }
    } else {
        return "Invalid NIC format";
    }

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

    return [
        "year" => $year,
        "month" => $month,
        "day" => $day,
        "gender" => $gender
    ];
}

// Example NIC numbers
$nic1 = "7908050074";  // Old format (10 characters)
$nic2 = "199015203768"; // New format (12 characters)

$birthdate1 = getBirthdateFromNIC($nic1);
$birthdate2 = getBirthdateFromNIC($nic2);
@endphp

<h3>NIC Birthdate Extraction Example</h3>

<p><strong>NIC:</strong> {{ $nic1 }}</p>
<p><strong>Birthdate:</strong> 
    @if(is_array($birthdate1))
        {{ $birthdate1['year'] }}-{{ str_pad($birthdate1['month'], 2, '0', STR_PAD_LEFT) }}-{{ str_pad($birthdate1['day'], 2, '0', STR_PAD_LEFT) }}
        (Gender: {{ $birthdate1['gender'] }})
    @else
        {{ $birthdate1 }}
    @endif
</p>

<p><strong>NIC:</strong> {{ $nic2 }}</p>
<p><strong>Birthdate:</strong> 
    @if(is_array($birthdate2))
        {{ $birthdate2['year'] }}-{{ str_pad($birthdate2['month'], 2, '0', STR_PAD_LEFT) }}-{{ str_pad($birthdate2['day'], 2, '0', STR_PAD_LEFT) }}
        (Gender: {{ $birthdate2['gender'] }})
    @else
        {{ $birthdate2 }}
    @endif
</p>
