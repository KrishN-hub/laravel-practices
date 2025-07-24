                {{-- <html>
                    <head>
                        <title> @yield('title') </title>


                    </head>

                    <body>

                        <table  width = "100%" border = "1" style = "border-collapse: collapse;"  >
                            <tr height ="100">
                                <td colspan="2"></td>
                                </tr>
                            <tr height = "400">
                                <td width = 20%>
                @section('sidebar')
                                        <div>
                                            <a href="{{ url('pages/about') }}">About </a>
                                        </div>
                                        <div>
                                            <a href="{{ url('mental/photo') }}">Photo</a>
                                        </div>
                                        <div>
                                            <a href="{{ url('pages/content') }}">Content</a>
                                        </div>
                                        <div>
                                            <a href="{{ url('pages/employee/employee-details') }}">Employee</a>
                                        </div>
                                        <div>
                                            <a href="{{ url('form/input') }}">Input</a>
                                        </div>
                                    @show

                                </td>
                                <td> @yield('content') </td>
                                </tr>
                            <tr height = "100">
                                <td colspan="2"> </td>
                                </tr>

                        </table>
                    </body>
                </html> --}}

                {{-- --------------------------------------------------------- --}}

                <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>@yield('title')</title>
                    @vite(['resources/scss/style.scss', 'resources/js/app.js'])
                @yield('css')
                </head>
                <body>

                    <div class="container-fluid">

                        <header class="bg-primary text-white text-center py-4 mb-3">
                            <h1>@yield('title')</h1>
                        </header>

                        <div class="row">
                            <aside class="col-md-3 col-sm-12 mb-3">
                                @section('sidebar')
                                    <div class="list-group">
                                        <a href="{{ url('/home') }}" class="list-group-item list-group-item-action">Home</a>
                                        <a href="{{ url('pages/about') }}" class="list-group-item list-group-item-action">About</a>
                                        <a href="{{ url('mental/photo') }}" class="list-group-item list-group-item-action">Photo</a>
                                        <a href="{{ url('pages/content') }}" class="list-group-item list-group-item-action">Content</a>
                                        <a href="{{ url('pages/employee/employee-form') }}" class="list-group-item list-group-item-action">Career</a>

                                    </div>
                                @show

                            </aside>


                            <main class="col-md-9 col-sm-12">
                                @yield('content')
                            </main>
                        </div>


                        <footer class="bg-light text-center py-3 mt-4 border-top">
                            <small>&copy; {{ date('Y') }} Pirunthavan@gamil.com</small>
                        </footer>
                    </div>

                </body>
                </html>
