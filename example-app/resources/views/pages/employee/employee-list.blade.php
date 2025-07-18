
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management System</title>


    <link rel="stylesheet" href="{{asset('css/style.css') }}" >

</head>
    <body>
        <table width = "100%" >
            <tr height = "100" bgcolor = "lightcyan" >
                <td colspan="2" > Header </td>
            </tr>
        <tr height = " 600" >
            <td width = 20% bgcolor ="lightgoldenrodyellow"> sidebar </td>
            <td width = 80% bgcolor = "khaki">
                <table width = "100%" >
                    <tr>
                        <th>Image</th>
                        <th>ID</th>
                        <th>Employee Name</th>
                        <th>Age</th>
                        <th>Phone Number</th>
                        <th>Show</th>
                    </tr>
                    <tr>
                        <td>
                            <img src="{{asset('images/seelan.jpg')}}" alt="Employee Image" >
                        </td>
                        <td>1</td>
                        <td>Seelan</td>
                        <td>36</td>
                        <td> 0777771111</td>
                        <td> 198705334890</td>
                        <td>
                            <a href="employee-details/001/seelan/36/077777111/198705334890">Seelan Info</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="{{asset('images/piraba.jpg')}}" alt="Employee Image" >
                        </td>
                        <td>2</td>
                        <td>Piraba</td>
                        <td>28</td>
                        <td>0777771112</td>
                        <td> 200055300286</td>
                        <td>
                            <a href="employee-details/002/piraba/28/0777771122/200055300286">Piraba Info</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="{{asset('images/murali.jpg')}}" alt="Employee Image" >
                        </td>
                        <td>3</td>

                        <td>Murali</td>
                        <td>38</td>
                        <td>0757771113</td>
                        <td> 992260742v</td>
                        <td>
                            <a href="employee-details/003/Murali/38/0757771113/992260742v">Murali Info</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="{{asset('images/maaran.jpg')}}" alt="Employee Image" >
                        </td>
                        <td>4</td>
                       <td>Maaran</td>
                        <td>40</td>
                        <td>0777771114</td>
                        <td> 200014900287</td>
                        <td>
                            <a href="employee-details/004/Maaran/40/0777772222/200014900287">Maaran Info</a>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr height = "100" bgcolor = "lavender">
            <td colspan="2"> Footer </td>
        </tr>
        </table>

    </body>
</html>