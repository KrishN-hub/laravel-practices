
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        input[type="text"], input[type="name"], input[type="age"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }
        td {
            padding: 10px;
            border: 1px solid #ccc;
        }



        input[type="reset"], input[type="button"] {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
        }


        input[type="time"], input[type="date"], input[type="datetime-local"],
        input[type="month"], input[type="week"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="search"], input[type="number"], input[type="range"],
        input[type="tel"], input[type="url"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }


        input[type="radio"] + label, input[type="checkbox"] + label {
            margin-right: 15px;
            font-weight: normal;
            color: #333;

        }
        Input[type = "password" ], input[type = "email"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        Input[type = "image"] {
            width: 20%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        label {
            display: block;
            font-weight: bold;
            color: #333;
            margin: 10px 0;
            }
        input[type="file"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        select[ name="select[]" ] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        textarea[ name="textarea" ] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            height: 100px;
        }









        </style>
</head>
<body>
<form action="/submit-receive" method="post" autocomplete="off" novalidate>
    @csrf
    <table>
        <tr>
            <td><label >Text:</label></td>
            <td><input type="text" name="text" id="text"></td>
        </tr>
        <tr>
            <td><label >Password:</label></td>
            <td><input type="password" name="password" id="password" required></td>
        </tr>
        <tr>
            <td><label >Email:</label></td>
            {{-- <td><input type="email" name="email" id="email" value = "example@gmail.com" disabled></td> --}}
            <td><input type="email" name="email" id="email" placeholder="example@gmail.com"></td>
        </tr>
        <tr>
            <td><label> Time: </label></td>
            <td><input type="time" name="time" id="time"></td>
        </tr>
        <tr>
            <td><label> Date: </label></td>
            <td><input type="date" name="date" id="date"></td>
        </tr>
        <tr>
            <td><label> Datetime:</label></td>
            <td><input type="datetime-local" name="datetime" id="datetime"></td>
        </tr>
        <tr>
            <td><label> Radio: </label></td>
            <td>
                {{-- <label><input type="radio" name="radio" id="Gender" value="Male" checked > Male</label>
                <label><input type="radio" name="radio" id="Gender" value="Female" checked> Female</label> --}}
                <input type="radio" name="gender" id="male" value="Male" checked >
                <label for ="male">Male</label>
                <input type="radio" name="gender" id="female" value="Female" checked>
                <label for ="female">Female</label>




            </td>
        </tr>
        <tr>
            <td><label> Checkbox: </label></td>
            <td>

                <input type="checkbox" name="Subject[]" id="tamil" value="tamil" checked><label for="ta">Tamil</label>

                <input type="checkbox" name="Subject[]" id="maths" value="maths" checked><label for = "ma">Maths</label>

                <input type="checkbox" name="Subject[]" id="science" value="science" checked><label for="sc">Science</label>
            </td>
        </tr>
        <tr>
            <td><label> Serarch: </label></td>
            <td><input type="search" name="search" id="search"></td>
        </tr>
        <tr>
            <td><label> Number: </label></td>
            <td><input type="number" name="number" id="number" min="2" max="100" step="2"></td>
        </tr>
        <tr>
            <td><label> Range: </label></td>
            <td><input type="range" name="range" id="range" min="0" max="100" step="2"></td>
        </tr>
        <tr>
            <td><label> Month: </label></td>
            <td><input type="month" name="month" id="month"></td>
        </tr>
        <tr>
            <td><label> Tel: </label></td>
            <td><input type="tel" name="tel" id="tel"></td>
        </tr>
        <tr>
            <td><label> Week: </label></td>
            <td><input type="week" name="week" id="week"></td>
        </tr>
        <tr>
            <td><label> URL: </label></td>
            <td><input type="url" name="url" id="url"></td>
        </tr>
        <tr>
            <td><label> Image: </label></td>
            <td><input type="image" src="{{asset('images/seelan.jpg')}}" alt = "Submit"></td>
        </tr>

        <tr>
            <td><label> File: </label></td>
            <td><input type="file" name="file[]" id="file" multiple ></td>
        <tr>

            <td><label> Submit: </label></td>
            <td><input type="submit" value="Submit"></td>
        </tr>
        <tr>
            <td><label> Reset: </label></td>
            <td><input type="reset" value="Reset"></td>
        </tr>
        <tr>
            <td><label> Button: </label></td>
            <td><input type="button" onclick="alert('Button clicked!')" value="Click Me!" ></td>

        </tr>
          <td><label> Select: </label></td>
            <td>
                <select name="select[]" id="select" multiple>
                    <option value="grade 10" selected >Grade 10</option>
                    <option value="grade 11">Grade 11 </option>
                    <option value="grade 12">Grade 12</option>
                </select>
            </td>
        </tr>
        <tr>
            <td> <label for ="textarea">Textarea:</label></td>
            <td> <textarea name="textarea" id="textarea"  placeholder="Enter your text here...">text</textarea></td>
        </tr>
    </table>
</form>
</body>
</html>

