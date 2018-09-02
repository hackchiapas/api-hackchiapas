@extends('layouts.admin')

@section('content')

        <div class="container box">
            <h3 align="center">HackeChiapas</h3><br />
            <div class="panel panel-default">
                <div class="panel-heading">Hackers</div>
                <div class="panel-body">
                    <div class="form-group">
                        <input type="text" name="search" id="search" class="form-control" placeholder="Search Customer Data" />
                    </div>

                    <div class="table-responsive">
                        <table class="table">
                    
                            <thead class="thead-dark" style="background-color: #212121">
                                <td style="background-color: #00C853; color: #FAFAFA" colspan="3">Lista de hackers confirmados</td>
                                <tr>
                                <th scope="col" style="color: #FAFAFA"> id</th>
                                <th scope="col" style="color: #FAFAFA" > name</th>
                                <th scope="col" style="color: #FAFAFA"> email </th>
                            </tr>
                            </thead>
                            <tbody id="TbodyHackers">

                            </tbody>            
                        </table>
                        <table class="table" style="margin-top: 50px;">
                    
                            <thead class="thead-dark" style="background-color: #212121">
                                <td style="background-color: #D50000; color: #FAFAFA" colspan="3">Lista de hackers no confirmados</td>
                                <tr>
                                <th scope="col" style="color: #FAFAFA"> id</th>
                                <th scope="col" style="color: #FAFAFA" > name</th>
                                <th scope="col" style="color: #FAFAFA"> email </th>
                            </tr>
                            </thead>
                            <tbody id="TbodyNotHackers">

                            </tbody>            
                        </table>
                        
                    </div>
                </div>    
            </div>
        </div>
    </body>
</html>


@endsection