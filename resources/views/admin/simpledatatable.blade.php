@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    Simple Datatable
    @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <!-- page vendors -->
    <link href="{{ asset('vendors/simple-datatables/css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('vendors/simple-datatables/css/column_filter.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('vendors/simple-datatables/css/editing.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/pages/tables.css') }}" rel="stylesheet" type="text/css" />

    <!--end of page vendors -->
@stop
@section('content')
    <!-- content start-->
    <section class="content px-3 mt-3">
        <div class="row row-cols-1 gap-3">
            <div class="col">
                <div class="card">
                    <div class="card-header border border-primary text-primary border-top-0 border-start-0 border-end-0">
                        <h3 class="card-title text-primary d-inline">
                            Simple Datatable
                        </h3>
                        <span class="float-end">
                            <i class="fa fa-chevron-up clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <div class="responsive">
                            <table id="table1">
                                <thead>
                                    <tr>
                                        <th>
                                            <b>Name</b>
                                        </th>
                                        <th>Ext.</th>
                                        <th>City</th>
                                        <th data-type="date" data-format="YYYY/DD/MM">Start Date</th>
                                        <th>Completion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Unity Pugh</td>
                                        <td>9958</td>
                                        <td>Curicó</td>
                                        <td>2005/02/11</td>
                                        <td>37%</td>
                                    </tr>
                                    <tr>
                                        <td>Theodore Duran</td>
                                        <td>8971</td>
                                        <td>Dhanbad</td>
                                        <td>1999/04/07</td>
                                        <td>97%</td>
                                    </tr>
                                    <tr>
                                        <td>Kylie Bishop</td>
                                        <td>3147</td>
                                        <td>Norman</td>
                                        <td>2005/09/08</td>
                                        <td>63%</td>
                                    </tr>
                                    <tr>
                                        <td>Willow Gilliam</td>
                                        <td>3497</td>
                                        <td>Amqui</td>
                                        <td>2009/29/11</td>
                                        <td>30%</td>
                                    </tr>
                                    <tr>
                                        <td>Blossom Dickerson</td>
                                        <td>5018</td>
                                        <td>Kempten</td>
                                        <td>2006/11/09</td>
                                        <td>17%</td>
                                    </tr>
                                    <tr>
                                        <td>Elliott Snyder</td>
                                        <td>3925</td>
                                        <td>Enines</td>
                                        <td>2006/03/08</td>
                                        <td>57%</td>
                                    </tr>
                                    <tr>
                                        <td>Castor Pugh</td>
                                        <td>9488</td>
                                        <td>Neath</td>
                                        <td>2014/23/12</td>
                                        <td>93%</td>
                                    </tr>
                                    <tr>
                                        <td>Pearl Carlson</td>
                                        <td>6231</td>
                                        <td>Cobourg</td>
                                        <td>2014/31/08</td>
                                        <td>100%</td>
                                    </tr>
                                    <tr>
                                        <td>Deirdre Bridges</td>
                                        <td>1579</td>
                                        <td>Eberswalde-Finow</td>
                                        <td>2014/26/08</td>
                                        <td>44%</td>
                                    </tr>
                                    <tr>
                                        <td>Daniel Baldwin</td>
                                        <td>6095</td>
                                        <td>Moircy</td>
                                        <td>2000/11/01</td>
                                        <td>33%</td>
                                    </tr>
                                    <tr>
                                        <td>Phelan Kane</td>
                                        <td>9519</td>
                                        <td>Germersheim</td>
                                        <td>1999/16/04</td>
                                        <td>77%</td>
                                    </tr>
                                    <tr>
                                        <td>Quentin Salas</td>
                                        <td>1339</td>
                                        <td>Los Andes</td>
                                        <td>2011/26/01</td>
                                        <td>49%</td>
                                    </tr>
                                    <tr>
                                        <td>Armand Suarez</td>
                                        <td>6583</td>
                                        <td>Funtua</td>
                                        <td>1999/06/11</td>
                                        <td>9%</td>
                                    </tr>
                                    <tr>
                                        <td>Gretchen Rogers</td>
                                        <td>5393</td>
                                        <td>Moxhe</td>
                                        <td>1998/26/10</td>
                                        <td>24%</td>
                                    </tr>
                                    <tr>
                                        <td>Harding Thompson</td>
                                        <td>2824</td>
                                        <td>Abeokuta</td>
                                        <td>2008/06/08</td>
                                        <td>10%</td>
                                    </tr>
                                    <tr>
                                        <td>Mira Rocha</td>
                                        <td>4393</td>
                                        <td>Port Harcourt</td>
                                        <td>2002/04/10</td>
                                        <td>14%</td>
                                    </tr>
                                    <tr>
                                        <td>Drew Phillips</td>
                                        <td>2931</td>
                                        <td>Goes</td>
                                        <td>2011/18/10</td>
                                        <td>58%</td>
                                    </tr>
                                    <tr>
                                        <td>Emerald Warner</td>
                                        <td>6205</td>
                                        <td>Chiavari</td>
                                        <td>2002/08/04</td>
                                        <td>58%</td>
                                    </tr>
                                    <tr>
                                        <td>Colin Burch</td>
                                        <td>7457</td>
                                        <td>Anamur</td>
                                        <td>2004/02/01</td>
                                        <td>34%</td>
                                    </tr>
                                    <tr>
                                        <td>Russell Haynes</td>
                                        <td>8916</td>
                                        <td>Frascati</td>
                                        <td>2015/28/04</td>
                                        <td>18%</td>
                                    </tr>
                                    <tr>
                                        <td>Brennan Brooks</td>
                                        <td>9011</td>
                                        <td>Olmué</td>
                                        <td>2000/18/04</td>
                                        <td>2%</td>
                                    </tr>
                                    <tr>
                                        <td>Kane Anthony</td>
                                        <td>8075</td>
                                        <td>LaSalle</td>
                                        <td>2006/21/05</td>
                                        <td>93%</td>
                                    </tr>
                                    <tr>
                                        <td>Scarlett Hurst</td>
                                        <td>1019</td>
                                        <td>Brampton</td>
                                        <td>2015/07/01</td>
                                        <td>94%</td>
                                    </tr>
                                    <tr>
                                        <td>James Scott</td>
                                        <td>3008</td>
                                        <td>Meux</td>
                                        <td>2007/30/05</td>
                                        <td>55%</td>
                                    </tr>
                                    <tr>
                                        <td>Desiree Ferguson</td>
                                        <td>9054</td>
                                        <td>Gojra</td>
                                        <td>2009/15/02</td>
                                        <td>81%</td>
                                    </tr>
                                    <tr>
                                        <td>Elaine Bishop</td>
                                        <td>9160</td>
                                        <td>Petrópolis</td>
                                        <td>2008/23/12</td>
                                        <td>48%</td>
                                    </tr>
                                    <tr>
                                        <td>Hilda Nelson</td>
                                        <td>6307</td>
                                        <td>Posina</td>
                                        <td>2004/23/05</td>
                                        <td>76%</td>
                                    </tr>
                                    <tr>
                                        <td>Evangeline Beasley</td>
                                        <td>3820</td>
                                        <td>Caplan</td>
                                        <td>2009/12/03</td>
                                        <td>62%</td>
                                    </tr>
                                    <tr>
                                        <td>Wyatt Riley</td>
                                        <td>5694</td>
                                        <td>Cavaion Veronese</td>
                                        <td>2012/19/02</td>
                                        <td>67%</td>
                                    </tr>
                                    <tr>
                                        <td>Wyatt Mccarthy</td>
                                        <td>3547</td>
                                        <td>Patan</td>
                                        <td>2014/23/06</td>
                                        <td>9%</td>
                                    </tr>
                                    <tr>
                                        <td>Cairo Rice</td>
                                        <td>6273</td>
                                        <td>Ostra Vetere</td>
                                        <td>2016/27/02</td>
                                        <td>13%</td>
                                    </tr>
                                    <tr>
                                        <td>Sylvia Peters</td>
                                        <td>6829</td>
                                        <td>Arrah</td>
                                        <td>2015/03/02</td>
                                        <td>13%</td>
                                    </tr>
                                    <tr>
                                        <td>Kasper Craig</td>
                                        <td>5515</td>
                                        <td>Firenze</td>
                                        <td>2015/26/04</td>
                                        <td>56%</td>
                                    </tr>
                                    <tr>
                                        <td>Leigh Ruiz</td>
                                        <td>5112</td>
                                        <td>Lac Ste. Anne</td>
                                        <td>2001/09/02</td>
                                        <td>28%</td>
                                    </tr>
                                    <tr>
                                        <td>Athena Aguirre</td>
                                        <td>5741</td>
                                        <td>Romeral</td>
                                        <td>2010/24/03</td>
                                        <td>15%</td>
                                    </tr>
                                    <tr>
                                        <td>Riley Nunez</td>
                                        <td>5533</td>
                                        <td>Sart-Eustache</td>
                                        <td>2003/26/02</td>
                                        <td>30%</td>
                                    </tr>
                                    <tr>
                                        <td>Lois Talley</td>
                                        <td>9393</td>
                                        <td>Dorchester</td>
                                        <td>2014/05/01</td>
                                        <td>51%</td>
                                    </tr>
                                    <tr>
                                        <td>Hop Bass</td>
                                        <td>1024</td>
                                        <td>Westerlo</td>
                                        <td>2012/25/09</td>
                                        <td>85%</td>
                                    </tr>
                                    <tr>
                                        <td>Kalia Diaz</td>
                                        <td>9184</td>
                                        <td>Ichalkaranji</td>
                                        <td>2013/26/06</td>
                                        <td>92%</td>
                                    </tr>
                                    <tr>
                                        <td>Maia Pate</td>
                                        <td>6682</td>
                                        <td>Louvain-la-Neuve</td>
                                        <td>2011/23/04</td>
                                        <td>50%</td>
                                    </tr>
                                    <tr>
                                        <td>Macaulay Pruitt</td>
                                        <td>4457</td>
                                        <td>Fraser-Fort George</td>
                                        <td>2015/03/08</td>
                                        <td>92%</td>
                                    </tr>
                                    <tr>
                                        <td>Danielle Oconnor</td>
                                        <td>9464</td>
                                        <td>Neuwied</td>
                                        <td>2001/05/10</td>
                                        <td>17%</td>
                                    </tr>
                                    <tr>
                                        <td>Kato Carr</td>
                                        <td>4842</td>
                                        <td>Faridabad</td>
                                        <td>2012/11/05</td>
                                        <td>96%</td>
                                    </tr>
                                    <tr>
                                        <td>Malachi Mejia</td>
                                        <td>7133</td>
                                        <td>Vorst</td>
                                        <td>2007/25/04</td>
                                        <td>26%</td>
                                    </tr>
                                    <tr>
                                        <td>Dominic Carver</td>
                                        <td>3476</td>
                                        <td>Pointe-aux-Trembles</td>
                                        <td>2014/14/03</td>
                                        <td>71%</td>
                                    </tr>
                                    <tr>
                                        <td>Paki Santos</td>
                                        <td>4424</td>
                                        <td>Cache Creek</td>
                                        <td>2001/18/11</td>
                                        <td>82%</td>
                                    </tr>
                                    <tr>
                                        <td>Ross Hodges</td>
                                        <td>1862</td>
                                        <td>Trazegnies</td>
                                        <td>2010/19/09</td>
                                        <td>87%</td>
                                    </tr>
                                    <tr>
                                        <td>Hilda Whitley</td>
                                        <td>3514</td>
                                        <td>New Sarepta</td>
                                        <td>2011/05/07</td>
                                        <td>94%</td>
                                    </tr>
                                    <tr>
                                        <td>Roth Cherry</td>
                                        <td>4006</td>
                                        <td>Flin Flon</td>
                                        <td>2008/02/09</td>
                                        <td>8%</td>
                                    </tr>
                                    <tr>
                                        <td>Lareina Jones</td>
                                        <td>8642</td>
                                        <td>East Linton</td>
                                        <td>2009/07/08</td>
                                        <td>21%</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header border border-primary text-primary border-top-0 border-start-0 border-end-0">
                        <h3 class="card-title text-primary d-inline">
                            Dynamic Datatable
                        </h3>
                        <span class="float-end">
                            <i class="fa fa-chevron-up clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <div id="table2"></div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header border border-primary text-primary border-top-0 border-start-0 border-end-0">
                        <h3 class="card-title text-primary d-inline">
                            Custom Cell Render
                        </h3>
                        <span class="float-end">
                            <i class="fa fa-chevron-up clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <div id="table3"></div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header border border-primary text-primary border-top-0 border-start-0 border-end-0">
                        <h3 class="card-title text-primary d-inline">
                            Column Manipulation
                        </h3>
                        <span class="float-end">
                            <i class="fa fa-chevron-up clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <div id="table4"></div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <div class="card-header border border-primary text-primary border-top-0 border-start-0 border-end-0">
                        <h3 class="card-title text-primary d-inline">
                            Datetime Sorting
                        </h3>
                        <span class="float-end">
                            <i class="fa fa-chevron-up clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <div class="">
                            <table id="table5">
                                <thead>
                                    <tr>
                                        <th data-type="date" data-format="ISO_8601">ISO 8601</th>
                                        <th data-type="date" data-format="MYSQL">MySQL</th>
                                        <th>RFC 2822</th>
                                        <!-- Type and format defined in the js -->
                                        <th>MMM D, YYYY</th>
                                        <!-- Type and format defined in the js -->
                                        <th data-type="date" data-format="DD/MM/YYYY">DD/MM/YYYY</th>
                                        <th data-type="date" data-format="MM-DD-YY">MM-DD-YY</th>
                                        <th data-type="date" data-format="UNIX">UNIX</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>2013-06-27T19:10:21-07:00</td>
                                        <td>1994-12-06 22:56:36</td>
                                        <td>Tue, 14 Mar 1995 07:11:46 -0800</td>
                                        <td>Dec 8, 2001</td>
                                        <td>19/10/2016</td>
                                        <td>07-23-12</td>
                                        <td>853102101</td>
                                    </tr>
                                    <tr>
                                        <td>1980-09-12T02:50:23-07:00</td>
                                        <td>1997-11-23 07:06:45</td>
                                        <td>Mon, 21 Nov 2005 04:23:35 -0800</td>
                                        <td>Aug 19, 1997</td>
                                        <td>27/05/1981</td>
                                        <td>01-13-17</td>
                                        <td>713671686</td>
                                    </tr>
                                    <tr>
                                        <td>1994-10-27T12:11:30-07:00</td>
                                        <td>2001-06-22 09:21:47</td>
                                        <td>Sat, 30 Apr 2005 03:36:38 -0700</td>
                                        <td>Aug 1, 1984</td>
                                        <td>04/11/2011</td>
                                        <td>04-25-11</td>
                                        <td>1408349475</td>
                                    </tr>
                                    <tr>
                                        <td>2015-05-20T15:38:00-07:00</td>
                                        <td>1990-12-20 10:13:03</td>
                                        <td>Thu, 16 Jan 2003 16:38:36 -0800</td>
                                        <td>Aug 19, 1982</td>
                                        <td>05/11/1989</td>
                                        <td>03-06-18</td>
                                        <td>677441387</td>
                                    </tr>
                                    <tr>
                                        <td>1982-07-05T06:31:38-07:00</td>
                                        <td>1989-11-18 13:43:58</td>
                                        <td>Thu, 09 Nov 2000 10:25:09 -0800</td>
                                        <td>Oct 11, 2003</td>
                                        <td>16/07/1992</td>
                                        <td>10-29-11</td>
                                        <td>523469491</td>
                                    </tr>
                                    <tr>
                                        <td>2008-08-11T01:01:32-07:00</td>
                                        <td>1981-02-16 19:29:34</td>
                                        <td>Thu, 18 Dec 2003 07:16:19 -0800</td>
                                        <td>May 16, 1981</td>
                                        <td>30/04/1989</td>
                                        <td>05-24-87</td>
                                        <td>1141495716</td>
                                    </tr>
                                    <tr>
                                        <td>1982-11-28T18:34:32-08:00</td>
                                        <td>2002-02-22 04:36:38</td>
                                        <td>Fri, 11 Mar 1994 01:16:08 -0800</td>
                                        <td>Apr 2, 2014</td>
                                        <td>12/10/2008</td>
                                        <td>05-01-90</td>
                                        <td>464746558</td>
                                    </tr>
                                    <tr>
                                        <td>1996-07-29T13:05:44-07:00</td>
                                        <td>1993-03-15 18:27:14</td>
                                        <td>Fri, 06 Jun 2003 07:53:59 -0700</td>
                                        <td>Jul 16, 2004</td>
                                        <td>14/02/1995</td>
                                        <td>02-08-96</td>
                                        <td>405430252</td>
                                    </tr>
                                    <tr>
                                        <td>1987-03-02T20:03:45-08:00</td>
                                        <td>1990-01-09 10:26:10</td>
                                        <td>Thu, 15 Sep 2005 13:12:25 -0700</td>
                                        <td>Nov 9, 2005</td>
                                        <td>14/06/1983</td>
                                        <td>11-19-13</td>
                                        <td>1310935236</td>
                                    </tr>
                                    <tr>
                                        <td>2014-04-02T01:20:31-07:00</td>
                                        <td>1995-03-19 17:07:42</td>
                                        <td>Sat, 11 May 2013 04:14:36 -0700</td>
                                        <td>Jun 11, 2000</td>
                                        <td>17/02/2001</td>
                                        <td>05-03-15</td>
                                        <td>636464866</td>
                                    </tr>
                                    <tr>
                                        <td>1984-01-18T00:39:34-08:00</td>
                                        <td>2015-12-11 13:14:55</td>
                                        <td>Fri, 25 Jan 2013 21:09:50 -0800</td>
                                        <td>Aug 15, 2013</td>
                                        <td>11/02/2005</td>
                                        <td>11-29-93</td>
                                        <td>922286213</td>
                                    </tr>
                                    <tr>
                                        <td>2012-09-04T15:14:23-07:00</td>
                                        <td>1990-01-22 12:37:32</td>
                                        <td>Sat, 01 May 1999 08:20:37 -0700</td>
                                        <td>Jan 27, 1999</td>
                                        <td>02/02/2010</td>
                                        <td>12-04-06</td>
                                        <td>545366064</td>
                                    </tr>
                                    <tr>
                                        <td>1988-03-14T11:42:05-08:00</td>
                                        <td>1992-10-11 21:13:23</td>
                                        <td>Tue, 16 Sep 2008 10:32:44 -0700</td>
                                        <td>May 28, 2012</td>
                                        <td>15/08/2003</td>
                                        <td>02-21-90</td>
                                        <td>896785729</td>
                                    </tr>
                                    <tr>
                                        <td>1983-06-01T05:28:43-07:00</td>
                                        <td>1999-07-12 06:19:13</td>
                                        <td>Tue, 16 Nov 1999 21:31:30 -0800</td>
                                        <td>Nov 30, 2008</td>
                                        <td>23/01/2004</td>
                                        <td>03-17-08</td>
                                        <td>1422578713</td>
                                    </tr>
                                    <tr>
                                        <td>1980-08-06T05:20:08-07:00</td>
                                        <td>1986-09-14 19:36:53</td>
                                        <td>Fri, 29 Oct 1999 22:21:35 -0700</td>
                                        <td>May 28, 2014</td>
                                        <td>23/01/1983</td>
                                        <td>03-13-04</td>
                                        <td>1459690948</td>
                                    </tr>
                                    <tr>
                                        <td>2014-02-15T19:50:40-08:00</td>
                                        <td>1997-11-11 15:45:24</td>
                                        <td>Tue, 07 Jun 1988 16:20:04 -0700</td>
                                        <td>Oct 17, 1992</td>
                                        <td>04/12/1993</td>
                                        <td>10-10-08</td>
                                        <td>1349969151</td>
                                    </tr>
                                    <tr>
                                        <td>2007-02-08T13:38:13-08:00</td>
                                        <td>2010-01-05 22:22:21</td>
                                        <td>Mon, 18 Sep 2017 01:18:07 -0700</td>
                                        <td>Apr 29, 1999</td>
                                        <td>16/08/1994</td>
                                        <td>06-30-84</td>
                                        <td>756326365</td>
                                    </tr>
                                    <tr>
                                        <td>2014-02-03T17:32:42-08:00</td>
                                        <td>1989-06-20 22:14:41</td>
                                        <td>Mon, 20 Apr 1981 04:11:15 -0800</td>
                                        <td>Jan 17, 1993</td>
                                        <td>16/07/2015</td>
                                        <td>09-20-15</td>
                                        <td>688566388</td>
                                    </tr>
                                    <tr>
                                        <td>2015-03-30T05:58:40-07:00</td>
                                        <td>2010-10-31 08:34:15</td>
                                        <td>Tue, 26 May 1998 19:03:54 -0700</td>
                                        <td>Jan 12, 2012</td>
                                        <td>13/08/1988</td>
                                        <td>11-27-09</td>
                                        <td>660566468</td>
                                    </tr>
                                    <tr>
                                        <td>1992-07-03T09:37:26-07:00</td>
                                        <td>1996-01-19 16:42:48</td>
                                        <td>Wed, 06 Apr 2005 16:01:04 -0700</td>
                                        <td>Aug 19, 1994</td>
                                        <td>10/10/1990</td>
                                        <td>12-03-10</td>
                                        <td>797131280</td>
                                    </tr>
                                    <tr>
                                        <td>2004-03-01T04:34:57-08:00</td>
                                        <td>1982-10-26 19:46:32</td>
                                        <td>Fri, 23 May 2008 11:31:53 -0700</td>
                                        <td>Apr 27, 2018</td>
                                        <td>30/03/2000</td>
                                        <td>09-15-13</td>
                                        <td>1012207791</td>
                                    </tr>
                                    <tr>
                                        <td>1984-01-23T01:49:39-08:00</td>
                                        <td>2003-06-12 23:12:34</td>
                                        <td>Wed, 07 May 2014 13:14:43 -0700</td>
                                        <td>May 22, 1981</td>
                                        <td>14/12/1994</td>
                                        <td>05-04-88</td>
                                        <td>411303318</td>
                                    </tr>
                                    <tr>
                                        <td>2000-02-01T08:26:03-08:00</td>
                                        <td>2013-08-17 17:08:56</td>
                                        <td>Sun, 16 Feb 2014 08:49:40 -0800</td>
                                        <td>Sep 14, 1991</td>
                                        <td>05/01/1998</td>
                                        <td>09-03-00</td>
                                        <td>1230907590</td>
                                    </tr>
                                    <tr>
                                        <td>1990-04-28T11:08:20-07:00</td>
                                        <td>2016-04-15 18:30:45</td>
                                        <td>Mon, 30 Jan 1995 17:37:31 -0800</td>
                                        <td>Nov 5, 1998</td>
                                        <td>26/10/2015</td>
                                        <td>08-04-99</td>
                                        <td>506528026</td>
                                    </tr>
                                    <tr>
                                        <td>2017-05-30T18:51:39-07:00</td>
                                        <td>2008-10-16 08:24:15</td>
                                        <td>Fri, 24 May 2002 16:37:40 -0700</td>
                                        <td>Jul 31, 2008</td>
                                        <td>05/07/1992</td>
                                        <td>10-13-08</td>
                                        <td>1469041684</td>
                                    </tr>
                                    <tr>
                                        <td>1997-09-23T16:45:18-07:00</td>
                                        <td>1980-10-18 17:44:41</td>
                                        <td>Mon, 01 May 1995 19:59:01 -0700</td>
                                        <td>Nov 4, 2000</td>
                                        <td>25/12/1989</td>
                                        <td>07-19-12</td>
                                        <td>621984653</td>
                                    </tr>
                                    <tr>
                                        <td>1995-04-29T23:03:40-07:00</td>
                                        <td>1989-10-25 12:31:30</td>
                                        <td>Tue, 15 Jan 2002 05:54:34 -0800</td>
                                        <td>Jan 6, 2004</td>
                                        <td>14/09/1988</td>
                                        <td>12-06-05</td>
                                        <td>1197629198</td>
                                    </tr>
                                    <tr>
                                        <td>1992-09-03T16:13:30-07:00</td>
                                        <td>2016-11-02 20:53:12</td>
                                        <td>Sun, 26 Oct 2008 10:23:41 -0700</td>
                                        <td>Feb 20, 2012</td>
                                        <td>24/08/1997</td>
                                        <td>10-09-90</td>
                                        <td>971030263</td>
                                    </tr>
                                    <tr>
                                        <td>1985-06-14T07:56:01-07:00</td>
                                        <td>2012-08-21 03:36:44</td>
                                        <td>Sat, 14 Jul 1990 09:55:01 -0700</td>
                                        <td>Jul 18, 2006</td>
                                        <td>02/12/1986</td>
                                        <td>07-19-10</td>
                                        <td>790694847</td>
                                    </tr>
                                    <tr>
                                        <td>2003-07-04T23:31:49-07:00</td>
                                        <td>2011-09-10 03:13:33</td>
                                        <td>Wed, 14 Apr 1999 22:22:13 -0700</td>
                                        <td>Mar 17, 2015</td>
                                        <td>04/04/1997</td>
                                        <td>02-14-17</td>
                                        <td>531923003</td>
                                    </tr>
                                    <tr>
                                        <td>2003-04-08T17:11:53-07:00</td>
                                        <td>1994-01-07 13:48:34</td>
                                        <td>Tue, 21 Nov 2000 08:27:16 -0800</td>
                                        <td>Dec 20, 1994</td>
                                        <td>10/01/2004</td>
                                        <td>09-09-12</td>
                                        <td>852109187</td>
                                    </tr>
                                    <tr>
                                        <td>2004-10-13T08:16:30-07:00</td>
                                        <td>2003-10-15 00:27:08</td>
                                        <td>Wed, 05 Nov 2008 04:29:41 -0800</td>
                                        <td>Apr 16, 2008</td>
                                        <td>15/07/2011</td>
                                        <td>06-29-89</td>
                                        <td>768738934</td>
                                    </tr>
                                    <tr>
                                        <td>2014-09-08T02:46:50-07:00</td>
                                        <td>2005-06-25 22:30:28</td>
                                        <td>Wed, 29 Aug 2007 11:36:57 -0700</td>
                                        <td>Jul 30, 2007</td>
                                        <td>14/06/2017</td>
                                        <td>12-19-82</td>
                                        <td>792021852</td>
                                    </tr>
                                    <tr>
                                        <td>2013-07-31T20:04:20-07:00</td>
                                        <td>2000-05-08 03:10:48</td>
                                        <td>Wed, 21 Aug 2002 02:44:56 -0700</td>
                                        <td>Aug 5, 1992</td>
                                        <td>12/06/1990</td>
                                        <td>01-31-09</td>
                                        <td>499082057</td>
                                    </tr>
                                    <tr>
                                        <td>1981-06-19T06:12:48-07:00</td>
                                        <td>1996-01-04 13:55:27</td>
                                        <td>Sun, 16 Apr 1995 17:10:31 -0700</td>
                                        <td>Jan 29, 2003</td>
                                        <td>17/12/2009</td>
                                        <td>09-23-01</td>
                                        <td>751381880</td>
                                    </tr>
                                    <tr>
                                        <td>1983-03-26T22:14:09-08:00</td>
                                        <td>2010-05-24 10:15:52</td>
                                        <td>Wed, 30 May 1990 04:00:23 -0700</td>
                                        <td>Nov 5, 2001</td>
                                        <td>30/06/2005</td>
                                        <td>06-27-17</td>
                                        <td>1361673368</td>
                                    </tr>
                                    <tr>
                                        <td>2007-10-27T00:12:47-07:00</td>
                                        <td>1990-03-19 14:32:54</td>
                                        <td>Wed, 15 Jul 2015 19:09:29 -0700</td>
                                        <td>Jun 9, 2009</td>
                                        <td>24/10/2002</td>
                                        <td>08-06-06</td>
                                        <td>381211783</td>
                                    </tr>
                                    <tr>
                                        <td>1986-03-01T20:03:21-08:00</td>
                                        <td>1999-11-11 15:25:57</td>
                                        <td>Wed, 12 Dec 1990 08:33:58 -0800</td>
                                        <td>Mar 30, 2009</td>
                                        <td>09/10/1996</td>
                                        <td>09-30-14</td>
                                        <td>409927546</td>
                                    </tr>
                                    <tr>
                                        <td>2008-05-23T06:42:32-07:00</td>
                                        <td>1997-09-23 09:21:44</td>
                                        <td>Tue, 21 Aug 1990 22:35:33 -0700</td>
                                        <td>Jul 13, 2002</td>
                                        <td>07/06/2006</td>
                                        <td>03-07-96</td>
                                        <td>720880299</td>
                                    </tr>
                                    <tr>
                                        <td>1988-01-08T21:13:18-08:00</td>
                                        <td>2003-08-29 15:35:34</td>
                                        <td>Wed, 04 May 1983 07:15:13 -0700</td>
                                        <td>May 3, 2001</td>
                                        <td>06/10/2016</td>
                                        <td>03-22-92</td>
                                        <td>589612117</td>
                                    </tr>
                                    <tr>
                                        <td>1985-11-28T05:00:37-08:00</td>
                                        <td>1998-02-15 10:31:39</td>
                                        <td>Wed, 17 Jul 1996 14:19:42 -0700</td>
                                        <td>Jan 16, 2006</td>
                                        <td>19/01/1982</td>
                                        <td>02-16-03</td>
                                        <td>936614487</td>
                                    </tr>
                                    <tr>
                                        <td>1998-04-16T10:01:58-07:00</td>
                                        <td>1988-09-27 12:09:21</td>
                                        <td>Sun, 31 Dec 1989 04:56:52 -0800</td>
                                        <td>Jul 1, 2006</td>
                                        <td>11/07/2017</td>
                                        <td>06-29-88</td>
                                        <td>744280097</td>
                                    </tr>
                                    <tr>
                                        <td>2001-04-26T04:45:59-07:00</td>
                                        <td>1983-12-12 01:14:03</td>
                                        <td>Tue, 10 May 1994 16:46:37 -0700</td>
                                        <td>Feb 13, 1987</td>
                                        <td>12/01/2002</td>
                                        <td>08-08-93</td>
                                        <td>1032132619</td>
                                    </tr>
                                    <tr>
                                        <td>2016-07-09T08:17:55-07:00</td>
                                        <td>1995-12-30 01:59:58</td>
                                        <td>Sun, 24 Oct 1982 08:21:14 -0700</td>
                                        <td>Jan 23, 2006</td>
                                        <td>28/09/2014</td>
                                        <td>03-20-12</td>
                                        <td>438442662</td>
                                    </tr>
                                    <tr>
                                        <td>1986-04-17T16:29:47-08:00</td>
                                        <td>1997-12-23 00:33:41</td>
                                        <td>Tue, 19 Dec 2006 08:37:27 -0800</td>
                                        <td>Apr 21, 1994</td>
                                        <td>04/03/2018</td>
                                        <td>10-28-92</td>
                                        <td>1283999369</td>
                                    </tr>
                                    <tr>
                                        <td>2001-05-28T14:42:06-07:00</td>
                                        <td>1989-07-17 21:20:24</td>
                                        <td>Thu, 03 Oct 1996 14:01:26 -0700</td>
                                        <td>Jul 11, 1998</td>
                                        <td>12/02/1996</td>
                                        <td>07-17-14</td>
                                        <td>796383797</td>
                                    </tr>
                                    <tr>
                                        <td>2010-05-10T21:56:37-07:00</td>
                                        <td>1981-11-30 23:34:05</td>
                                        <td>Sun, 20 Jan 1991 18:26:15 -0800</td>
                                        <td>May 12, 1984</td>
                                        <td>13/08/1989</td>
                                        <td>09-27-15</td>
                                        <td>1093571343</td>
                                    </tr>
                                    <tr>
                                        <td>2013-04-15T11:28:17-07:00</td>
                                        <td>2018-05-26 18:25:17</td>
                                        <td>Mon, 07 Jul 2008 21:44:42 -0700</td>
                                        <td>Jul 7, 1997</td>
                                        <td>22/01/1990</td>
                                        <td>07-25-94</td>
                                        <td>1129728454</td>
                                    </tr>
                                    <tr>
                                        <td>2011-03-21T07:49:44-07:00</td>
                                        <td>1986-10-01 15:01:21</td>
                                        <td>Tue, 02 Dec 2014 09:47:38 -0800</td>
                                        <td>Sep 2, 2014</td>
                                        <td>07/10/2009</td>
                                        <td>10-17-10</td>
                                        <td>1513973450</td>
                                    </tr>
                                    <tr>
                                        <td>1985-09-18T16:06:08-07:00</td>
                                        <td>2007-11-28 01:13:17</td>
                                        <td>Sat, 14 Dec 2013 02:28:33 -0800</td>
                                        <td>Jan 29, 2002</td>
                                        <td>30/01/1983</td>
                                        <td>03-30-02</td>
                                        <td>465440158</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header border border-primary text-primary border-top-0 border-start-0 border-end-0">
                        <h3 class="card-title text-primary d-inline">
                            Custom Cell Render
                        </h3>
                        <span class="float-end">
                            <i class="fa fa-chevron-up clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <h2>Init/destroy and import/export</h2>
                        <div class="controls">
                            <button id="init" type="button" class=" btn btn-success main">Init</button>
                            <button id="destroy" type="button" class="btn btn-danger main">Destroy</button>
                        </div>

                        <table class="table6">
                            <thead>
                                <tr>
                                    <th>Select</th>
                                    <th>Customer</th>
                                    <th>Version</th>
                                    <th data-type="date" data-format="DD.MM.YYYY">Planned upgrade</th>
                                    <th>DB-Info</th>
                                    <th>Website info</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td>
                                        Test one <br>CCode: 33123
                                    </td>
                                    <td>7.1.5</td>
                                    <td>26.11.2018</td>
                                    <td>
                                        Server: s1 <br>DB: db1
                                    </td>
                                    <td>
                                        Websitename: Red <br>Node: 10
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        Test two <br>CCode: 12353
                                    </td>
                                    <td>7.1.5.2</td>
                                    <td>26.11.2019</td>
                                    <td>
                                        Server: s1 <br>DB: db2
                                    </td>
                                    <td>
                                        Websitename: Green <br>Node: 6
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        Test three <br>CCode: 33522
                                    </td>
                                    <td>7.1.6</td>
                                    <td>01.01.2020</td>
                                    <td>
                                        Server: s2 <br>DB: db1
                                    </td>
                                    <td>
                                        Websitename: Orange <br>Node: 5
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        Test four <br>CCode: 25512
                                    </td>
                                    <td>7.1.7</td>
                                    <td>26.03.2021</td>
                                    <td>
                                        Server: s1 <br>DB: db3
                                    </td>
                                    <td>
                                        Websitename: Blue <br>Node: 10
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div id="hide">
                            <strong>Column Visibility</strong>
                            <div class="mb-2" id="columns"></div>

                            <br>

                            <strong>Import / Export Data</strong>
                            <div class="card-block">
                                <div class="mb-2">
                                    <textarea class="texts h70" name="" id="" 
                                        placeholder="Paste your CSV or JSON string here..."></textarea>
                                </div>
                                <div class="mb-2">
                                    <button type="button" class="btn btn-primary import" data-type="csv">Import
                                        CSV</button>
                                    <button type="button" class="btn btn-primary import" data-type="json">Import
                                        JSON</button>
                                    <button type="button" class="btn btn-success export" data-type="csv">Export
                                        CSV</button>
                                    <button type="button" class="btn btn-success export" data-type="sql">Export
                                        SQL</button>
                                    <button type="button" class="btn btn-success export" data-type="json">Export
                                        JSON</button>
                                </div>
                                <div class="mb-2">
                                    <small>
                                        Note: The csv column delimiters and line delimiters are set to <code>","</code>
                                        and <code>"\n"</code> respectively.
                                    </small>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header border border-primary text-primary border-top-0 border-start-0 border-end-0">
                        <h3 class="card-title text-primary d-inline">
                            Filter Datatable
                        </h3>
                        <span class="float-end">
                            <i class="fa fa-chevron-up clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <div id="table6"></div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header border border-primary text-primary border-top-0 border-start-0 border-end-0">
                        <h3 class="card-title text-primary d-inline">
                            Add 1000 Rows
                        </h3>
                        <span class="float-end">
                            <i class="fa fa-chevron-up clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <button id="add1" class="btn btn-secondary">Add 1000 Rows</button>
                        <div id="table7"></div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <div class="card-header border border-primary text-primary border-top-0 border-start-0 border-end-0">
                        <h3 class="card-title text-primary d-inline">
                            Add 1000 rows without conversion (faster)
                        </h3>
                        <span class="float-end">
                            <i class="fa fa-chevron-up clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <button id="add2" class="btn btn-secondary">Add 1000 Rows</button>
                        <div id="table8"></div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header border border-primary text-primary border-top-0 border-start-0 border-end-0">
                        <h3 class="card-title text-primary d-inline">
                            Export Simple Datatables
                        </h3>
                        <span class="float-end">
                            <i class="fa fa-chevron-up clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <table id="table9">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Ext.</th>
                                    <th>City</th>
                                    <th data-type="date" data-format="YYYY/DD/MM">Start Date</th>
                                    <th>Completion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Unity Pugh</td>
                                    <td>9958</td>
                                    <td>Curicó</td>
                                    <td>2005/02/11</td>
                                    <td>37%</td>
                                </tr>
                                <tr>
                                    <td>Theodore Duran</td>
                                    <td>8971</td>
                                    <td>Dhanbad</td>
                                    <td>1999/04/07</td>
                                    <td>97%</td>
                                </tr>
                                <tr>
                                    <td>Kylie Bishop</td>
                                    <td>3147</td>
                                    <td>Norman</td>
                                    <td>2005/09/08</td>
                                    <td>63%</td>
                                </tr>
                                <tr>
                                    <td>Willow Gilliam</td>
                                    <td>3497</td>
                                    <td>Amqui</td>
                                    <td>2009/29/11</td>
                                    <td>30%</td>
                                </tr>
                                <tr>
                                    <td>Blossom Dickerson</td>
                                    <td>5018</td>
                                    <td>Kempten</td>
                                    <td>2006/11/09</td>
                                    <td>17%</td>
                                </tr>
                                <tr>
                                    <td>Elliott Snyder</td>
                                    <td>3925</td>
                                    <td>Enines</td>
                                    <td>2006/03/08</td>
                                    <td>57%</td>
                                </tr>
                                <tr>
                                    <td>Castor Pugh</td>
                                    <td>9488</td>
                                    <td>Neath</td>
                                    <td>2014/23/12</td>
                                    <td>93%</td>
                                </tr>
                                <tr>
                                    <td>Pearl Carlson</td>
                                    <td>6231</td>
                                    <td>Cobourg</td>
                                    <td>2014/31/08</td>
                                    <td>100%</td>
                                </tr>
                                <tr>
                                    <td>Deirdre Bridges</td>
                                    <td>1579</td>
                                    <td>Eberswalde-Finow</td>
                                    <td>2014/26/08</td>
                                    <td>44%</td>
                                </tr>
                                <tr>
                                    <td>Daniel Baldwin</td>
                                    <td>6095</td>
                                    <td>Moircy</td>
                                    <td>2000/11/01</td>
                                    <td>33%</td>
                                </tr>
                                <tr>
                                    <td>Phelan Kane</td>
                                    <td>9519</td>
                                    <td>Germersheim</td>
                                    <td>1999/16/04</td>
                                    <td>77%</td>
                                </tr>
                                <tr>
                                    <td>Quentin Salas</td>
                                    <td>1339</td>
                                    <td>Los Andes</td>
                                    <td>2011/26/01</td>
                                    <td>49%</td>
                                </tr>
                                <tr>
                                    <td>Armand Suarez</td>
                                    <td>6583</td>
                                    <td>Funtua</td>
                                    <td>1999/06/11</td>
                                    <td>9%</td>
                                </tr>
                                <tr>
                                    <td>Gretchen Rogers</td>
                                    <td>5393</td>
                                    <td>Moxhe</td>
                                    <td>1998/26/10</td>
                                    <td>24%</td>
                                </tr>
                                <tr>
                                    <td>Harding Thompson</td>
                                    <td>2824</td>
                                    <td>Abeokuta</td>
                                    <td>2008/06/08</td>
                                    <td>10%</td>
                                </tr>
                                <tr>
                                    <td>Mira Rocha</td>
                                    <td>4393</td>
                                    <td>Port Harcourt</td>
                                    <td>2002/04/10</td>
                                    <td>14%</td>
                                </tr>
                                <tr>
                                    <td>Drew Phillips</td>
                                    <td>2931</td>
                                    <td>Goes</td>
                                    <td>2011/18/10</td>
                                    <td>58%</td>
                                </tr>
                                <tr>
                                    <td>Emerald Warner</td>
                                    <td>6205</td>
                                    <td>Chiavari</td>
                                    <td>2002/08/04</td>
                                    <td>58%</td>
                                </tr>
                                <tr>
                                    <td>Colin Burch</td>
                                    <td>7457</td>
                                    <td>Anamur</td>
                                    <td>2004/02/01</td>
                                    <td>34%</td>
                                </tr>
                                <tr>
                                    <td>Russell Haynes</td>
                                    <td>8916</td>
                                    <td>Frascati</td>
                                    <td>2015/28/04</td>
                                    <td>18%</td>
                                </tr>
                                <tr>
                                    <td>Brennan Brooks</td>
                                    <td>9011</td>
                                    <td>Olmué</td>
                                    <td>2000/18/04</td>
                                    <td>2%</td>
                                </tr>
                                <tr>
                                    <td>Kane Anthony</td>
                                    <td>8075</td>
                                    <td>LaSalle</td>
                                    <td>2006/21/05</td>
                                    <td>93%</td>
                                </tr>
                                <tr>
                                    <td>Scarlett Hurst</td>
                                    <td>1019</td>
                                    <td>Brampton</td>
                                    <td>2015/07/01</td>
                                    <td>94%</td>
                                </tr>
                                <tr>
                                    <td>James Scott</td>
                                    <td>3008</td>
                                    <td>Meux</td>
                                    <td>2007/30/05</td>
                                    <td>55%</td>
                                </tr>
                                <tr>
                                    <td>Desiree Ferguson</td>
                                    <td>9054</td>
                                    <td>Gojra</td>
                                    <td>2009/15/02</td>
                                    <td>81%</td>
                                </tr>
                                <tr>
                                    <td>Elaine Bishop</td>
                                    <td>9160</td>
                                    <td>Petrópolis</td>
                                    <td>2008/23/12</td>
                                    <td>48%</td>
                                </tr>
                                <tr>
                                    <td>Hilda Nelson</td>
                                    <td>6307</td>
                                    <td>Posina</td>
                                    <td>2004/23/05</td>
                                    <td>76%</td>
                                </tr>
                                <tr>
                                    <td>Evangeline Beasley</td>
                                    <td>3820</td>
                                    <td>Caplan</td>
                                    <td>2009/12/03</td>
                                    <td>62%</td>
                                </tr>
                                <tr>
                                    <td>Wyatt Riley</td>
                                    <td>5694</td>
                                    <td>Cavaion Veronese</td>
                                    <td>2012/19/02</td>
                                    <td>67%</td>
                                </tr>
                                <tr>
                                    <td>Wyatt Mccarthy</td>
                                    <td>3547</td>
                                    <td>Patan</td>
                                    <td>2014/23/06</td>
                                    <td>9%</td>
                                </tr>
                                <tr>
                                    <td>Cairo Rice</td>
                                    <td>6273</td>
                                    <td>Ostra Vetere</td>
                                    <td>2016/27/02</td>
                                    <td>13%</td>
                                </tr>
                                <tr>
                                    <td>Sylvia Peters</td>
                                    <td>6829</td>
                                    <td>Arrah</td>
                                    <td>2015/03/02</td>
                                    <td>13%</td>
                                </tr>
                                <tr>
                                    <td>Kasper Craig</td>
                                    <td>5515</td>
                                    <td>Firenze</td>
                                    <td>2015/26/04</td>
                                    <td>56%</td>
                                </tr>
                                <tr>
                                    <td>Leigh Ruiz</td>
                                    <td>5112</td>
                                    <td>Lac Ste. Anne</td>
                                    <td>2001/09/02</td>
                                    <td>28%</td>
                                </tr>
                                <tr>
                                    <td>Athena Aguirre</td>
                                    <td>5741</td>
                                    <td>Romeral</td>
                                    <td>2010/24/03</td>
                                    <td>15%</td>
                                </tr>
                                <tr>
                                    <td>Riley Nunez</td>
                                    <td>5533</td>
                                    <td>Sart-Eustache</td>
                                    <td>2003/26/02</td>
                                    <td>30%</td>
                                </tr>
                                <tr>
                                    <td>Lois Talley</td>
                                    <td>9393</td>
                                    <td>Dorchester</td>
                                    <td>2014/05/01</td>
                                    <td>51%</td>
                                </tr>
                                <tr>
                                    <td>Hop Bass</td>
                                    <td>1024</td>
                                    <td>Westerlo</td>
                                    <td>2012/25/09</td>
                                    <td>85%</td>
                                </tr>
                                <tr>
                                    <td>Kalia Diaz</td>
                                    <td>9184</td>
                                    <td>Ichalkaranji</td>
                                    <td>2013/26/06</td>
                                    <td>92%</td>
                                </tr>
                                <tr>
                                    <td>Maia Pate</td>
                                    <td>6682</td>
                                    <td>Louvain-la-Neuve</td>
                                    <td>2011/23/04</td>
                                    <td>50%</td>
                                </tr>
                                <tr>
                                    <td>Macaulay Pruitt</td>
                                    <td>4457</td>
                                    <td>Fraser-Fort George</td>
                                    <td>2015/03/08</td>
                                    <td>92%</td>
                                </tr>
                                <tr>
                                    <td>Danielle Oconnor</td>
                                    <td>9464</td>
                                    <td>Neuwied</td>
                                    <td>2001/05/10</td>
                                    <td>17%</td>
                                </tr>
                                <tr>
                                    <td>Kato Carr</td>
                                    <td>4842</td>
                                    <td>Faridabad</td>
                                    <td>2012/11/05</td>
                                    <td>96%</td>
                                </tr>
                                <tr>
                                    <td>Malachi Mejia</td>
                                    <td>7133</td>
                                    <td>Vorst</td>
                                    <td>2007/25/04</td>
                                    <td>26%</td>
                                </tr>
                                <tr>
                                    <td>Dominic Carver</td>
                                    <td>3476</td>
                                    <td>Pointe-aux-Trembles</td>
                                    <td>2014/14/03</td>
                                    <td>71%</td>
                                </tr>
                                <tr>
                                    <td>Paki Santos</td>
                                    <td>4424</td>
                                    <td>Cache Creek</td>
                                    <td>2001/18/11</td>
                                    <td>82%</td>
                                </tr>
                                <tr>
                                    <td>Ross Hodges</td>
                                    <td>1862</td>
                                    <td>Trazegnies</td>
                                    <td>2010/19/09</td>
                                    <td>87%</td>
                                </tr>
                                <tr>
                                    <td>Hilda Whitley</td>
                                    <td>3514</td>
                                    <td>New Sarepta</td>
                                    <td>2011/05/07</td>
                                    <td>94%</td>
                                </tr>
                                <tr>
                                    <td>Roth Cherry</td>
                                    <td>4006</td>
                                    <td>Flin Flon</td>
                                    <td>2008/02/09</td>
                                    <td>8%</td>
                                </tr>
                                <tr>
                                    <td>Lareina Jones</td>
                                    <td>8642</td>
                                    <td>East Linton</td>
                                    <td>2009/07/08</td>
                                    <td>21%</td>
                                </tr>
                                <tr>
                                    <td>Joshua Weiss</td>
                                    <td>2289</td>
                                    <td>Saint-Léonard</td>
                                    <td>2010/15/01</td>
                                    <td>52%</td>
                                </tr>
                                <tr>
                                    <td>Kiona Lowery</td>
                                    <td>5952</td>
                                    <td>Inuvik</td>
                                    <td>2002/17/12</td>
                                    <td>72%</td>
                                </tr>
                                <tr>
                                    <td>Nina Rush</td>
                                    <td>7567</td>
                                    <td>Bo‘lhe</td>
                                    <td>2008/27/01</td>
                                    <td>6%</td>
                                </tr>
                                <tr>
                                    <td>Palmer Parker</td>
                                    <td>2000</td>
                                    <td>Stade</td>
                                    <td>2012/24/07</td>
                                    <td>58%</td>
                                </tr>
                                <tr>
                                    <td>Vielka Olsen</td>
                                    <td>3745</td>
                                    <td>Vrasene</td>
                                    <td>2016/08/01</td>
                                    <td>70%</td>
                                </tr>
                                <tr>
                                    <td>Meghan Cunningham</td>
                                    <td>8604</td>
                                    <td>Söke</td>
                                    <td>2007/16/02</td>
                                    <td>59%</td>
                                </tr>
                                <tr>
                                    <td>Iola Shaw</td>
                                    <td>6447</td>
                                    <td>Albany</td>
                                    <td>2014/05/03</td>
                                    <td>88%</td>
                                </tr>
                                <tr>
                                    <td>Imelda Cole</td>
                                    <td>4564</td>
                                    <td>Haasdonk</td>
                                    <td>2007/16/11</td>
                                    <td>79%</td>
                                </tr>
                                <tr>
                                    <td>Jerry Beach</td>
                                    <td>6801</td>
                                    <td>Gattatico</td>
                                    <td>1999/07/07</td>
                                    <td>36%</td>
                                </tr>
                                <tr>
                                    <td>Garrett Rocha</td>
                                    <td>3938</td>
                                    <td>Gavorrano</td>
                                    <td>2000/06/08</td>
                                    <td>71%</td>
                                </tr>
                                <tr>
                                    <td>Derek Kerr</td>
                                    <td>1724</td>
                                    <td>Gualdo Cattaneo</td>
                                    <td>2014/21/01</td>
                                    <td>89%</td>
                                </tr>
                                <tr>
                                    <td>Shad Hudson</td>
                                    <td>5944</td>
                                    <td>Salamanca</td>
                                    <td>2014/10/12</td>
                                    <td>98%</td>
                                </tr>
                                <tr>
                                    <td>Daryl Ayers</td>
                                    <td>8276</td>
                                    <td>Barchi</td>
                                    <td>2012/12/11</td>
                                    <td>88%</td>
                                </tr>
                                <tr>
                                    <td>Caleb Livingston</td>
                                    <td>3094</td>
                                    <td>Fatehpur</td>
                                    <td>2014/13/02</td>
                                    <td>8%</td>
                                </tr>
                                <tr>
                                    <td>Sydney Meyer</td>
                                    <td>4576</td>
                                    <td>Neubrandenburg</td>
                                    <td>2015/06/02</td>
                                    <td>22%</td>
                                </tr>
                                <tr>
                                    <td>Lani Lawrence</td>
                                    <td>8501</td>
                                    <td>Turnhout</td>
                                    <td>2008/07/05</td>
                                    <td>16%</td>
                                </tr>
                                <tr>
                                    <td>Allegra Shepherd</td>
                                    <td>2576</td>
                                    <td>Meeuwen-Gruitrode</td>
                                    <td>2004/19/04</td>
                                    <td>41%</td>
                                </tr>
                                <tr>
                                    <td>Fallon Reyes</td>
                                    <td>3178</td>
                                    <td>Monceau-sur-Sambre</td>
                                    <td>2005/15/02</td>
                                    <td>16%</td>
                                </tr>
                                <tr>
                                    <td>Karen Whitley</td>
                                    <td>4357</td>
                                    <td>Sluis</td>
                                    <td>2003/02/05</td>
                                    <td>23%</td>
                                </tr>
                                <tr>
                                    <td>Stewart Stephenson</td>
                                    <td>5350</td>
                                    <td>Villa Faraldi</td>
                                    <td>2003/05/07</td>
                                    <td>65%</td>
                                </tr>
                                <tr>
                                    <td>Ursula Reynolds</td>
                                    <td>7544</td>
                                    <td>Southampton</td>
                                    <td>1999/16/12</td>
                                    <td>61%</td>
                                </tr>
                                <tr>
                                    <td>Adrienne Winters</td>
                                    <td>4425</td>
                                    <td>Laguna Blanca</td>
                                    <td>2014/15/09</td>
                                    <td>24%</td>
                                </tr>
                                <tr>
                                    <td>Francesca Brock</td>
                                    <td>1337</td>
                                    <td>Oban</td>
                                    <td>2000/12/06</td>
                                    <td>90%</td>
                                </tr>
                                <tr>
                                    <td>Ursa Davenport</td>
                                    <td>7629</td>
                                    <td>New Plymouth</td>
                                    <td>2013/27/06</td>
                                    <td>37%</td>
                                </tr>
                                <tr>
                                    <td>Mark Brock</td>
                                    <td>3310</td>
                                    <td>Veenendaal</td>
                                    <td>2006/08/09</td>
                                    <td>41%</td>
                                </tr>
                                <tr>
                                    <td>Dale Rush</td>
                                    <td>5050</td>
                                    <td>Chicoutimi</td>
                                    <td>2000/27/03</td>
                                    <td>2%</td>
                                </tr>
                                <tr>
                                    <td>Shellie Murphy</td>
                                    <td>3845</td>
                                    <td>Marlborough</td>
                                    <td>2013/13/11</td>
                                    <td>72%</td>
                                </tr>
                                <tr>
                                    <td>Porter Nicholson</td>
                                    <td>4539</td>
                                    <td>Bismil</td>
                                    <td>2012/22/10</td>
                                    <td>23%</td>
                                </tr>
                                <tr>
                                    <td>Oliver Huber</td>
                                    <td>1265</td>
                                    <td>Hannche</td>
                                    <td>2002/11/01</td>
                                    <td>94%</td>
                                </tr>
                                <tr>
                                    <td>Calista Maynard</td>
                                    <td>3315</td>
                                    <td>Pozzuolo del Friuli</td>
                                    <td>2006/23/03</td>
                                    <td>5%</td>
                                </tr>
                                <tr>
                                    <td>Lois Vargas</td>
                                    <td>6825</td>
                                    <td>Cumberland</td>
                                    <td>1999/25/04</td>
                                    <td>50%</td>
                                </tr>
                                <tr>
                                    <td>Hermione Dickson</td>
                                    <td>2785</td>
                                    <td>Woodstock</td>
                                    <td>2001/22/03</td>
                                    <td>2%</td>
                                </tr>
                                <tr>
                                    <td>Dalton Jennings</td>
                                    <td>5416</td>
                                    <td>Dudzele</td>
                                    <td>2015/09/02</td>
                                    <td>74%</td>
                                </tr>
                                <tr>
                                    <td>Cathleen Kramer</td>
                                    <td>3380</td>
                                    <td>Crowsnest Pass</td>
                                    <td>2012/27/07</td>
                                    <td>53%</td>
                                </tr>
                                <tr>
                                    <td>Zachery Morgan</td>
                                    <td>6730</td>
                                    <td>Collines-de-l'Outaouais</td>
                                    <td>2006/04/09</td>
                                    <td>51%</td>
                                </tr>
                                <tr>
                                    <td>Yoko Freeman</td>
                                    <td>4077</td>
                                    <td>Lidköping</td>
                                    <td>2002/27/12</td>
                                    <td>48%</td>
                                </tr>
                                <tr>
                                    <td>Chaim Waller</td>
                                    <td>4240</td>
                                    <td>North Shore</td>
                                    <td>2010/25/07</td>
                                    <td>25%</td>
                                </tr>
                                <tr>
                                    <td>Berk Johnston</td>
                                    <td>4532</td>
                                    <td>Vergnies</td>
                                    <td>2016/23/02</td>
                                    <td>93%</td>
                                </tr>
                                <tr>
                                    <td>Tad Munoz</td>
                                    <td>2902</td>
                                    <td>Saint-Nazaire</td>
                                    <td>2010/09/05</td>
                                    <td>65%</td>
                                </tr>
                                <tr>
                                    <td>Vivien Dominguez</td>
                                    <td>5653</td>
                                    <td>Bargagli</td>
                                    <td>2001/09/01</td>
                                    <td>86%</td>
                                </tr>
                                <tr>
                                    <td>Carissa Lara</td>
                                    <td>3241</td>
                                    <td>Sherborne</td>
                                    <td>2015/07/12</td>
                                    <td>72%</td>
                                </tr>
                                <tr>
                                    <td>Hammett Gordon</td>
                                    <td>8101</td>
                                    <td>Wah</td>
                                    <td>1998/06/09</td>
                                    <td>20%</td>
                                </tr>
                                <tr>
                                    <td>Walker Nixon</td>
                                    <td>6901</td>
                                    <td>Metz</td>
                                    <td>2011/12/11</td>
                                    <td>41%</td>
                                </tr>
                                <tr>
                                    <td>Nathan Espinoza</td>
                                    <td>5956</td>
                                    <td>Strathcona County</td>
                                    <td>2002/25/01</td>
                                    <td>47%</td>
                                </tr>
                                <tr>
                                    <td>Kelly Cameron</td>
                                    <td>4836</td>
                                    <td>Fontaine-Valmont</td>
                                    <td>1999/02/07</td>
                                    <td>24%</td>
                                </tr>
                                <tr>
                                    <td>Kyra Moses</td>
                                    <td>3796</td>
                                    <td>Quenast</td>
                                    <td>1998/07/07</td>
                                    <td>68%</td>
                                </tr>
                                <tr>
                                    <td>Grace Bishop</td>
                                    <td>8340</td>
                                    <td>Rodez</td>
                                    <td>2012/02/10</td>
                                    <td>4%</td>
                                </tr>
                                <tr>
                                    <td>Haviva Hernandez</td>
                                    <td>8136</td>
                                    <td>Suwałki</td>
                                    <td>2000/30/01</td>
                                    <td>16%</td>
                                </tr>
                                <tr>
                                    <td>Alisa Horn</td>
                                    <td>9853</td>
                                    <td>Ucluelet</td>
                                    <td>2007/01/11</td>
                                    <td>39%</td>
                                </tr>
                                <tr>
                                    <td>Zelenia Roman</td>
                                    <td>7516</td>
                                    <td>Redwater</td>
                                    <td>2012/03/03</td>
                                    <td>31%</td>
                                </tr>
                            </tbody>
                        </table>

                        <button id="export-csv" class="btn btn-secondary">Export CSV</button>
                        <button id="export-sql" class="btn btn-secondary">Export SQL</button>
                        <button id="export-txt" class="btn btn-secondary">Export TXT</button>
                        <button id="export-json" class="btn btn-secondary">Export JSON</button>
                        <button id="export-custom" class="btn btn-secondary">Export Custom</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header border border-primary text-primary border-top-0 border-start-0 border-end-0">
                        <h3 class="card-title text-primary d-inline">
                            Updating
                        </h3>
                        <span class="float-end">
                            <i class="fa fa-chevron-up clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <p>
                            Replace <i>first</i> match in a specified column.
                        </p>
                        <div id="update-div">
                            <label for="column">Column</label>
                            <select id="column"></select>
                            <label for="find">Find</label>
                            <input id="find">
                            <label for="replace">Replace</label>
                            <input id="replace">
                            <button id="update">Update</button>
                        </div>
                        <div id="table10"></div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header border border-primary text-primary border-top-0 border-start-0 border-end-0">
                        <h3 class="card-title text-primary d-inline">
                            Hide Column
                        </h3>
                        <span class="float-end">
                            <i class="fa fa-chevron-up clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <p>The column "Name" has been hidden programmatically.</p>
                        <div>
                            <table id="table11">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Ext.</th>
                                        <th>City</th>
                                        <th data-type="date" data-format="YYYY/DD/MM">Start Date</th>
                                        <th>Completion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Unity Pugh</td>
                                        <td>9958</td>
                                        <td>Curicó</td>
                                        <td>2005/02/11</td>
                                        <td>37%</td>
                                    </tr>
                                    <tr>
                                        <td>Theodore Duran</td>
                                        <td>8971</td>
                                        <td>Dhanbad</td>
                                        <td>1999/04/07</td>
                                        <td>97%</td>
                                    </tr>
                                    <tr>
                                        <td>Kylie Bishop</td>
                                        <td>3147</td>
                                        <td>Norman</td>
                                        <td>2005/09/08</td>
                                        <td>63%</td>
                                    </tr>
                                    <tr>
                                        <td>Willow Gilliam</td>
                                        <td>3497</td>
                                        <td>Amqui</td>
                                        <td>2009/29/11</td>
                                        <td>30%</td>
                                    </tr>
                                    <tr>
                                        <td>Blossom Dickerson</td>
                                        <td>5018</td>
                                        <td>Kempten</td>
                                        <td>2006/11/09</td>
                                        <td>17%</td>
                                    </tr>
                                    <tr>
                                        <td>Elliott Snyder</td>
                                        <td>3925</td>
                                        <td>Enines</td>
                                        <td>2006/03/08</td>
                                        <td>57%</td>
                                    </tr>
                                    <tr>
                                        <td>Castor Pugh</td>
                                        <td>9488</td>
                                        <td>Neath</td>
                                        <td>2014/23/12</td>
                                        <td>93%</td>
                                    </tr>
                                    <tr>
                                        <td>Pearl Carlson</td>
                                        <td>6231</td>
                                        <td>Cobourg</td>
                                        <td>2014/31/08</td>
                                        <td>100%</td>
                                    </tr>
                                    <tr>
                                        <td>Deirdre Bridges</td>
                                        <td>1579</td>
                                        <td>Eberswalde-Finow</td>
                                        <td>2014/26/08</td>
                                        <td>44%</td>
                                    </tr>
                                    <tr>
                                        <td>Daniel Baldwin</td>
                                        <td>6095</td>
                                        <td>Moircy</td>
                                        <td>2000/11/01</td>
                                        <td>33%</td>
                                    </tr>
                                    <tr>
                                        <td>Phelan Kane</td>
                                        <td>9519</td>
                                        <td>Germersheim</td>
                                        <td>1999/16/04</td>
                                        <td>77%</td>
                                    </tr>
                                    <tr>
                                        <td>Quentin Salas</td>
                                        <td>1339</td>
                                        <td>Los Andes</td>
                                        <td>2011/26/01</td>
                                        <td>49%</td>
                                    </tr>
                                    <tr>
                                        <td>Armand Suarez</td>
                                        <td>6583</td>
                                        <td>Funtua</td>
                                        <td>1999/06/11</td>
                                        <td>9%</td>
                                    </tr>
                                    <tr>
                                        <td>Gretchen Rogers</td>
                                        <td>5393</td>
                                        <td>Moxhe</td>
                                        <td>1998/26/10</td>
                                        <td>24%</td>
                                    </tr>
                                    <tr>
                                        <td>Harding Thompson</td>
                                        <td>2824</td>
                                        <td>Abeokuta</td>
                                        <td>2008/06/08</td>
                                        <td>10%</td>
                                    </tr>
                                    <tr>
                                        <td>Mira Rocha</td>
                                        <td>4393</td>
                                        <td>Port Harcourt</td>
                                        <td>2002/04/10</td>
                                        <td>14%</td>
                                    </tr>
                                    <tr>
                                        <td>Drew Phillips</td>
                                        <td>2931</td>
                                        <td>Goes</td>
                                        <td>2011/18/10</td>
                                        <td>58%</td>
                                    </tr>
                                    <tr>
                                        <td>Emerald Warner</td>
                                        <td>6205</td>
                                        <td>Chiavari</td>
                                        <td>2002/08/04</td>
                                        <td>58%</td>
                                    </tr>
                                    <tr>
                                        <td>Colin Burch</td>
                                        <td>7457</td>
                                        <td>Anamur</td>
                                        <td>2004/02/01</td>
                                        <td>34%</td>
                                    </tr>
                                    <tr>
                                        <td>Russell Haynes</td>
                                        <td>8916</td>
                                        <td>Frascati</td>
                                        <td>2015/28/04</td>
                                        <td>18%</td>
                                    </tr>
                                    <tr>
                                        <td>Brennan Brooks</td>
                                        <td>9011</td>
                                        <td>Olmué</td>
                                        <td>2000/18/04</td>
                                        <td>2%</td>
                                    </tr>
                                    <tr>
                                        <td>Kane Anthony</td>
                                        <td>8075</td>
                                        <td>LaSalle</td>
                                        <td>2006/21/05</td>
                                        <td>93%</td>
                                    </tr>
                                    <tr>
                                        <td>Scarlett Hurst</td>
                                        <td>1019</td>
                                        <td>Brampton</td>
                                        <td>2015/07/01</td>
                                        <td>94%</td>
                                    </tr>
                                    <tr>
                                        <td>James Scott</td>
                                        <td>3008</td>
                                        <td>Meux</td>
                                        <td>2007/30/05</td>
                                        <td>55%</td>
                                    </tr>
                                    <tr>
                                        <td>Desiree Ferguson</td>
                                        <td>9054</td>
                                        <td>Gojra</td>
                                        <td>2009/15/02</td>
                                        <td>81%</td>
                                    </tr>
                                    <tr>
                                        <td>Elaine Bishop</td>
                                        <td>9160</td>
                                        <td>Petrópolis</td>
                                        <td>2008/23/12</td>
                                        <td>48%</td>
                                    </tr>
                                    <tr>
                                        <td>Hilda Nelson</td>
                                        <td>6307</td>
                                        <td>Posina</td>
                                        <td>2004/23/05</td>
                                        <td>76%</td>
                                    </tr>
                                    <tr>
                                        <td>Evangeline Beasley</td>
                                        <td>3820</td>
                                        <td>Caplan</td>
                                        <td>2009/12/03</td>
                                        <td>62%</td>
                                    </tr>
                                    <tr>
                                        <td>Wyatt Riley</td>
                                        <td>5694</td>
                                        <td>Cavaion Veronese</td>
                                        <td>2012/19/02</td>
                                        <td>67%</td>
                                    </tr>
                                    <tr>
                                        <td>Wyatt Mccarthy</td>
                                        <td>3547</td>
                                        <td>Patan</td>
                                        <td>2014/23/06</td>
                                        <td>9%</td>
                                    </tr>
                                    <tr>
                                        <td>Cairo Rice</td>
                                        <td>6273</td>
                                        <td>Ostra Vetere</td>
                                        <td>2016/27/02</td>
                                        <td>13%</td>
                                    </tr>
                                    <tr>
                                        <td>Sylvia Peters</td>
                                        <td>6829</td>
                                        <td>Arrah</td>
                                        <td>2015/03/02</td>
                                        <td>13%</td>
                                    </tr>
                                    <tr>
                                        <td>Kasper Craig</td>
                                        <td>5515</td>
                                        <td>Firenze</td>
                                        <td>2015/26/04</td>
                                        <td>56%</td>
                                    </tr>
                                    <tr>
                                        <td>Leigh Ruiz</td>
                                        <td>5112</td>
                                        <td>Lac Ste. Anne</td>
                                        <td>2001/09/02</td>
                                        <td>28%</td>
                                    </tr>
                                    <tr>
                                        <td>Athena Aguirre</td>
                                        <td>5741</td>
                                        <td>Romeral</td>
                                        <td>2010/24/03</td>
                                        <td>15%</td>
                                    </tr>
                                    <tr>
                                        <td>Riley Nunez</td>
                                        <td>5533</td>
                                        <td>Sart-Eustache</td>
                                        <td>2003/26/02</td>
                                        <td>30%</td>
                                    </tr>
                                    <tr>
                                        <td>Lois Talley</td>
                                        <td>9393</td>
                                        <td>Dorchester</td>
                                        <td>2014/05/01</td>
                                        <td>51%</td>
                                    </tr>
                                    <tr>
                                        <td>Hop Bass</td>
                                        <td>1024</td>
                                        <td>Westerlo</td>
                                        <td>2012/25/09</td>
                                        <td>85%</td>
                                    </tr>
                                    <tr>
                                        <td>Kalia Diaz</td>
                                        <td>9184</td>
                                        <td>Ichalkaranji</td>
                                        <td>2013/26/06</td>
                                        <td>92%</td>
                                    </tr>
                                    <tr>
                                        <td>Maia Pate</td>
                                        <td>6682</td>
                                        <td>Louvain-la-Neuve</td>
                                        <td>2011/23/04</td>
                                        <td>50%</td>
                                    </tr>
                                    <tr>
                                        <td>Macaulay Pruitt</td>
                                        <td>4457</td>
                                        <td>Fraser-Fort George</td>
                                        <td>2015/03/08</td>
                                        <td>92%</td>
                                    </tr>
                                    <tr>
                                        <td>Danielle Oconnor</td>
                                        <td>9464</td>
                                        <td>Neuwied</td>
                                        <td>2001/05/10</td>
                                        <td>17%</td>
                                    </tr>
                                    <tr>
                                        <td>Kato Carr</td>
                                        <td>4842</td>
                                        <td>Faridabad</td>
                                        <td>2012/11/05</td>
                                        <td>96%</td>
                                    </tr>
                                    <tr>
                                        <td>Malachi Mejia</td>
                                        <td>7133</td>
                                        <td>Vorst</td>
                                        <td>2007/25/04</td>
                                        <td>26%</td>
                                    </tr>
                                    <tr>
                                        <td>Dominic Carver</td>
                                        <td>3476</td>
                                        <td>Pointe-aux-Trembles</td>
                                        <td>2014/14/03</td>
                                        <td>71%</td>
                                    </tr>
                                    <tr>
                                        <td>Paki Santos</td>
                                        <td>4424</td>
                                        <td>Cache Creek</td>
                                        <td>2001/18/11</td>
                                        <td>82%</td>
                                    </tr>
                                    <tr>
                                        <td>Ross Hodges</td>
                                        <td>1862</td>
                                        <td>Trazegnies</td>
                                        <td>2010/19/09</td>
                                        <td>87%</td>
                                    </tr>
                                    <tr>
                                        <td>Hilda Whitley</td>
                                        <td>3514</td>
                                        <td>New Sarepta</td>
                                        <td>2011/05/07</td>
                                        <td>94%</td>
                                    </tr>
                                    <tr>
                                        <td>Roth Cherry</td>
                                        <td>4006</td>
                                        <td>Flin Flon</td>
                                        <td>2008/02/09</td>
                                        <td>8%</td>
                                    </tr>
                                    <tr>
                                        <td>Lareina Jones</td>
                                        <td>8642</td>
                                        <td>East Linton</td>
                                        <td>2009/07/08</td>
                                        <td>21%</td>
                                    </tr>
                                    <tr>
                                        <td>Joshua Weiss</td>
                                        <td>2289</td>
                                        <td>Saint-Léonard</td>
                                        <td>2010/15/01</td>
                                        <td>52%</td>
                                    </tr>
                                    <tr>
                                        <td>Kiona Lowery</td>
                                        <td>5952</td>
                                        <td>Inuvik</td>
                                        <td>2002/17/12</td>
                                        <td>72%</td>
                                    </tr>
                                    <tr>
                                        <td>Nina Rush</td>
                                        <td>7567</td>
                                        <td>Bo‘lhe</td>
                                        <td>2008/27/01</td>
                                        <td>6%</td>
                                    </tr>
                                    <tr>
                                        <td>Palmer Parker</td>
                                        <td>2000</td>
                                        <td>Stade</td>
                                        <td>2012/24/07</td>
                                        <td>58%</td>
                                    </tr>
                                    <tr>
                                        <td>Vielka Olsen</td>
                                        <td>3745</td>
                                        <td>Vrasene</td>
                                        <td>2016/08/01</td>
                                        <td>70%</td>
                                    </tr>
                                    <tr>
                                        <td>Meghan Cunningham</td>
                                        <td>8604</td>
                                        <td>Söke</td>
                                        <td>2007/16/02</td>
                                        <td>59%</td>
                                    </tr>
                                    <tr>
                                        <td>Iola Shaw</td>
                                        <td>6447</td>
                                        <td>Albany</td>
                                        <td>2014/05/03</td>
                                        <td>88%</td>
                                    </tr>
                                    <tr>
                                        <td>Imelda Cole</td>
                                        <td>4564</td>
                                        <td>Haasdonk</td>
                                        <td>2007/16/11</td>
                                        <td>79%</td>
                                    </tr>
                                    <tr>
                                        <td>Jerry Beach</td>
                                        <td>6801</td>
                                        <td>Gattatico</td>
                                        <td>1999/07/07</td>
                                        <td>36%</td>
                                    </tr>
                                    <tr>
                                        <td>Garrett Rocha</td>
                                        <td>3938</td>
                                        <td>Gavorrano</td>
                                        <td>2000/06/08</td>
                                        <td>71%</td>
                                    </tr>
                                    <tr>
                                        <td>Derek Kerr</td>
                                        <td>1724</td>
                                        <td>Gualdo Cattaneo</td>
                                        <td>2014/21/01</td>
                                        <td>89%</td>
                                    </tr>
                                    <tr>
                                        <td>Shad Hudson</td>
                                        <td>5944</td>
                                        <td>Salamanca</td>
                                        <td>2014/10/12</td>
                                        <td>98%</td>
                                    </tr>
                                    <tr>
                                        <td>Daryl Ayers</td>
                                        <td>8276</td>
                                        <td>Barchi</td>
                                        <td>2012/12/11</td>
                                        <td>88%</td>
                                    </tr>
                                    <tr>
                                        <td>Caleb Livingston</td>
                                        <td>3094</td>
                                        <td>Fatehpur</td>
                                        <td>2014/13/02</td>
                                        <td>8%</td>
                                    </tr>
                                    <tr>
                                        <td>Sydney Meyer</td>
                                        <td>4576</td>
                                        <td>Neubrandenburg</td>
                                        <td>2015/06/02</td>
                                        <td>22%</td>
                                    </tr>
                                    <tr>
                                        <td>Lani Lawrence</td>
                                        <td>8501</td>
                                        <td>Turnhout</td>
                                        <td>2008/07/05</td>
                                        <td>16%</td>
                                    </tr>
                                    <tr>
                                        <td>Allegra Shepherd</td>
                                        <td>2576</td>
                                        <td>Meeuwen-Gruitrode</td>
                                        <td>2004/19/04</td>
                                        <td>41%</td>
                                    </tr>
                                    <tr>
                                        <td>Fallon Reyes</td>
                                        <td>3178</td>
                                        <td>Monceau-sur-Sambre</td>
                                        <td>2005/15/02</td>
                                        <td>16%</td>
                                    </tr>
                                    <tr>
                                        <td>Karen Whitley</td>
                                        <td>4357</td>
                                        <td>Sluis</td>
                                        <td>2003/02/05</td>
                                        <td>23%</td>
                                    </tr>
                                    <tr>
                                        <td>Stewart Stephenson</td>
                                        <td>5350</td>
                                        <td>Villa Faraldi</td>
                                        <td>2003/05/07</td>
                                        <td>65%</td>
                                    </tr>
                                    <tr>
                                        <td>Ursula Reynolds</td>
                                        <td>7544</td>
                                        <td>Southampton</td>
                                        <td>1999/16/12</td>
                                        <td>61%</td>
                                    </tr>
                                    <tr>
                                        <td>Adrienne Winters</td>
                                        <td>4425</td>
                                        <td>Laguna Blanca</td>
                                        <td>2014/15/09</td>
                                        <td>24%</td>
                                    </tr>
                                    <tr>
                                        <td>Francesca Brock</td>
                                        <td>1337</td>
                                        <td>Oban</td>
                                        <td>2000/12/06</td>
                                        <td>90%</td>
                                    </tr>
                                    <tr>
                                        <td>Ursa Davenport</td>
                                        <td>7629</td>
                                        <td>New Plymouth</td>
                                        <td>2013/27/06</td>
                                        <td>37%</td>
                                    </tr>
                                    <tr>
                                        <td>Mark Brock</td>
                                        <td>3310</td>
                                        <td>Veenendaal</td>
                                        <td>2006/08/09</td>
                                        <td>41%</td>
                                    </tr>
                                    <tr>
                                        <td>Dale Rush</td>
                                        <td>5050</td>
                                        <td>Chicoutimi</td>
                                        <td>2000/27/03</td>
                                        <td>2%</td>
                                    </tr>
                                    <tr>
                                        <td>Shellie Murphy</td>
                                        <td>3845</td>
                                        <td>Marlborough</td>
                                        <td>2013/13/11</td>
                                        <td>72%</td>
                                    </tr>
                                    <tr>
                                        <td>Porter Nicholson</td>
                                        <td>4539</td>
                                        <td>Bismil</td>
                                        <td>2012/22/10</td>
                                        <td>23%</td>
                                    </tr>
                                    <tr>
                                        <td>Oliver Huber</td>
                                        <td>1265</td>
                                        <td>Hannche</td>
                                        <td>2002/11/01</td>
                                        <td>94%</td>
                                    </tr>
                                    <tr>
                                        <td>Calista Maynard</td>
                                        <td>3315</td>
                                        <td>Pozzuolo del Friuli</td>
                                        <td>2006/23/03</td>
                                        <td>5%</td>
                                    </tr>
                                    <tr>
                                        <td>Lois Vargas</td>
                                        <td>6825</td>
                                        <td>Cumberland</td>
                                        <td>1999/25/04</td>
                                        <td>50%</td>
                                    </tr>
                                    <tr>
                                        <td>Hermione Dickson</td>
                                        <td>2785</td>
                                        <td>Woodstock</td>
                                        <td>2001/22/03</td>
                                        <td>2%</td>
                                    </tr>
                                    <tr>
                                        <td>Dalton Jennings</td>
                                        <td>5416</td>
                                        <td>Dudzele</td>
                                        <td>2015/09/02</td>
                                        <td>74%</td>
                                    </tr>
                                    <tr>
                                        <td>Cathleen Kramer</td>
                                        <td>3380</td>
                                        <td>Crowsnest Pass</td>
                                        <td>2012/27/07</td>
                                        <td>53%</td>
                                    </tr>
                                    <tr>
                                        <td>Zachery Morgan</td>
                                        <td>6730</td>
                                        <td>Collines-de-l'Outaouais</td>
                                        <td>2006/04/09</td>
                                        <td>51%</td>
                                    </tr>
                                    <tr>
                                        <td>Yoko Freeman</td>
                                        <td>4077</td>
                                        <td>Lidköping</td>
                                        <td>2002/27/12</td>
                                        <td>48%</td>
                                    </tr>
                                    <tr>
                                        <td>Chaim Waller</td>
                                        <td>4240</td>
                                        <td>North Shore</td>
                                        <td>2010/25/07</td>
                                        <td>25%</td>
                                    </tr>
                                    <tr>
                                        <td>Berk Johnston</td>
                                        <td>4532</td>
                                        <td>Vergnies</td>
                                        <td>2016/23/02</td>
                                        <td>93%</td>
                                    </tr>
                                    <tr>
                                        <td>Tad Munoz</td>
                                        <td>2902</td>
                                        <td>Saint-Nazaire</td>
                                        <td>2010/09/05</td>
                                        <td>65%</td>
                                    </tr>
                                    <tr>
                                        <td>Vivien Dominguez</td>
                                        <td>5653</td>
                                        <td>Bargagli</td>
                                        <td>2001/09/01</td>
                                        <td>86%</td>
                                    </tr>
                                    <tr>
                                        <td>Carissa Lara</td>
                                        <td>3241</td>
                                        <td>Sherborne</td>
                                        <td>2015/07/12</td>
                                        <td>72%</td>
                                    </tr>
                                    <tr>
                                        <td>Hammett Gordon</td>
                                        <td>8101</td>
                                        <td>Wah</td>
                                        <td>1998/06/09</td>
                                        <td>20%</td>
                                    </tr>
                                    <tr>
                                        <td>Walker Nixon</td>
                                        <td>6901</td>
                                        <td>Metz</td>
                                        <td>2011/12/11</td>
                                        <td>41%</td>
                                    </tr>
                                    <tr>
                                        <td>Nathan Espinoza</td>
                                        <td>5956</td>
                                        <td>Strathcona County</td>
                                        <td>2002/25/01</td>
                                        <td>47%</td>
                                    </tr>
                                    <tr>
                                        <td>Kelly Cameron</td>
                                        <td>4836</td>
                                        <td>Fontaine-Valmont</td>
                                        <td>1999/02/07</td>
                                        <td>24%</td>
                                    </tr>
                                    <tr>
                                        <td>Kyra Moses</td>
                                        <td>3796</td>
                                        <td>Quenast</td>
                                        <td>1998/07/07</td>
                                        <td>68%</td>
                                    </tr>
                                    <tr>
                                        <td>Grace Bishop</td>
                                        <td>8340</td>
                                        <td>Rodez</td>
                                        <td>2012/02/10</td>
                                        <td>4%</td>
                                    </tr>
                                    <tr>
                                        <td>Haviva Hernandez</td>
                                        <td>8136</td>
                                        <td>Suwałki</td>
                                        <td>2000/30/01</td>
                                        <td>16%</td>
                                    </tr>
                                    <tr>
                                        <td>Alisa Horn</td>
                                        <td>9853</td>
                                        <td>Ucluelet</td>
                                        <td>2007/01/11</td>
                                        <td>39%</td>
                                    </tr>
                                    <tr>
                                        <td>Zelenia Roman</td>
                                        <td>7516</td>
                                        <td>Redwater</td>
                                        <td>2012/03/03</td>
                                        <td>31%</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header border border-primary text-primary border-top-0 border-start-0 border-end-0">
                        <h3 class="card-title text-primary d-inline">
                            Row Navigation
                        </h3>
                        <span class="float-end">
                            <i class="fa fa-chevron-up clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <p>
                            Select the table below either by clicking on it or by using the TAB-key. Then use the up/down
                            arrow-keys to
                            navigate the table. Either click on a row or hit Enter/Space after navigating to select it.
                        </p>
                        <br>

                        <div>
                            <input type="checkbox" id="multi-select" checked>
                            <label for="multi-select">
                                <strong>Multi select:</strong> Whether to allow selection of more than one row.
                            </label>
                        </div>
                        <div>
                            <input type="checkbox" id="row-navigation" checked>
                            <label for="row-navigation">
                                <strong>Row navigation:</strong> Whether to allow keyboard row navigation.
                            </label>
                        </div>
                        <table id="table12">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Ext.</th>
                                    <th>City</th>
                                    <th data-type="date" data-format="YYYY/DD/MM">Start Date</th>
                                    <th>Completion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Unity Pugh</td>
                                    <td>9958</td>
                                    <td>Curicó</td>
                                    <td>2005/02/11</td>
                                    <td>37%</td>
                                </tr>
                                <tr>
                                    <td>Theodore Duran</td>
                                    <td>8971</td>
                                    <td>Dhanbad</td>
                                    <td>1999/04/07</td>
                                    <td>97%</td>
                                </tr>
                                <tr>
                                    <td>Kylie Bishop</td>
                                    <td>3147</td>
                                    <td>Norman</td>
                                    <td>2005/09/08</td>
                                    <td>63%</td>
                                </tr>
                                <tr>
                                    <td>Willow Gilliam</td>
                                    <td>3497</td>
                                    <td>Amqui</td>
                                    <td>2009/29/11</td>
                                    <td>30%</td>
                                </tr>
                                <tr>
                                    <td>Blossom Dickerson</td>
                                    <td>5018</td>
                                    <td>Kempten</td>
                                    <td>2006/11/09</td>
                                    <td>17%</td>
                                </tr>
                                <tr>
                                    <td>Elliott Snyder</td>
                                    <td>3925</td>
                                    <td>Enines</td>
                                    <td>2006/03/08</td>
                                    <td>57%</td>
                                </tr>
                                <tr>
                                    <td>Castor Pugh</td>
                                    <td>9488</td>
                                    <td>Neath</td>
                                    <td>2014/23/12</td>
                                    <td>93%</td>
                                </tr>
                                <tr>
                                    <td>Pearl Carlson</td>
                                    <td>6231</td>
                                    <td>Cobourg</td>
                                    <td>2014/31/08</td>
                                    <td>100%</td>
                                </tr>
                                <tr>
                                    <td>Deirdre Bridges</td>
                                    <td>1579</td>
                                    <td>Eberswalde-Finow</td>
                                    <td>2014/26/08</td>
                                    <td>44%</td>
                                </tr>
                                <tr>
                                    <td>Daniel Baldwin</td>
                                    <td>6095</td>
                                    <td>Moircy</td>
                                    <td>2000/11/01</td>
                                    <td>33%</td>
                                </tr>
                                <tr>
                                    <td>Phelan Kane</td>
                                    <td>9519</td>
                                    <td>Germersheim</td>
                                    <td>1999/16/04</td>
                                    <td>77%</td>
                                </tr>
                                <tr>
                                    <td>Quentin Salas</td>
                                    <td>1339</td>
                                    <td>Los Andes</td>
                                    <td>2011/26/01</td>
                                    <td>49%</td>
                                </tr>
                                <tr>
                                    <td>Armand Suarez</td>
                                    <td>6583</td>
                                    <td>Funtua</td>
                                    <td>1999/06/11</td>
                                    <td>9%</td>
                                </tr>
                                <tr>
                                    <td>Gretchen Rogers</td>
                                    <td>5393</td>
                                    <td>Moxhe</td>
                                    <td>1998/26/10</td>
                                    <td>24%</td>
                                </tr>
                                <tr>
                                    <td>Harding Thompson</td>
                                    <td>2824</td>
                                    <td>Abeokuta</td>
                                    <td>2008/06/08</td>
                                    <td>10%</td>
                                </tr>
                                <tr>
                                    <td>Mira Rocha</td>
                                    <td>4393</td>
                                    <td>Port Harcourt</td>
                                    <td>2002/04/10</td>
                                    <td>14%</td>
                                </tr>
                                <tr>
                                    <td>Drew Phillips</td>
                                    <td>2931</td>
                                    <td>Goes</td>
                                    <td>2011/18/10</td>
                                    <td>58%</td>
                                </tr>
                                <tr>
                                    <td>Emerald Warner</td>
                                    <td>6205</td>
                                    <td>Chiavari</td>
                                    <td>2002/08/04</td>
                                    <td>58%</td>
                                </tr>
                                <tr>
                                    <td>Colin Burch</td>
                                    <td>7457</td>
                                    <td>Anamur</td>
                                    <td>2004/02/01</td>
                                    <td>34%</td>
                                </tr>
                                <tr>
                                    <td>Russell Haynes</td>
                                    <td>8916</td>
                                    <td>Frascati</td>
                                    <td>2015/28/04</td>
                                    <td>18%</td>
                                </tr>
                                <tr>
                                    <td>Brennan Brooks</td>
                                    <td>9011</td>
                                    <td>Olmué</td>
                                    <td>2000/18/04</td>
                                    <td>2%</td>
                                </tr>
                                <tr>
                                    <td>Kane Anthony</td>
                                    <td>8075</td>
                                    <td>LaSalle</td>
                                    <td>2006/21/05</td>
                                    <td>93%</td>
                                </tr>
                                <tr>
                                    <td>Scarlett Hurst</td>
                                    <td>1019</td>
                                    <td>Brampton</td>
                                    <td>2015/07/01</td>
                                    <td>94%</td>
                                </tr>
                                <tr>
                                    <td>James Scott</td>
                                    <td>3008</td>
                                    <td>Meux</td>
                                    <td>2007/30/05</td>
                                    <td>55%</td>
                                </tr>
                                <tr>
                                    <td>Desiree Ferguson</td>
                                    <td>9054</td>
                                    <td>Gojra</td>
                                    <td>2009/15/02</td>
                                    <td>81%</td>
                                </tr>
                                <tr>
                                    <td>Elaine Bishop</td>
                                    <td>9160</td>
                                    <td>Petrópolis</td>
                                    <td>2008/23/12</td>
                                    <td>48%</td>
                                </tr>
                                <tr>
                                    <td>Hilda Nelson</td>
                                    <td>6307</td>
                                    <td>Posina</td>
                                    <td>2004/23/05</td>
                                    <td>76%</td>
                                </tr>
                                <tr>
                                    <td>Evangeline Beasley</td>
                                    <td>3820</td>
                                    <td>Caplan</td>
                                    <td>2009/12/03</td>
                                    <td>62%</td>
                                </tr>
                                <tr>
                                    <td>Wyatt Riley</td>
                                    <td>5694</td>
                                    <td>Cavaion Veronese</td>
                                    <td>2012/19/02</td>
                                    <td>67%</td>
                                </tr>
                                <tr>
                                    <td>Wyatt Mccarthy</td>
                                    <td>3547</td>
                                    <td>Patan</td>
                                    <td>2014/23/06</td>
                                    <td>9%</td>
                                </tr>
                                <tr>
                                    <td>Cairo Rice</td>
                                    <td>6273</td>
                                    <td>Ostra Vetere</td>
                                    <td>2016/27/02</td>
                                    <td>13%</td>
                                </tr>
                                <tr>
                                    <td>Sylvia Peters</td>
                                    <td>6829</td>
                                    <td>Arrah</td>
                                    <td>2015/03/02</td>
                                    <td>13%</td>
                                </tr>
                                <tr>
                                    <td>Kasper Craig</td>
                                    <td>5515</td>
                                    <td>Firenze</td>
                                    <td>2015/26/04</td>
                                    <td>56%</td>
                                </tr>
                                <tr>
                                    <td>Leigh Ruiz</td>
                                    <td>5112</td>
                                    <td>Lac Ste. Anne</td>
                                    <td>2001/09/02</td>
                                    <td>28%</td>
                                </tr>
                                <tr>
                                    <td>Athena Aguirre</td>
                                    <td>5741</td>
                                    <td>Romeral</td>
                                    <td>2010/24/03</td>
                                    <td>15%</td>
                                </tr>
                                <tr>
                                    <td>Riley Nunez</td>
                                    <td>5533</td>
                                    <td>Sart-Eustache</td>
                                    <td>2003/26/02</td>
                                    <td>30%</td>
                                </tr>
                                <tr>
                                    <td>Lois Talley</td>
                                    <td>9393</td>
                                    <td>Dorchester</td>
                                    <td>2014/05/01</td>
                                    <td>51%</td>
                                </tr>
                                <tr>
                                    <td>Hop Bass</td>
                                    <td>1024</td>
                                    <td>Westerlo</td>
                                    <td>2012/25/09</td>
                                    <td>85%</td>
                                </tr>
                                <tr>
                                    <td>Kalia Diaz</td>
                                    <td>9184</td>
                                    <td>Ichalkaranji</td>
                                    <td>2013/26/06</td>
                                    <td>92%</td>
                                </tr>
                                <tr>
                                    <td>Maia Pate</td>
                                    <td>6682</td>
                                    <td>Louvain-la-Neuve</td>
                                    <td>2011/23/04</td>
                                    <td>50%</td>
                                </tr>
                                <tr>
                                    <td>Macaulay Pruitt</td>
                                    <td>4457</td>
                                    <td>Fraser-Fort George</td>
                                    <td>2015/03/08</td>
                                    <td>92%</td>
                                </tr>
                                <tr>
                                    <td>Danielle Oconnor</td>
                                    <td>9464</td>
                                    <td>Neuwied</td>
                                    <td>2001/05/10</td>
                                    <td>17%</td>
                                </tr>
                                <tr>
                                    <td>Kato Carr</td>
                                    <td>4842</td>
                                    <td>Faridabad</td>
                                    <td>2012/11/05</td>
                                    <td>96%</td>
                                </tr>
                                <tr>
                                    <td>Malachi Mejia</td>
                                    <td>7133</td>
                                    <td>Vorst</td>
                                    <td>2007/25/04</td>
                                    <td>26%</td>
                                </tr>
                                <tr>
                                    <td>Dominic Carver</td>
                                    <td>3476</td>
                                    <td>Pointe-aux-Trembles</td>
                                    <td>2014/14/03</td>
                                    <td>71%</td>
                                </tr>
                                <tr>
                                    <td>Paki Santos</td>
                                    <td>4424</td>
                                    <td>Cache Creek</td>
                                    <td>2001/18/11</td>
                                    <td>82%</td>
                                </tr>
                                <tr>
                                    <td>Ross Hodges</td>
                                    <td>1862</td>
                                    <td>Trazegnies</td>
                                    <td>2010/19/09</td>
                                    <td>87%</td>
                                </tr>
                                <tr>
                                    <td>Hilda Whitley</td>
                                    <td>3514</td>
                                    <td>New Sarepta</td>
                                    <td>2011/05/07</td>
                                    <td>94%</td>
                                </tr>
                                <tr>
                                    <td>Roth Cherry</td>
                                    <td>4006</td>
                                    <td>Flin Flon</td>
                                    <td>2008/02/09</td>
                                    <td>8%</td>
                                </tr>
                                <tr>
                                    <td>Lareina Jones</td>
                                    <td>8642</td>
                                    <td>East Linton</td>
                                    <td>2009/07/08</td>
                                    <td>21%</td>
                                </tr>
                                <tr>
                                    <td>Joshua Weiss</td>
                                    <td>2289</td>
                                    <td>Saint-Léonard</td>
                                    <td>2010/15/01</td>
                                    <td>52%</td>
                                </tr>
                                <tr>
                                    <td>Kiona Lowery</td>
                                    <td>5952</td>
                                    <td>Inuvik</td>
                                    <td>2002/17/12</td>
                                    <td>72%</td>
                                </tr>
                                <tr>
                                    <td>Nina Rush</td>
                                    <td>7567</td>
                                    <td>Bo‘lhe</td>
                                    <td>2008/27/01</td>
                                    <td>6%</td>
                                </tr>
                                <tr>
                                    <td>Palmer Parker</td>
                                    <td>2000</td>
                                    <td>Stade</td>
                                    <td>2012/24/07</td>
                                    <td>58%</td>
                                </tr>
                                <tr>
                                    <td>Vielka Olsen</td>
                                    <td>3745</td>
                                    <td>Vrasene</td>
                                    <td>2016/08/01</td>
                                    <td>70%</td>
                                </tr>
                                <tr>
                                    <td>Meghan Cunningham</td>
                                    <td>8604</td>
                                    <td>Söke</td>
                                    <td>2007/16/02</td>
                                    <td>59%</td>
                                </tr>
                                <tr>
                                    <td>Iola Shaw</td>
                                    <td>6447</td>
                                    <td>Albany</td>
                                    <td>2014/05/03</td>
                                    <td>88%</td>
                                </tr>
                                <tr>
                                    <td>Imelda Cole</td>
                                    <td>4564</td>
                                    <td>Haasdonk</td>
                                    <td>2007/16/11</td>
                                    <td>79%</td>
                                </tr>
                                <tr>
                                    <td>Jerry Beach</td>
                                    <td>6801</td>
                                    <td>Gattatico</td>
                                    <td>1999/07/07</td>
                                    <td>36%</td>
                                </tr>
                                <tr>
                                    <td>Garrett Rocha</td>
                                    <td>3938</td>
                                    <td>Gavorrano</td>
                                    <td>2000/06/08</td>
                                    <td>71%</td>
                                </tr>
                                <tr>
                                    <td>Derek Kerr</td>
                                    <td>1724</td>
                                    <td>Gualdo Cattaneo</td>
                                    <td>2014/21/01</td>
                                    <td>89%</td>
                                </tr>
                                <tr>
                                    <td>Shad Hudson</td>
                                    <td>5944</td>
                                    <td>Salamanca</td>
                                    <td>2014/10/12</td>
                                    <td>98%</td>
                                </tr>
                                <tr>
                                    <td>Daryl Ayers</td>
                                    <td>8276</td>
                                    <td>Barchi</td>
                                    <td>2012/12/11</td>
                                    <td>88%</td>
                                </tr>
                                <tr>
                                    <td>Caleb Livingston</td>
                                    <td>3094</td>
                                    <td>Fatehpur</td>
                                    <td>2014/13/02</td>
                                    <td>8%</td>
                                </tr>
                                <tr>
                                    <td>Sydney Meyer</td>
                                    <td>4576</td>
                                    <td>Neubrandenburg</td>
                                    <td>2015/06/02</td>
                                    <td>22%</td>
                                </tr>
                                <tr>
                                    <td>Lani Lawrence</td>
                                    <td>8501</td>
                                    <td>Turnhout</td>
                                    <td>2008/07/05</td>
                                    <td>16%</td>
                                </tr>
                                <tr>
                                    <td>Allegra Shepherd</td>
                                    <td>2576</td>
                                    <td>Meeuwen-Gruitrode</td>
                                    <td>2004/19/04</td>
                                    <td>41%</td>
                                </tr>
                                <tr>
                                    <td>Fallon Reyes</td>
                                    <td>3178</td>
                                    <td>Monceau-sur-Sambre</td>
                                    <td>2005/15/02</td>
                                    <td>16%</td>
                                </tr>
                                <tr>
                                    <td>Karen Whitley</td>
                                    <td>4357</td>
                                    <td>Sluis</td>
                                    <td>2003/02/05</td>
                                    <td>23%</td>
                                </tr>
                                <tr>
                                    <td>Stewart Stephenson</td>
                                    <td>5350</td>
                                    <td>Villa Faraldi</td>
                                    <td>2003/05/07</td>
                                    <td>65%</td>
                                </tr>
                                <tr>
                                    <td>Ursula Reynolds</td>
                                    <td>7544</td>
                                    <td>Southampton</td>
                                    <td>1999/16/12</td>
                                    <td>61%</td>
                                </tr>
                                <tr>
                                    <td>Adrienne Winters</td>
                                    <td>4425</td>
                                    <td>Laguna Blanca</td>
                                    <td>2014/15/09</td>
                                    <td>24%</td>
                                </tr>
                                <tr>
                                    <td>Francesca Brock</td>
                                    <td>1337</td>
                                    <td>Oban</td>
                                    <td>2000/12/06</td>
                                    <td>90%</td>
                                </tr>
                                <tr>
                                    <td>Ursa Davenport</td>
                                    <td>7629</td>
                                    <td>New Plymouth</td>
                                    <td>2013/27/06</td>
                                    <td>37%</td>
                                </tr>
                                <tr>
                                    <td>Mark Brock</td>
                                    <td>3310</td>
                                    <td>Veenendaal</td>
                                    <td>2006/08/09</td>
                                    <td>41%</td>
                                </tr>
                                <tr>
                                    <td>Dale Rush</td>
                                    <td>5050</td>
                                    <td>Chicoutimi</td>
                                    <td>2000/27/03</td>
                                    <td>2%</td>
                                </tr>
                                <tr>
                                    <td>Shellie Murphy</td>
                                    <td>3845</td>
                                    <td>Marlborough</td>
                                    <td>2013/13/11</td>
                                    <td>72%</td>
                                </tr>
                                <tr>
                                    <td>Porter Nicholson</td>
                                    <td>4539</td>
                                    <td>Bismil</td>
                                    <td>2012/22/10</td>
                                    <td>23%</td>
                                </tr>
                                <tr>
                                    <td>Oliver Huber</td>
                                    <td>1265</td>
                                    <td>Hannche</td>
                                    <td>2002/11/01</td>
                                    <td>94%</td>
                                </tr>
                                <tr>
                                    <td>Calista Maynard</td>
                                    <td>3315</td>
                                    <td>Pozzuolo del Friuli</td>
                                    <td>2006/23/03</td>
                                    <td>5%</td>
                                </tr>
                                <tr>
                                    <td>Lois Vargas</td>
                                    <td>6825</td>
                                    <td>Cumberland</td>
                                    <td>1999/25/04</td>
                                    <td>50%</td>
                                </tr>
                                <tr>
                                    <td>Hermione Dickson</td>
                                    <td>2785</td>
                                    <td>Woodstock</td>
                                    <td>2001/22/03</td>
                                    <td>2%</td>
                                </tr>
                                <tr>
                                    <td>Dalton Jennings</td>
                                    <td>5416</td>
                                    <td>Dudzele</td>
                                    <td>2015/09/02</td>
                                    <td>74%</td>
                                </tr>
                                <tr>
                                    <td>Cathleen Kramer</td>
                                    <td>3380</td>
                                    <td>Crowsnest Pass</td>
                                    <td>2012/27/07</td>
                                    <td>53%</td>
                                </tr>
                                <tr>
                                    <td>Zachery Morgan</td>
                                    <td>6730</td>
                                    <td>Collines-de-l'Outaouais</td>
                                    <td>2006/04/09</td>
                                    <td>51%</td>
                                </tr>
                                <tr>
                                    <td>Yoko Freeman</td>
                                    <td>4077</td>
                                    <td>Lidköping</td>
                                    <td>2002/27/12</td>
                                    <td>48%</td>
                                </tr>
                                <tr>
                                    <td>Chaim Waller</td>
                                    <td>4240</td>
                                    <td>North Shore</td>
                                    <td>2010/25/07</td>
                                    <td>25%</td>
                                </tr>
                                <tr>
                                    <td>Berk Johnston</td>
                                    <td>4532</td>
                                    <td>Vergnies</td>
                                    <td>2016/23/02</td>
                                    <td>93%</td>
                                </tr>
                                <tr>
                                    <td>Tad Munoz</td>
                                    <td>2902</td>
                                    <td>Saint-Nazaire</td>
                                    <td>2010/09/05</td>
                                    <td>65%</td>
                                </tr>
                                <tr>
                                    <td>Vivien Dominguez</td>
                                    <td>5653</td>
                                    <td>Bargagli</td>
                                    <td>2001/09/01</td>
                                    <td>86%</td>
                                </tr>
                                <tr>
                                    <td>Carissa Lara</td>
                                    <td>3241</td>
                                    <td>Sherborne</td>
                                    <td>2015/07/12</td>
                                    <td>72%</td>
                                </tr>
                                <tr>
                                    <td>Hammett Gordon</td>
                                    <td>8101</td>
                                    <td>Wah</td>
                                    <td>1998/06/09</td>
                                    <td>20%</td>
                                </tr>
                                <tr>
                                    <td>Walker Nixon</td>
                                    <td>6901</td>
                                    <td>Metz</td>
                                    <td>2011/12/11</td>
                                    <td>41%</td>
                                </tr>
                                <tr>
                                    <td>Nathan Espinoza</td>
                                    <td>5956</td>
                                    <td>Strathcona County</td>
                                    <td>2002/25/01</td>
                                    <td>47%</td>
                                </tr>
                                <tr>
                                    <td>Kelly Cameron</td>
                                    <td>4836</td>
                                    <td>Fontaine-Valmont</td>
                                    <td>1999/02/07</td>
                                    <td>24%</td>
                                </tr>
                                <tr>
                                    <td>Kyra Moses</td>
                                    <td>3796</td>
                                    <td>Quenast</td>
                                    <td>1998/07/07</td>
                                    <td>68%</td>
                                </tr>
                                <tr>
                                    <td>Grace Bishop</td>
                                    <td>8340</td>
                                    <td>Rodez</td>
                                    <td>2012/02/10</td>
                                    <td>4%</td>
                                </tr>
                                <tr>
                                    <td>Haviva Hernandez</td>
                                    <td>8136</td>
                                    <td>Suwałki</td>
                                    <td>2000/30/01</td>
                                    <td>16%</td>
                                </tr>
                                <tr>
                                    <td>Alisa Horn</td>
                                    <td>9853</td>
                                    <td>Ucluelet</td>
                                    <td>2007/01/11</td>
                                    <td>39%</td>
                                </tr>
                                <tr>
                                    <td>Zelenia Roman</td>
                                    <td>7516</td>
                                    <td>Redwater</td>
                                    <td>2012/03/03</td>
                                    <td>31%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header border border-primary text-primary border-top-0 border-start-0 border-end-0">
                        <h3 class="card-title text-primary d-inline">
                            Editing
                        </h3>
                        <span class="float-end">
                            <i class="fa fa-chevron-up clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <p>Double-click a cell to edit it.</p>
                        <div>
                            <input type="checkbox" id="modal">
                            <label for="modal">
                                <strong>Modal:</strong> Show a modal instead of the inline editor
                            </label>
                        </div>
                        <table id="table13">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Ext.</th>
                                    <th>City</th>
                                    <th data-type="date" data-format="YYYY/DD/MM">Start Date</th>
                                    <th>Completion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Unity Pugh</td>
                                    <td>9958</td>
                                    <td>Curicó</td>
                                    <td>2005/02/11</td>
                                    <td>37%</td>
                                </tr>
                                <tr>
                                    <td>Theodore Duran</td>
                                    <td>8971</td>
                                    <td>Dhanbad</td>
                                    <td>1999/04/07</td>
                                    <td>97%</td>
                                </tr>
                                <tr>
                                    <td>Kylie Bishop</td>
                                    <td>3147</td>
                                    <td>Norman</td>
                                    <td>2005/09/08</td>
                                    <td>63%</td>
                                </tr>
                                <tr>
                                    <td>Willow Gilliam</td>
                                    <td>3497</td>
                                    <td>Amqui</td>
                                    <td>2009/29/11</td>
                                    <td>30%</td>
                                </tr>
                                <tr>
                                    <td>Blossom Dickerson</td>
                                    <td>5018</td>
                                    <td>Kempten</td>
                                    <td>2006/11/09</td>
                                    <td>17%</td>
                                </tr>
                                <tr>
                                    <td>Elliott Snyder</td>
                                    <td>3925</td>
                                    <td>Enines</td>
                                    <td>2006/03/08</td>
                                    <td>57%</td>
                                </tr>
                                <tr>
                                    <td>Castor Pugh</td>
                                    <td>9488</td>
                                    <td>Neath</td>
                                    <td>2014/23/12</td>
                                    <td>93%</td>
                                </tr>
                                <tr>
                                    <td>Pearl Carlson</td>
                                    <td>6231</td>
                                    <td>Cobourg</td>
                                    <td>2014/31/08</td>
                                    <td>100%</td>
                                </tr>
                                <tr>
                                    <td>Deirdre Bridges</td>
                                    <td>1579</td>
                                    <td>Eberswalde-Finow</td>
                                    <td>2014/26/08</td>
                                    <td>44%</td>
                                </tr>
                                <tr>
                                    <td>Daniel Baldwin</td>
                                    <td>6095</td>
                                    <td>Moircy</td>
                                    <td>2000/11/01</td>
                                    <td>33%</td>
                                </tr>
                                <tr>
                                    <td>Phelan Kane</td>
                                    <td>9519</td>
                                    <td>Germersheim</td>
                                    <td>1999/16/04</td>
                                    <td>77%</td>
                                </tr>
                                <tr>
                                    <td>Quentin Salas</td>
                                    <td>1339</td>
                                    <td>Los Andes</td>
                                    <td>2011/26/01</td>
                                    <td>49%</td>
                                </tr>
                                <tr>
                                    <td>Armand Suarez</td>
                                    <td>6583</td>
                                    <td>Funtua</td>
                                    <td>1999/06/11</td>
                                    <td>9%</td>
                                </tr>
                                <tr>
                                    <td>Gretchen Rogers</td>
                                    <td>5393</td>
                                    <td>Moxhe</td>
                                    <td>1998/26/10</td>
                                    <td>24%</td>
                                </tr>
                                <tr>
                                    <td>Harding Thompson</td>
                                    <td>2824</td>
                                    <td>Abeokuta</td>
                                    <td>2008/06/08</td>
                                    <td>10%</td>
                                </tr>
                                <tr>
                                    <td>Mira Rocha</td>
                                    <td>4393</td>
                                    <td>Port Harcourt</td>
                                    <td>2002/04/10</td>
                                    <td>14%</td>
                                </tr>
                                <tr>
                                    <td>Drew Phillips</td>
                                    <td>2931</td>
                                    <td>Goes</td>
                                    <td>2011/18/10</td>
                                    <td>58%</td>
                                </tr>
                                <tr>
                                    <td>Emerald Warner</td>
                                    <td>6205</td>
                                    <td>Chiavari</td>
                                    <td>2002/08/04</td>
                                    <td>58%</td>
                                </tr>
                                <tr>
                                    <td>Colin Burch</td>
                                    <td>7457</td>
                                    <td>Anamur</td>
                                    <td>2004/02/01</td>
                                    <td>34%</td>
                                </tr>
                                <tr>
                                    <td>Russell Haynes</td>
                                    <td>8916</td>
                                    <td>Frascati</td>
                                    <td>2015/28/04</td>
                                    <td>18%</td>
                                </tr>
                                <tr>
                                    <td>Brennan Brooks</td>
                                    <td>9011</td>
                                    <td>Olmué</td>
                                    <td>2000/18/04</td>
                                    <td>2%</td>
                                </tr>
                                <tr>
                                    <td>Kane Anthony</td>
                                    <td>8075</td>
                                    <td>LaSalle</td>
                                    <td>2006/21/05</td>
                                    <td>93%</td>
                                </tr>
                                <tr>
                                    <td>Scarlett Hurst</td>
                                    <td>1019</td>
                                    <td>Brampton</td>
                                    <td>2015/07/01</td>
                                    <td>94%</td>
                                </tr>
                                <tr>
                                    <td>James Scott</td>
                                    <td>3008</td>
                                    <td>Meux</td>
                                    <td>2007/30/05</td>
                                    <td>55%</td>
                                </tr>
                                <tr>
                                    <td>Desiree Ferguson</td>
                                    <td>9054</td>
                                    <td>Gojra</td>
                                    <td>2009/15/02</td>
                                    <td>81%</td>
                                </tr>
                                <tr>
                                    <td>Elaine Bishop</td>
                                    <td>9160</td>
                                    <td>Petrópolis</td>
                                    <td>2008/23/12</td>
                                    <td>48%</td>
                                </tr>
                                <tr>
                                    <td>Hilda Nelson</td>
                                    <td>6307</td>
                                    <td>Posina</td>
                                    <td>2004/23/05</td>
                                    <td>76%</td>
                                </tr>
                                <tr>
                                    <td>Evangeline Beasley</td>
                                    <td>3820</td>
                                    <td>Caplan</td>
                                    <td>2009/12/03</td>
                                    <td>62%</td>
                                </tr>
                                <tr>
                                    <td>Wyatt Riley</td>
                                    <td>5694</td>
                                    <td>Cavaion Veronese</td>
                                    <td>2012/19/02</td>
                                    <td>67%</td>
                                </tr>
                                <tr>
                                    <td>Wyatt Mccarthy</td>
                                    <td>3547</td>
                                    <td>Patan</td>
                                    <td>2014/23/06</td>
                                    <td>9%</td>
                                </tr>
                                <tr>
                                    <td>Cairo Rice</td>
                                    <td>6273</td>
                                    <td>Ostra Vetere</td>
                                    <td>2016/27/02</td>
                                    <td>13%</td>
                                </tr>
                                <tr>
                                    <td>Sylvia Peters</td>
                                    <td>6829</td>
                                    <td>Arrah</td>
                                    <td>2015/03/02</td>
                                    <td>13%</td>
                                </tr>
                                <tr>
                                    <td>Kasper Craig</td>
                                    <td>5515</td>
                                    <td>Firenze</td>
                                    <td>2015/26/04</td>
                                    <td>56%</td>
                                </tr>
                                <tr>
                                    <td>Leigh Ruiz</td>
                                    <td>5112</td>
                                    <td>Lac Ste. Anne</td>
                                    <td>2001/09/02</td>
                                    <td>28%</td>
                                </tr>
                                <tr>
                                    <td>Athena Aguirre</td>
                                    <td>5741</td>
                                    <td>Romeral</td>
                                    <td>2010/24/03</td>
                                    <td>15%</td>
                                </tr>
                                <tr>
                                    <td>Riley Nunez</td>
                                    <td>5533</td>
                                    <td>Sart-Eustache</td>
                                    <td>2003/26/02</td>
                                    <td>30%</td>
                                </tr>
                                <tr>
                                    <td>Lois Talley</td>
                                    <td>9393</td>
                                    <td>Dorchester</td>
                                    <td>2014/05/01</td>
                                    <td>51%</td>
                                </tr>
                                <tr>
                                    <td>Hop Bass</td>
                                    <td>1024</td>
                                    <td>Westerlo</td>
                                    <td>2012/25/09</td>
                                    <td>85%</td>
                                </tr>
                                <tr>
                                    <td>Kalia Diaz</td>
                                    <td>9184</td>
                                    <td>Ichalkaranji</td>
                                    <td>2013/26/06</td>
                                    <td>92%</td>
                                </tr>
                                <tr>
                                    <td>Maia Pate</td>
                                    <td>6682</td>
                                    <td>Louvain-la-Neuve</td>
                                    <td>2011/23/04</td>
                                    <td>50%</td>
                                </tr>
                                <tr>
                                    <td>Macaulay Pruitt</td>
                                    <td>4457</td>
                                    <td>Fraser-Fort George</td>
                                    <td>2015/03/08</td>
                                    <td>92%</td>
                                </tr>
                                <tr>
                                    <td>Danielle Oconnor</td>
                                    <td>9464</td>
                                    <td>Neuwied</td>
                                    <td>2001/05/10</td>
                                    <td>17%</td>
                                </tr>
                                <tr>
                                    <td>Kato Carr</td>
                                    <td>4842</td>
                                    <td>Faridabad</td>
                                    <td>2012/11/05</td>
                                    <td>96%</td>
                                </tr>
                                <tr>
                                    <td>Malachi Mejia</td>
                                    <td>7133</td>
                                    <td>Vorst</td>
                                    <td>2007/25/04</td>
                                    <td>26%</td>
                                </tr>
                                <tr>
                                    <td>Dominic Carver</td>
                                    <td>3476</td>
                                    <td>Pointe-aux-Trembles</td>
                                    <td>2014/14/03</td>
                                    <td>71%</td>
                                </tr>
                                <tr>
                                    <td>Paki Santos</td>
                                    <td>4424</td>
                                    <td>Cache Creek</td>
                                    <td>2001/18/11</td>
                                    <td>82%</td>
                                </tr>
                                <tr>
                                    <td>Ross Hodges</td>
                                    <td>1862</td>
                                    <td>Trazegnies</td>
                                    <td>2010/19/09</td>
                                    <td>87%</td>
                                </tr>
                                <tr>
                                    <td>Hilda Whitley</td>
                                    <td>3514</td>
                                    <td>New Sarepta</td>
                                    <td>2011/05/07</td>
                                    <td>94%</td>
                                </tr>
                                <tr>
                                    <td>Roth Cherry</td>
                                    <td>4006</td>
                                    <td>Flin Flon</td>
                                    <td>2008/02/09</td>
                                    <td>8%</td>
                                </tr>
                                <tr>
                                    <td>Lareina Jones</td>
                                    <td>8642</td>
                                    <td>East Linton</td>
                                    <td>2009/07/08</td>
                                    <td>21%</td>
                                </tr>
                                <tr>
                                    <td>Joshua Weiss</td>
                                    <td>2289</td>
                                    <td>Saint-Léonard</td>
                                    <td>2010/15/01</td>
                                    <td>52%</td>
                                </tr>
                                <tr>
                                    <td>Kiona Lowery</td>
                                    <td>5952</td>
                                    <td>Inuvik</td>
                                    <td>2002/17/12</td>
                                    <td>72%</td>
                                </tr>
                                <tr>
                                    <td>Nina Rush</td>
                                    <td>7567</td>
                                    <td>Bo‘lhe</td>
                                    <td>2008/27/01</td>
                                    <td>6%</td>
                                </tr>
                                <tr>
                                    <td>Palmer Parker</td>
                                    <td>2000</td>
                                    <td>Stade</td>
                                    <td>2012/24/07</td>
                                    <td>58%</td>
                                </tr>
                                <tr>
                                    <td>Vielka Olsen</td>
                                    <td>3745</td>
                                    <td>Vrasene</td>
                                    <td>2016/08/01</td>
                                    <td>70%</td>
                                </tr>
                                <tr>
                                    <td>Meghan Cunningham</td>
                                    <td>8604</td>
                                    <td>Söke</td>
                                    <td>2007/16/02</td>
                                    <td>59%</td>
                                </tr>
                                <tr>
                                    <td>Iola Shaw</td>
                                    <td>6447</td>
                                    <td>Albany</td>
                                    <td>2014/05/03</td>
                                    <td>88%</td>
                                </tr>
                                <tr>
                                    <td>Imelda Cole</td>
                                    <td>4564</td>
                                    <td>Haasdonk</td>
                                    <td>2007/16/11</td>
                                    <td>79%</td>
                                </tr>
                                <tr>
                                    <td>Jerry Beach</td>
                                    <td>6801</td>
                                    <td>Gattatico</td>
                                    <td>1999/07/07</td>
                                    <td>36%</td>
                                </tr>
                                <tr>
                                    <td>Garrett Rocha</td>
                                    <td>3938</td>
                                    <td>Gavorrano</td>
                                    <td>2000/06/08</td>
                                    <td>71%</td>
                                </tr>
                                <tr>
                                    <td>Derek Kerr</td>
                                    <td>1724</td>
                                    <td>Gualdo Cattaneo</td>
                                    <td>2014/21/01</td>
                                    <td>89%</td>
                                </tr>
                                <tr>
                                    <td>Shad Hudson</td>
                                    <td>5944</td>
                                    <td>Salamanca</td>
                                    <td>2014/10/12</td>
                                    <td>98%</td>
                                </tr>
                                <tr>
                                    <td>Daryl Ayers</td>
                                    <td>8276</td>
                                    <td>Barchi</td>
                                    <td>2012/12/11</td>
                                    <td>88%</td>
                                </tr>
                                <tr>
                                    <td>Caleb Livingston</td>
                                    <td>3094</td>
                                    <td>Fatehpur</td>
                                    <td>2014/13/02</td>
                                    <td>8%</td>
                                </tr>
                                <tr>
                                    <td>Sydney Meyer</td>
                                    <td>4576</td>
                                    <td>Neubrandenburg</td>
                                    <td>2015/06/02</td>
                                    <td>22%</td>
                                </tr>
                                <tr>
                                    <td>Lani Lawrence</td>
                                    <td>8501</td>
                                    <td>Turnhout</td>
                                    <td>2008/07/05</td>
                                    <td>16%</td>
                                </tr>
                                <tr>
                                    <td>Allegra Shepherd</td>
                                    <td>2576</td>
                                    <td>Meeuwen-Gruitrode</td>
                                    <td>2004/19/04</td>
                                    <td>41%</td>
                                </tr>
                                <tr>
                                    <td>Fallon Reyes</td>
                                    <td>3178</td>
                                    <td>Monceau-sur-Sambre</td>
                                    <td>2005/15/02</td>
                                    <td>16%</td>
                                </tr>
                                <tr>
                                    <td>Karen Whitley</td>
                                    <td>4357</td>
                                    <td>Sluis</td>
                                    <td>2003/02/05</td>
                                    <td>23%</td>
                                </tr>
                                <tr>
                                    <td>Stewart Stephenson</td>
                                    <td>5350</td>
                                    <td>Villa Faraldi</td>
                                    <td>2003/05/07</td>
                                    <td>65%</td>
                                </tr>
                                <tr>
                                    <td>Ursula Reynolds</td>
                                    <td>7544</td>
                                    <td>Southampton</td>
                                    <td>1999/16/12</td>
                                    <td>61%</td>
                                </tr>
                                <tr>
                                    <td>Adrienne Winters</td>
                                    <td>4425</td>
                                    <td>Laguna Blanca</td>
                                    <td>2014/15/09</td>
                                    <td>24%</td>
                                </tr>
                                <tr>
                                    <td>Francesca Brock</td>
                                    <td>1337</td>
                                    <td>Oban</td>
                                    <td>2000/12/06</td>
                                    <td>90%</td>
                                </tr>
                                <tr>
                                    <td>Ursa Davenport</td>
                                    <td>7629</td>
                                    <td>New Plymouth</td>
                                    <td>2013/27/06</td>
                                    <td>37%</td>
                                </tr>
                                <tr>
                                    <td>Mark Brock</td>
                                    <td>3310</td>
                                    <td>Veenendaal</td>
                                    <td>2006/08/09</td>
                                    <td>41%</td>
                                </tr>
                                <tr>
                                    <td>Dale Rush</td>
                                    <td>5050</td>
                                    <td>Chicoutimi</td>
                                    <td>2000/27/03</td>
                                    <td>2%</td>
                                </tr>
                                <tr>
                                    <td>Shellie Murphy</td>
                                    <td>3845</td>
                                    <td>Marlborough</td>
                                    <td>2013/13/11</td>
                                    <td>72%</td>
                                </tr>
                                <tr>
                                    <td>Porter Nicholson</td>
                                    <td>4539</td>
                                    <td>Bismil</td>
                                    <td>2012/22/10</td>
                                    <td>23%</td>
                                </tr>
                                <tr>
                                    <td>Oliver Huber</td>
                                    <td>1265</td>
                                    <td>Hannche</td>
                                    <td>2002/11/01</td>
                                    <td>94%</td>
                                </tr>
                                <tr>
                                    <td>Calista Maynard</td>
                                    <td>3315</td>
                                    <td>Pozzuolo del Friuli</td>
                                    <td>2006/23/03</td>
                                    <td>5%</td>
                                </tr>
                                <tr>
                                    <td>Lois Vargas</td>
                                    <td>6825</td>
                                    <td>Cumberland</td>
                                    <td>1999/25/04</td>
                                    <td>50%</td>
                                </tr>
                                <tr>
                                    <td>Hermione Dickson</td>
                                    <td>2785</td>
                                    <td>Woodstock</td>
                                    <td>2001/22/03</td>
                                    <td>2%</td>
                                </tr>
                                <tr>
                                    <td>Dalton Jennings</td>
                                    <td>5416</td>
                                    <td>Dudzele</td>
                                    <td>2015/09/02</td>
                                    <td>74%</td>
                                </tr>
                                <tr>
                                    <td>Cathleen Kramer</td>
                                    <td>3380</td>
                                    <td>Crowsnest Pass</td>
                                    <td>2012/27/07</td>
                                    <td>53%</td>
                                </tr>
                                <tr>
                                    <td>Zachery Morgan</td>
                                    <td>6730</td>
                                    <td>Collines-de-l'Outaouais</td>
                                    <td>2006/04/09</td>
                                    <td>51%</td>
                                </tr>
                                <tr>
                                    <td>Yoko Freeman</td>
                                    <td>4077</td>
                                    <td>Lidköping</td>
                                    <td>2002/27/12</td>
                                    <td>48%</td>
                                </tr>
                                <tr>
                                    <td>Chaim Waller</td>
                                    <td>4240</td>
                                    <td>North Shore</td>
                                    <td>2010/25/07</td>
                                    <td>25%</td>
                                </tr>
                                <tr>
                                    <td>Berk Johnston</td>
                                    <td>4532</td>
                                    <td>Vergnies</td>
                                    <td>2016/23/02</td>
                                    <td>93%</td>
                                </tr>
                                <tr>
                                    <td>Tad Munoz</td>
                                    <td>2902</td>
                                    <td>Saint-Nazaire</td>
                                    <td>2010/09/05</td>
                                    <td>65%</td>
                                </tr>
                                <tr>
                                    <td>Vivien Dominguez</td>
                                    <td>5653</td>
                                    <td>Bargagli</td>
                                    <td>2001/09/01</td>
                                    <td>86%</td>
                                </tr>
                                <tr>
                                    <td>Carissa Lara</td>
                                    <td>3241</td>
                                    <td>Sherborne</td>
                                    <td>2015/07/12</td>
                                    <td>72%</td>
                                </tr>
                                <tr>
                                    <td>Hammett Gordon</td>
                                    <td>8101</td>
                                    <td>Wah</td>
                                    <td>1998/06/09</td>
                                    <td>20%</td>
                                </tr>
                                <tr>
                                    <td>Walker Nixon</td>
                                    <td>6901</td>
                                    <td>Metz</td>
                                    <td>2011/12/11</td>
                                    <td>41%</td>
                                </tr>
                                <tr>
                                    <td>Nathan Espinoza</td>
                                    <td>5956</td>
                                    <td>Strathcona County</td>
                                    <td>2002/25/01</td>
                                    <td>47%</td>
                                </tr>
                                <tr>
                                    <td>Kelly Cameron</td>
                                    <td>4836</td>
                                    <td>Fontaine-Valmont</td>
                                    <td>1999/02/07</td>
                                    <td>24%</td>
                                </tr>
                                <tr>
                                    <td>Kyra Moses</td>
                                    <td>3796</td>
                                    <td>Quenast</td>
                                    <td>1998/07/07</td>
                                    <td>68%</td>
                                </tr>
                                <tr>
                                    <td>Grace Bishop</td>
                                    <td>8340</td>
                                    <td>Rodez</td>
                                    <td>2012/02/10</td>
                                    <td>4%</td>
                                </tr>
                                <tr>
                                    <td>Haviva Hernandez</td>
                                    <td>8136</td>
                                    <td>Suwałki</td>
                                    <td>2000/30/01</td>
                                    <td>16%</td>
                                </tr>
                                <tr>
                                    <td>Alisa Horn</td>
                                    <td>9853</td>
                                    <td>Ucluelet</td>
                                    <td>2007/01/11</td>
                                    <td>39%</td>
                                </tr>
                                <tr>
                                    <td>Zelenia Roman</td>
                                    <td>7516</td>
                                    <td>Redwater</td>
                                    <td>2012/03/03</td>
                                    <td>31%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header border border-primary text-primary border-top-0 border-start-0 border-end-0">
                        <h3 class="card-title text-primary d-inline">
                            Scroll Y </h3>
                        <span class="float-end">
                            <i class="fa fa-chevron-up clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <p>Table with fixed height.</p>
                        <table id="table14">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Ext.</th>
                                    <th>City</th>
                                    <th data-type="date" data-format="YYYY/DD/MM">Start Date</th>
                                    <th>Completion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Unity Pugh</td>
                                    <td>9958</td>
                                    <td>Curicó</td>
                                    <td>2005/02/11</td>
                                    <td>37%</td>
                                </tr>
                                <tr>
                                    <td>Theodore Duran</td>
                                    <td>8971</td>
                                    <td>Dhanbad</td>
                                    <td>1999/04/07</td>
                                    <td>97%</td>
                                </tr>
                                <tr>
                                    <td>Kylie Bishop</td>
                                    <td>3147</td>
                                    <td>Norman</td>
                                    <td>2005/09/08</td>
                                    <td>63%</td>
                                </tr>
                                <tr>
                                    <td>Willow Gilliam</td>
                                    <td>3497</td>
                                    <td>Amqui</td>
                                    <td>2009/29/11</td>
                                    <td>30%</td>
                                </tr>
                                <tr>
                                    <td>Blossom Dickerson</td>
                                    <td>5018</td>
                                    <td>Kempten</td>
                                    <td>2006/11/09</td>
                                    <td>17%</td>
                                </tr>
                                <tr>
                                    <td>Elliott Snyder</td>
                                    <td>3925</td>
                                    <td>Enines</td>
                                    <td>2006/03/08</td>
                                    <td>57%</td>
                                </tr>
                                <tr>
                                    <td>Castor Pugh</td>
                                    <td>9488</td>
                                    <td>Neath</td>
                                    <td>2014/23/12</td>
                                    <td>93%</td>
                                </tr>
                                <tr>
                                    <td>Pearl Carlson</td>
                                    <td>6231</td>
                                    <td>Cobourg</td>
                                    <td>2014/31/08</td>
                                    <td>100%</td>
                                </tr>
                                <tr>
                                    <td>Deirdre Bridges</td>
                                    <td>1579</td>
                                    <td>Eberswalde-Finow</td>
                                    <td>2014/26/08</td>
                                    <td>44%</td>
                                </tr>
                                <tr>
                                    <td>Daniel Baldwin</td>
                                    <td>6095</td>
                                    <td>Moircy</td>
                                    <td>2000/11/01</td>
                                    <td>33%</td>
                                </tr>
                                <tr>
                                    <td>Phelan Kane</td>
                                    <td>9519</td>
                                    <td>Germersheim</td>
                                    <td>1999/16/04</td>
                                    <td>77%</td>
                                </tr>
                                <tr>
                                    <td>Quentin Salas</td>
                                    <td>1339</td>
                                    <td>Los Andes</td>
                                    <td>2011/26/01</td>
                                    <td>49%</td>
                                </tr>
                                <tr>
                                    <td>Armand Suarez</td>
                                    <td>6583</td>
                                    <td>Funtua</td>
                                    <td>1999/06/11</td>
                                    <td>9%</td>
                                </tr>
                                <tr>
                                    <td>Gretchen Rogers</td>
                                    <td>5393</td>
                                    <td>Moxhe</td>
                                    <td>1998/26/10</td>
                                    <td>24%</td>
                                </tr>
                                <tr>
                                    <td>Harding Thompson</td>
                                    <td>2824</td>
                                    <td>Abeokuta</td>
                                    <td>2008/06/08</td>
                                    <td>10%</td>
                                </tr>
                                <tr>
                                    <td>Mira Rocha</td>
                                    <td>4393</td>
                                    <td>Port Harcourt</td>
                                    <td>2002/04/10</td>
                                    <td>14%</td>
                                </tr>
                                <tr>
                                    <td>Drew Phillips</td>
                                    <td>2931</td>
                                    <td>Goes</td>
                                    <td>2011/18/10</td>
                                    <td>58%</td>
                                </tr>
                                <tr>
                                    <td>Emerald Warner</td>
                                    <td>6205</td>
                                    <td>Chiavari</td>
                                    <td>2002/08/04</td>
                                    <td>58%</td>
                                </tr>
                                <tr>
                                    <td>Colin Burch</td>
                                    <td>7457</td>
                                    <td>Anamur</td>
                                    <td>2004/02/01</td>
                                    <td>34%</td>
                                </tr>
                                <tr>
                                    <td>Russell Haynes</td>
                                    <td>8916</td>
                                    <td>Frascati</td>
                                    <td>2015/28/04</td>
                                    <td>18%</td>
                                </tr>
                                <tr>
                                    <td>Brennan Brooks</td>
                                    <td>9011</td>
                                    <td>Olmué</td>
                                    <td>2000/18/04</td>
                                    <td>2%</td>
                                </tr>
                                <tr>
                                    <td>Kane Anthony</td>
                                    <td>8075</td>
                                    <td>LaSalle</td>
                                    <td>2006/21/05</td>
                                    <td>93%</td>
                                </tr>
                                <tr>
                                    <td>Scarlett Hurst</td>
                                    <td>1019</td>
                                    <td>Brampton</td>
                                    <td>2015/07/01</td>
                                    <td>94%</td>
                                </tr>
                                <tr>
                                    <td>James Scott</td>
                                    <td>3008</td>
                                    <td>Meux</td>
                                    <td>2007/30/05</td>
                                    <td>55%</td>
                                </tr>
                                <tr>
                                    <td>Desiree Ferguson</td>
                                    <td>9054</td>
                                    <td>Gojra</td>
                                    <td>2009/15/02</td>
                                    <td>81%</td>
                                </tr>
                                <tr>
                                    <td>Elaine Bishop</td>
                                    <td>9160</td>
                                    <td>Petrópolis</td>
                                    <td>2008/23/12</td>
                                    <td>48%</td>
                                </tr>
                                <tr>
                                    <td>Hilda Nelson</td>
                                    <td>6307</td>
                                    <td>Posina</td>
                                    <td>2004/23/05</td>
                                    <td>76%</td>
                                </tr>
                                <tr>
                                    <td>Evangeline Beasley</td>
                                    <td>3820</td>
                                    <td>Caplan</td>
                                    <td>2009/12/03</td>
                                    <td>62%</td>
                                </tr>
                                <tr>
                                    <td>Wyatt Riley</td>
                                    <td>5694</td>
                                    <td>Cavaion Veronese</td>
                                    <td>2012/19/02</td>
                                    <td>67%</td>
                                </tr>
                                <tr>
                                    <td>Wyatt Mccarthy</td>
                                    <td>3547</td>
                                    <td>Patan</td>
                                    <td>2014/23/06</td>
                                    <td>9%</td>
                                </tr>
                                <tr>
                                    <td>Cairo Rice</td>
                                    <td>6273</td>
                                    <td>Ostra Vetere</td>
                                    <td>2016/27/02</td>
                                    <td>13%</td>
                                </tr>
                                <tr>
                                    <td>Sylvia Peters</td>
                                    <td>6829</td>
                                    <td>Arrah</td>
                                    <td>2015/03/02</td>
                                    <td>13%</td>
                                </tr>
                                <tr>
                                    <td>Kasper Craig</td>
                                    <td>5515</td>
                                    <td>Firenze</td>
                                    <td>2015/26/04</td>
                                    <td>56%</td>
                                </tr>
                                <tr>
                                    <td>Leigh Ruiz</td>
                                    <td>5112</td>
                                    <td>Lac Ste. Anne</td>
                                    <td>2001/09/02</td>
                                    <td>28%</td>
                                </tr>
                                <tr>
                                    <td>Athena Aguirre</td>
                                    <td>5741</td>
                                    <td>Romeral</td>
                                    <td>2010/24/03</td>
                                    <td>15%</td>
                                </tr>
                                <tr>
                                    <td>Riley Nunez</td>
                                    <td>5533</td>
                                    <td>Sart-Eustache</td>
                                    <td>2003/26/02</td>
                                    <td>30%</td>
                                </tr>
                                <tr>
                                    <td>Lois Talley</td>
                                    <td>9393</td>
                                    <td>Dorchester</td>
                                    <td>2014/05/01</td>
                                    <td>51%</td>
                                </tr>
                                <tr>
                                    <td>Hop Bass</td>
                                    <td>1024</td>
                                    <td>Westerlo</td>
                                    <td>2012/25/09</td>
                                    <td>85%</td>
                                </tr>
                                <tr>
                                    <td>Kalia Diaz</td>
                                    <td>9184</td>
                                    <td>Ichalkaranji</td>
                                    <td>2013/26/06</td>
                                    <td>92%</td>
                                </tr>
                                <tr>
                                    <td>Maia Pate</td>
                                    <td>6682</td>
                                    <td>Louvain-la-Neuve</td>
                                    <td>2011/23/04</td>
                                    <td>50%</td>
                                </tr>
                                <tr>
                                    <td>Macaulay Pruitt</td>
                                    <td>4457</td>
                                    <td>Fraser-Fort George</td>
                                    <td>2015/03/08</td>
                                    <td>92%</td>
                                </tr>
                                <tr>
                                    <td>Danielle Oconnor</td>
                                    <td>9464</td>
                                    <td>Neuwied</td>
                                    <td>2001/05/10</td>
                                    <td>17%</td>
                                </tr>
                                <tr>
                                    <td>Kato Carr</td>
                                    <td>4842</td>
                                    <td>Faridabad</td>
                                    <td>2012/11/05</td>
                                    <td>96%</td>
                                </tr>
                                <tr>
                                    <td>Malachi Mejia</td>
                                    <td>7133</td>
                                    <td>Vorst</td>
                                    <td>2007/25/04</td>
                                    <td>26%</td>
                                </tr>
                                <tr>
                                    <td>Dominic Carver</td>
                                    <td>3476</td>
                                    <td>Pointe-aux-Trembles</td>
                                    <td>2014/14/03</td>
                                    <td>71%</td>
                                </tr>
                                <tr>
                                    <td>Paki Santos</td>
                                    <td>4424</td>
                                    <td>Cache Creek</td>
                                    <td>2001/18/11</td>
                                    <td>82%</td>
                                </tr>
                                <tr>
                                    <td>Ross Hodges</td>
                                    <td>1862</td>
                                    <td>Trazegnies</td>
                                    <td>2010/19/09</td>
                                    <td>87%</td>
                                </tr>
                                <tr>
                                    <td>Hilda Whitley</td>
                                    <td>3514</td>
                                    <td>New Sarepta</td>
                                    <td>2011/05/07</td>
                                    <td>94%</td>
                                </tr>
                                <tr>
                                    <td>Roth Cherry</td>
                                    <td>4006</td>
                                    <td>Flin Flon</td>
                                    <td>2008/02/09</td>
                                    <td>8%</td>
                                </tr>
                                <tr>
                                    <td>Lareina Jones</td>
                                    <td>8642</td>
                                    <td>East Linton</td>
                                    <td>2009/07/08</td>
                                    <td>21%</td>
                                </tr>
                                <tr>
                                    <td>Joshua Weiss</td>
                                    <td>2289</td>
                                    <td>Saint-Léonard</td>
                                    <td>2010/15/01</td>
                                    <td>52%</td>
                                </tr>
                                <tr>
                                    <td>Kiona Lowery</td>
                                    <td>5952</td>
                                    <td>Inuvik</td>
                                    <td>2002/17/12</td>
                                    <td>72%</td>
                                </tr>
                                <tr>
                                    <td>Nina Rush</td>
                                    <td>7567</td>
                                    <td>Bo‘lhe</td>
                                    <td>2008/27/01</td>
                                    <td>6%</td>
                                </tr>
                                <tr>
                                    <td>Palmer Parker</td>
                                    <td>2000</td>
                                    <td>Stade</td>
                                    <td>2012/24/07</td>
                                    <td>58%</td>
                                </tr>
                                <tr>
                                    <td>Vielka Olsen</td>
                                    <td>3745</td>
                                    <td>Vrasene</td>
                                    <td>2016/08/01</td>
                                    <td>70%</td>
                                </tr>
                                <tr>
                                    <td>Meghan Cunningham</td>
                                    <td>8604</td>
                                    <td>Söke</td>
                                    <td>2007/16/02</td>
                                    <td>59%</td>
                                </tr>
                                <tr>
                                    <td>Iola Shaw</td>
                                    <td>6447</td>
                                    <td>Albany</td>
                                    <td>2014/05/03</td>
                                    <td>88%</td>
                                </tr>
                                <tr>
                                    <td>Imelda Cole</td>
                                    <td>4564</td>
                                    <td>Haasdonk</td>
                                    <td>2007/16/11</td>
                                    <td>79%</td>
                                </tr>
                                <tr>
                                    <td>Jerry Beach</td>
                                    <td>6801</td>
                                    <td>Gattatico</td>
                                    <td>1999/07/07</td>
                                    <td>36%</td>
                                </tr>
                                <tr>
                                    <td>Garrett Rocha</td>
                                    <td>3938</td>
                                    <td>Gavorrano</td>
                                    <td>2000/06/08</td>
                                    <td>71%</td>
                                </tr>
                                <tr>
                                    <td>Derek Kerr</td>
                                    <td>1724</td>
                                    <td>Gualdo Cattaneo</td>
                                    <td>2014/21/01</td>
                                    <td>89%</td>
                                </tr>
                                <tr>
                                    <td>Shad Hudson</td>
                                    <td>5944</td>
                                    <td>Salamanca</td>
                                    <td>2014/10/12</td>
                                    <td>98%</td>
                                </tr>
                                <tr>
                                    <td>Daryl Ayers</td>
                                    <td>8276</td>
                                    <td>Barchi</td>
                                    <td>2012/12/11</td>
                                    <td>88%</td>
                                </tr>
                                <tr>
                                    <td>Caleb Livingston</td>
                                    <td>3094</td>
                                    <td>Fatehpur</td>
                                    <td>2014/13/02</td>
                                    <td>8%</td>
                                </tr>
                                <tr>
                                    <td>Sydney Meyer</td>
                                    <td>4576</td>
                                    <td>Neubrandenburg</td>
                                    <td>2015/06/02</td>
                                    <td>22%</td>
                                </tr>
                                <tr>
                                    <td>Lani Lawrence</td>
                                    <td>8501</td>
                                    <td>Turnhout</td>
                                    <td>2008/07/05</td>
                                    <td>16%</td>
                                </tr>
                                <tr>
                                    <td>Allegra Shepherd</td>
                                    <td>2576</td>
                                    <td>Meeuwen-Gruitrode</td>
                                    <td>2004/19/04</td>
                                    <td>41%</td>
                                </tr>
                                <tr>
                                    <td>Fallon Reyes</td>
                                    <td>3178</td>
                                    <td>Monceau-sur-Sambre</td>
                                    <td>2005/15/02</td>
                                    <td>16%</td>
                                </tr>
                                <tr>
                                    <td>Karen Whitley</td>
                                    <td>4357</td>
                                    <td>Sluis</td>
                                    <td>2003/02/05</td>
                                    <td>23%</td>
                                </tr>
                                <tr>
                                    <td>Stewart Stephenson</td>
                                    <td>5350</td>
                                    <td>Villa Faraldi</td>
                                    <td>2003/05/07</td>
                                    <td>65%</td>
                                </tr>
                                <tr>
                                    <td>Ursula Reynolds</td>
                                    <td>7544</td>
                                    <td>Southampton</td>
                                    <td>1999/16/12</td>
                                    <td>61%</td>
                                </tr>
                                <tr>
                                    <td>Adrienne Winters</td>
                                    <td>4425</td>
                                    <td>Laguna Blanca</td>
                                    <td>2014/15/09</td>
                                    <td>24%</td>
                                </tr>
                                <tr>
                                    <td>Francesca Brock</td>
                                    <td>1337</td>
                                    <td>Oban</td>
                                    <td>2000/12/06</td>
                                    <td>90%</td>
                                </tr>
                                <tr>
                                    <td>Ursa Davenport</td>
                                    <td>7629</td>
                                    <td>New Plymouth</td>
                                    <td>2013/27/06</td>
                                    <td>37%</td>
                                </tr>
                                <tr>
                                    <td>Mark Brock</td>
                                    <td>3310</td>
                                    <td>Veenendaal</td>
                                    <td>2006/08/09</td>
                                    <td>41%</td>
                                </tr>
                                <tr>
                                    <td>Dale Rush</td>
                                    <td>5050</td>
                                    <td>Chicoutimi</td>
                                    <td>2000/27/03</td>
                                    <td>2%</td>
                                </tr>
                                <tr>
                                    <td>Shellie Murphy</td>
                                    <td>3845</td>
                                    <td>Marlborough</td>
                                    <td>2013/13/11</td>
                                    <td>72%</td>
                                </tr>
                                <tr>
                                    <td>Porter Nicholson</td>
                                    <td>4539</td>
                                    <td>Bismil</td>
                                    <td>2012/22/10</td>
                                    <td>23%</td>
                                </tr>
                                <tr>
                                    <td>Oliver Huber</td>
                                    <td>1265</td>
                                    <td>Hannche</td>
                                    <td>2002/11/01</td>
                                    <td>94%</td>
                                </tr>
                                <tr>
                                    <td>Calista Maynard</td>
                                    <td>3315</td>
                                    <td>Pozzuolo del Friuli</td>
                                    <td>2006/23/03</td>
                                    <td>5%</td>
                                </tr>
                                <tr>
                                    <td>Lois Vargas</td>
                                    <td>6825</td>
                                    <td>Cumberland</td>
                                    <td>1999/25/04</td>
                                    <td>50%</td>
                                </tr>
                                <tr>
                                    <td>Hermione Dickson</td>
                                    <td>2785</td>
                                    <td>Woodstock</td>
                                    <td>2001/22/03</td>
                                    <td>2%</td>
                                </tr>
                                <tr>
                                    <td>Dalton Jennings</td>
                                    <td>5416</td>
                                    <td>Dudzele</td>
                                    <td>2015/09/02</td>
                                    <td>74%</td>
                                </tr>
                                <tr>
                                    <td>Cathleen Kramer</td>
                                    <td>3380</td>
                                    <td>Crowsnest Pass</td>
                                    <td>2012/27/07</td>
                                    <td>53%</td>
                                </tr>
                                <tr>
                                    <td>Zachery Morgan</td>
                                    <td>6730</td>
                                    <td>Collines-de-l'Outaouais</td>
                                    <td>2006/04/09</td>
                                    <td>51%</td>
                                </tr>
                                <tr>
                                    <td>Yoko Freeman</td>
                                    <td>4077</td>
                                    <td>Lidköping</td>
                                    <td>2002/27/12</td>
                                    <td>48%</td>
                                </tr>
                                <tr>
                                    <td>Chaim Waller</td>
                                    <td>4240</td>
                                    <td>North Shore</td>
                                    <td>2010/25/07</td>
                                    <td>25%</td>
                                </tr>
                                <tr>
                                    <td>Berk Johnston</td>
                                    <td>4532</td>
                                    <td>Vergnies</td>
                                    <td>2016/23/02</td>
                                    <td>93%</td>
                                </tr>
                                <tr>
                                    <td>Tad Munoz</td>
                                    <td>2902</td>
                                    <td>Saint-Nazaire</td>
                                    <td>2010/09/05</td>
                                    <td>65%</td>
                                </tr>
                                <tr>
                                    <td>Vivien Dominguez</td>
                                    <td>5653</td>
                                    <td>Bargagli</td>
                                    <td>2001/09/01</td>
                                    <td>86%</td>
                                </tr>
                                <tr>
                                    <td>Carissa Lara</td>
                                    <td>3241</td>
                                    <td>Sherborne</td>
                                    <td>2015/07/12</td>
                                    <td>72%</td>
                                </tr>
                                <tr>
                                    <td>Hammett Gordon</td>
                                    <td>8101</td>
                                    <td>Wah</td>
                                    <td>1998/06/09</td>
                                    <td>20%</td>
                                </tr>
                                <tr>
                                    <td>Walker Nixon</td>
                                    <td>6901</td>
                                    <td>Metz</td>
                                    <td>2011/12/11</td>
                                    <td>41%</td>
                                </tr>
                                <tr>
                                    <td>Nathan Espinoza</td>
                                    <td>5956</td>
                                    <td>Strathcona County</td>
                                    <td>2002/25/01</td>
                                    <td>47%</td>
                                </tr>
                                <tr>
                                    <td>Kelly Cameron</td>
                                    <td>4836</td>
                                    <td>Fontaine-Valmont</td>
                                    <td>1999/02/07</td>
                                    <td>24%</td>
                                </tr>
                                <tr>
                                    <td>Kyra Moses</td>
                                    <td>3796</td>
                                    <td>Quenast</td>
                                    <td>1998/07/07</td>
                                    <td>68%</td>
                                </tr>
                                <tr>
                                    <td>Grace Bishop</td>
                                    <td>8340</td>
                                    <td>Rodez</td>
                                    <td>2012/02/10</td>
                                    <td>4%</td>
                                </tr>
                                <tr>
                                    <td>Haviva Hernandez</td>
                                    <td>8136</td>
                                    <td>Suwałki</td>
                                    <td>2000/30/01</td>
                                    <td>16%</td>
                                </tr>
                                <tr>
                                    <td>Alisa Horn</td>
                                    <td>9853</td>
                                    <td>Ucluelet</td>
                                    <td>2007/01/11</td>
                                    <td>39%</td>
                                </tr>
                                <tr>
                                    <td>Zelenia Roman</td>
                                    <td>7516</td>
                                    <td>Redwater</td>
                                    <td>2012/03/03</td>
                                    <td>31%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header border border-primary text-primary border-top-0 border-start-0 border-end-0">
                        <h3 class="card-title text-primary d-inline">
                            Checkbox column
                        </h3>
                        <span class="float-end">
                            <i class="fa fa-chevron-up clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <div id="table15"></div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header border border-primary text-primary border-top-0 border-start-0 border-end-0">
                        <h3 class="card-title text-primary d-inline">
                            Column Filters
                        </h3>
                        <span class="float-end">
                            <i class="fa fa-chevron-up clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <table id="table16">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Ext.</th>
                                    <th>City</th>
                                    <th data-type="date" data-format="YYYY/DD/MM">Start Date</th>
                                    <th>Completion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Unity Pugh</td>
                                    <td>9958</td>
                                    <td>Curicó</td>
                                    <td>2005/02/11</td>
                                    <td>37%</td>
                                </tr>
                                <tr>
                                    <td>Theodore Duran</td>
                                    <td>8971</td>
                                    <td>Dhanbad</td>
                                    <td>1999/04/07</td>
                                    <td>97%</td>
                                </tr>
                                <tr>
                                    <td>Kylie Bishop</td>
                                    <td>3147</td>
                                    <td>Norman</td>
                                    <td>2005/09/08</td>
                                    <td>63%</td>
                                </tr>
                                <tr>
                                    <td>Willow Gilliam</td>
                                    <td>3497</td>
                                    <td>Amqui</td>
                                    <td>2009/29/11</td>
                                    <td>30%</td>
                                </tr>
                                <tr>
                                    <td>Blossom Dickerson</td>
                                    <td>5018</td>
                                    <td>Kempten</td>
                                    <td>2006/11/09</td>
                                    <td>17%</td>
                                </tr>
                                <tr>
                                    <td>Elliott Snyder</td>
                                    <td>3925</td>
                                    <td>Enines</td>
                                    <td>2006/03/08</td>
                                    <td>57%</td>
                                </tr>
                                <tr>
                                    <td>Castor Pugh</td>
                                    <td>9488</td>
                                    <td>Neath</td>
                                    <td>2014/23/12</td>
                                    <td>93%</td>
                                </tr>
                                <tr>
                                    <td>Pearl Carlson</td>
                                    <td>6231</td>
                                    <td>Cobourg</td>
                                    <td>2014/31/08</td>
                                    <td>100%</td>
                                </tr>
                                <tr>
                                    <td>Deirdre Bridges</td>
                                    <td>1579</td>
                                    <td>Eberswalde-Finow</td>
                                    <td>2014/26/08</td>
                                    <td>44%</td>
                                </tr>
                                <tr>
                                    <td>Daniel Baldwin</td>
                                    <td>6095</td>
                                    <td>Moircy</td>
                                    <td>2000/11/01</td>
                                    <td>33%</td>
                                </tr>
                                <tr>
                                    <td>Phelan Kane</td>
                                    <td>9519</td>
                                    <td>Germersheim</td>
                                    <td>1999/16/04</td>
                                    <td>77%</td>
                                </tr>
                                <tr>
                                    <td>Quentin Salas</td>
                                    <td>1339</td>
                                    <td>Los Andes</td>
                                    <td>2011/26/01</td>
                                    <td>49%</td>
                                </tr>
                                <tr>
                                    <td>Armand Suarez</td>
                                    <td>6583</td>
                                    <td>Funtua</td>
                                    <td>1999/06/11</td>
                                    <td>9%</td>
                                </tr>
                                <tr>
                                    <td>Gretchen Rogers</td>
                                    <td>5393</td>
                                    <td>Moxhe</td>
                                    <td>1998/26/10</td>
                                    <td>24%</td>
                                </tr>
                                <tr>
                                    <td>Harding Thompson</td>
                                    <td>2824</td>
                                    <td>Abeokuta</td>
                                    <td>2008/06/08</td>
                                    <td>10%</td>
                                </tr>
                                <tr>
                                    <td>Mira Rocha</td>
                                    <td>4393</td>
                                    <td>Port Harcourt</td>
                                    <td>2002/04/10</td>
                                    <td>14%</td>
                                </tr>
                                <tr>
                                    <td>Drew Phillips</td>
                                    <td>2931</td>
                                    <td>Goes</td>
                                    <td>2011/18/10</td>
                                    <td>58%</td>
                                </tr>
                                <tr>
                                    <td>Emerald Warner</td>
                                    <td>6205</td>
                                    <td>Chiavari</td>
                                    <td>2002/08/04</td>
                                    <td>58%</td>
                                </tr>
                                <tr>
                                    <td>Colin Burch</td>
                                    <td>7457</td>
                                    <td>Anamur</td>
                                    <td>2004/02/01</td>
                                    <td>34%</td>
                                </tr>
                                <tr>
                                    <td>Russell Haynes</td>
                                    <td>8916</td>
                                    <td>Frascati</td>
                                    <td>2015/28/04</td>
                                    <td>18%</td>
                                </tr>
                                <tr>
                                    <td>Brennan Brooks</td>
                                    <td>9011</td>
                                    <td>Olmué</td>
                                    <td>2000/18/04</td>
                                    <td>2%</td>
                                </tr>
                                <tr>
                                    <td>Kane Anthony</td>
                                    <td>8075</td>
                                    <td>LaSalle</td>
                                    <td>2006/21/05</td>
                                    <td>93%</td>
                                </tr>
                                <tr>
                                    <td>Scarlett Hurst</td>
                                    <td>1019</td>
                                    <td>Brampton</td>
                                    <td>2015/07/01</td>
                                    <td>94%</td>
                                </tr>
                                <tr>
                                    <td>James Scott</td>
                                    <td>3008</td>
                                    <td>Meux</td>
                                    <td>2007/30/05</td>
                                    <td>55%</td>
                                </tr>
                                <tr>
                                    <td>Desiree Ferguson</td>
                                    <td>9054</td>
                                    <td>Gojra</td>
                                    <td>2009/15/02</td>
                                    <td>81%</td>
                                </tr>
                                <tr>
                                    <td>Elaine Bishop</td>
                                    <td>9160</td>
                                    <td>Petrópolis</td>
                                    <td>2008/23/12</td>
                                    <td>48%</td>
                                </tr>
                                <tr>
                                    <td>Hilda Nelson</td>
                                    <td>6307</td>
                                    <td>Posina</td>
                                    <td>2004/23/05</td>
                                    <td>76%</td>
                                </tr>
                                <tr>
                                    <td>Evangeline Beasley</td>
                                    <td>3820</td>
                                    <td>Caplan</td>
                                    <td>2009/12/03</td>
                                    <td>62%</td>
                                </tr>
                                <tr>
                                    <td>Wyatt Riley</td>
                                    <td>5694</td>
                                    <td>Cavaion Veronese</td>
                                    <td>2012/19/02</td>
                                    <td>67%</td>
                                </tr>
                                <tr>
                                    <td>Wyatt Mccarthy</td>
                                    <td>3547</td>
                                    <td>Patan</td>
                                    <td>2014/23/06</td>
                                    <td>9%</td>
                                </tr>
                                <tr>
                                    <td>Cairo Rice</td>
                                    <td>6273</td>
                                    <td>Ostra Vetere</td>
                                    <td>2016/27/02</td>
                                    <td>13%</td>
                                </tr>
                                <tr>
                                    <td>Sylvia Peters</td>
                                    <td>6829</td>
                                    <td>Arrah</td>
                                    <td>2015/03/02</td>
                                    <td>13%</td>
                                </tr>
                                <tr>
                                    <td>Kasper Craig</td>
                                    <td>5515</td>
                                    <td>Firenze</td>
                                    <td>2015/26/04</td>
                                    <td>56%</td>
                                </tr>
                                <tr>
                                    <td>Leigh Ruiz</td>
                                    <td>5112</td>
                                    <td>Lac Ste. Anne</td>
                                    <td>2001/09/02</td>
                                    <td>28%</td>
                                </tr>
                                <tr>
                                    <td>Athena Aguirre</td>
                                    <td>5741</td>
                                    <td>Romeral</td>
                                    <td>2010/24/03</td>
                                    <td>15%</td>
                                </tr>
                                <tr>
                                    <td>Riley Nunez</td>
                                    <td>5533</td>
                                    <td>Sart-Eustache</td>
                                    <td>2003/26/02</td>
                                    <td>30%</td>
                                </tr>
                                <tr>
                                    <td>Lois Talley</td>
                                    <td>9393</td>
                                    <td>Dorchester</td>
                                    <td>2014/05/01</td>
                                    <td>51%</td>
                                </tr>
                                <tr>
                                    <td>Hop Bass</td>
                                    <td>1024</td>
                                    <td>Westerlo</td>
                                    <td>2012/25/09</td>
                                    <td>85%</td>
                                </tr>
                                <tr>
                                    <td>Kalia Diaz</td>
                                    <td>9184</td>
                                    <td>Ichalkaranji</td>
                                    <td>2013/26/06</td>
                                    <td>92%</td>
                                </tr>
                                <tr>
                                    <td>Maia Pate</td>
                                    <td>6682</td>
                                    <td>Louvain-la-Neuve</td>
                                    <td>2011/23/04</td>
                                    <td>50%</td>
                                </tr>
                                <tr>
                                    <td>Macaulay Pruitt</td>
                                    <td>4457</td>
                                    <td>Fraser-Fort George</td>
                                    <td>2015/03/08</td>
                                    <td>92%</td>
                                </tr>
                                <tr>
                                    <td>Danielle Oconnor</td>
                                    <td>9464</td>
                                    <td>Neuwied</td>
                                    <td>2001/05/10</td>
                                    <td>17%</td>
                                </tr>
                                <tr>
                                    <td>Kato Carr</td>
                                    <td>4842</td>
                                    <td>Faridabad</td>
                                    <td>2012/11/05</td>
                                    <td>96%</td>
                                </tr>
                                <tr>
                                    <td>Malachi Mejia</td>
                                    <td>7133</td>
                                    <td>Vorst</td>
                                    <td>2007/25/04</td>
                                    <td>26%</td>
                                </tr>
                                <tr>
                                    <td>Dominic Carver</td>
                                    <td>3476</td>
                                    <td>Pointe-aux-Trembles</td>
                                    <td>2014/14/03</td>
                                    <td>71%</td>
                                </tr>
                                <tr>
                                    <td>Paki Santos</td>
                                    <td>4424</td>
                                    <td>Cache Creek</td>
                                    <td>2001/18/11</td>
                                    <td>82%</td>
                                </tr>
                                <tr>
                                    <td>Ross Hodges</td>
                                    <td>1862</td>
                                    <td>Trazegnies</td>
                                    <td>2010/19/09</td>
                                    <td>87%</td>
                                </tr>
                                <tr>
                                    <td>Hilda Whitley</td>
                                    <td>3514</td>
                                    <td>New Sarepta</td>
                                    <td>2011/05/07</td>
                                    <td>94%</td>
                                </tr>
                                <tr>
                                    <td>Roth Cherry</td>
                                    <td>4006</td>
                                    <td>Flin Flon</td>
                                    <td>2008/02/09</td>
                                    <td>8%</td>
                                </tr>
                                <tr>
                                    <td>Lareina Jones</td>
                                    <td>8642</td>
                                    <td>East Linton</td>
                                    <td>2009/07/08</td>
                                    <td>21%</td>
                                </tr>
                                <tr>
                                    <td>Joshua Weiss</td>
                                    <td>2289</td>
                                    <td>Saint-Léonard</td>
                                    <td>2010/15/01</td>
                                    <td>52%</td>
                                </tr>
                                <tr>
                                    <td>Kiona Lowery</td>
                                    <td>5952</td>
                                    <td>Inuvik</td>
                                    <td>2002/17/12</td>
                                    <td>72%</td>
                                </tr>
                                <tr>
                                    <td>Nina Rush</td>
                                    <td>7567</td>
                                    <td>Bo‘lhe</td>
                                    <td>2008/27/01</td>
                                    <td>6%</td>
                                </tr>
                                <tr>
                                    <td>Palmer Parker</td>
                                    <td>2000</td>
                                    <td>Stade</td>
                                    <td>2012/24/07</td>
                                    <td>58%</td>
                                </tr>
                                <tr>
                                    <td>Vielka Olsen</td>
                                    <td>3745</td>
                                    <td>Vrasene</td>
                                    <td>2016/08/01</td>
                                    <td>70%</td>
                                </tr>
                                <tr>
                                    <td>Meghan Cunningham</td>
                                    <td>8604</td>
                                    <td>Söke</td>
                                    <td>2007/16/02</td>
                                    <td>59%</td>
                                </tr>
                                <tr>
                                    <td>Iola Shaw</td>
                                    <td>6447</td>
                                    <td>Albany</td>
                                    <td>2014/05/03</td>
                                    <td>88%</td>
                                </tr>
                                <tr>
                                    <td>Imelda Cole</td>
                                    <td>4564</td>
                                    <td>Haasdonk</td>
                                    <td>2007/16/11</td>
                                    <td>79%</td>
                                </tr>
                                <tr>
                                    <td>Jerry Beach</td>
                                    <td>6801</td>
                                    <td>Gattatico</td>
                                    <td>1999/07/07</td>
                                    <td>36%</td>
                                </tr>
                                <tr>
                                    <td>Garrett Rocha</td>
                                    <td>3938</td>
                                    <td>Gavorrano</td>
                                    <td>2000/06/08</td>
                                    <td>71%</td>
                                </tr>
                                <tr>
                                    <td>Derek Kerr</td>
                                    <td>1724</td>
                                    <td>Gualdo Cattaneo</td>
                                    <td>2014/21/01</td>
                                    <td>89%</td>
                                </tr>
                                <tr>
                                    <td>Shad Hudson</td>
                                    <td>5944</td>
                                    <td>Salamanca</td>
                                    <td>2014/10/12</td>
                                    <td>98%</td>
                                </tr>
                                <tr>
                                    <td>Daryl Ayers</td>
                                    <td>8276</td>
                                    <td>Barchi</td>
                                    <td>2012/12/11</td>
                                    <td>88%</td>
                                </tr>
                                <tr>
                                    <td>Caleb Livingston</td>
                                    <td>3094</td>
                                    <td>Fatehpur</td>
                                    <td>2014/13/02</td>
                                    <td>8%</td>
                                </tr>
                                <tr>
                                    <td>Sydney Meyer</td>
                                    <td>4576</td>
                                    <td>Neubrandenburg</td>
                                    <td>2015/06/02</td>
                                    <td>22%</td>
                                </tr>
                                <tr>
                                    <td>Lani Lawrence</td>
                                    <td>8501</td>
                                    <td>Turnhout</td>
                                    <td>2008/07/05</td>
                                    <td>16%</td>
                                </tr>
                                <tr>
                                    <td>Allegra Shepherd</td>
                                    <td>2576</td>
                                    <td>Meeuwen-Gruitrode</td>
                                    <td>2004/19/04</td>
                                    <td>41%</td>
                                </tr>
                                <tr>
                                    <td>Fallon Reyes</td>
                                    <td>3178</td>
                                    <td>Monceau-sur-Sambre</td>
                                    <td>2005/15/02</td>
                                    <td>16%</td>
                                </tr>
                                <tr>
                                    <td>Karen Whitley</td>
                                    <td>4357</td>
                                    <td>Sluis</td>
                                    <td>2003/02/05</td>
                                    <td>23%</td>
                                </tr>
                                <tr>
                                    <td>Stewart Stephenson</td>
                                    <td>5350</td>
                                    <td>Villa Faraldi</td>
                                    <td>2003/05/07</td>
                                    <td>65%</td>
                                </tr>
                                <tr>
                                    <td>Ursula Reynolds</td>
                                    <td>7544</td>
                                    <td>Southampton</td>
                                    <td>1999/16/12</td>
                                    <td>61%</td>
                                </tr>
                                <tr>
                                    <td>Adrienne Winters</td>
                                    <td>4425</td>
                                    <td>Laguna Blanca</td>
                                    <td>2014/15/09</td>
                                    <td>24%</td>
                                </tr>
                                <tr>
                                    <td>Francesca Brock</td>
                                    <td>1337</td>
                                    <td>Oban</td>
                                    <td>2000/12/06</td>
                                    <td>90%</td>
                                </tr>
                                <tr>
                                    <td>Ursa Davenport</td>
                                    <td>7629</td>
                                    <td>New Plymouth</td>
                                    <td>2013/27/06</td>
                                    <td>37%</td>
                                </tr>
                                <tr>
                                    <td>Mark Brock</td>
                                    <td>3310</td>
                                    <td>Veenendaal</td>
                                    <td>2006/08/09</td>
                                    <td>41%</td>
                                </tr>
                                <tr>
                                    <td>Dale Rush</td>
                                    <td>5050</td>
                                    <td>Chicoutimi</td>
                                    <td>2000/27/03</td>
                                    <td>2%</td>
                                </tr>
                                <tr>
                                    <td>Shellie Murphy</td>
                                    <td>3845</td>
                                    <td>Marlborough</td>
                                    <td>2013/13/11</td>
                                    <td>72%</td>
                                </tr>
                                <tr>
                                    <td>Porter Nicholson</td>
                                    <td>4539</td>
                                    <td>Bismil</td>
                                    <td>2012/22/10</td>
                                    <td>23%</td>
                                </tr>
                                <tr>
                                    <td>Oliver Huber</td>
                                    <td>1265</td>
                                    <td>Hannche</td>
                                    <td>2002/11/01</td>
                                    <td>94%</td>
                                </tr>
                                <tr>
                                    <td>Calista Maynard</td>
                                    <td>3315</td>
                                    <td>Pozzuolo del Friuli</td>
                                    <td>2006/23/03</td>
                                    <td>5%</td>
                                </tr>
                                <tr>
                                    <td>Lois Vargas</td>
                                    <td>6825</td>
                                    <td>Cumberland</td>
                                    <td>1999/25/04</td>
                                    <td>50%</td>
                                </tr>
                                <tr>
                                    <td>Hermione Dickson</td>
                                    <td>2785</td>
                                    <td>Woodstock</td>
                                    <td>2001/22/03</td>
                                    <td>2%</td>
                                </tr>
                                <tr>
                                    <td>Dalton Jennings</td>
                                    <td>5416</td>
                                    <td>Dudzele</td>
                                    <td>2015/09/02</td>
                                    <td>74%</td>
                                </tr>
                                <tr>
                                    <td>Cathleen Kramer</td>
                                    <td>3380</td>
                                    <td>Crowsnest Pass</td>
                                    <td>2012/27/07</td>
                                    <td>53%</td>
                                </tr>
                                <tr>
                                    <td>Zachery Morgan</td>
                                    <td>6730</td>
                                    <td>Collines-de-l'Outaouais</td>
                                    <td>2006/04/09</td>
                                    <td>51%</td>
                                </tr>
                                <tr>
                                    <td>Yoko Freeman</td>
                                    <td>4077</td>
                                    <td>Lidköping</td>
                                    <td>2002/27/12</td>
                                    <td>48%</td>
                                </tr>
                                <tr>
                                    <td>Chaim Waller</td>
                                    <td>4240</td>
                                    <td>North Shore</td>
                                    <td>2010/25/07</td>
                                    <td>25%</td>
                                </tr>
                                <tr>
                                    <td>Berk Johnston</td>
                                    <td>4532</td>
                                    <td>Vergnies</td>
                                    <td>2016/23/02</td>
                                    <td>93%</td>
                                </tr>
                                <tr>
                                    <td>Tad Munoz</td>
                                    <td>2902</td>
                                    <td>Saint-Nazaire</td>
                                    <td>2010/09/05</td>
                                    <td>65%</td>
                                </tr>
                                <tr>
                                    <td>Vivien Dominguez</td>
                                    <td>5653</td>
                                    <td>Bargagli</td>
                                    <td>2001/09/01</td>
                                    <td>86%</td>
                                </tr>
                                <tr>
                                    <td>Carissa Lara</td>
                                    <td>3241</td>
                                    <td>Sherborne</td>
                                    <td>2015/07/12</td>
                                    <td>72%</td>
                                </tr>
                                <tr>
                                    <td>Hammett Gordon</td>
                                    <td>8101</td>
                                    <td>Wah</td>
                                    <td>1998/06/09</td>
                                    <td>20%</td>
                                </tr>
                                <tr>
                                    <td>Walker Nixon</td>
                                    <td>6901</td>
                                    <td>Metz</td>
                                    <td>2011/12/11</td>
                                    <td>41%</td>
                                </tr>
                                <tr>
                                    <td>Nathan Espinoza</td>
                                    <td>5956</td>
                                    <td>Strathcona County</td>
                                    <td>2002/25/01</td>
                                    <td>47%</td>
                                </tr>
                                <tr>
                                    <td>Kelly Cameron</td>
                                    <td>4836</td>
                                    <td>Fontaine-Valmont</td>
                                    <td>1999/02/07</td>
                                    <td>24%</td>
                                </tr>
                                <tr>
                                    <td>Kyra Moses</td>
                                    <td>3796</td>
                                    <td>Quenast</td>
                                    <td>1998/07/07</td>
                                    <td>68%</td>
                                </tr>
                                <tr>
                                    <td>Grace Bishop</td>
                                    <td>8340</td>
                                    <td>Rodez</td>
                                    <td>2012/02/10</td>
                                    <td>4%</td>
                                </tr>
                                <tr>
                                    <td>Haviva Hernandez</td>
                                    <td>8136</td>
                                    <td>Suwałki</td>
                                    <td>2000/30/01</td>
                                    <td>16%</td>
                                </tr>
                                <tr>
                                    <td>Alisa Horn</td>
                                    <td>9853</td>
                                    <td>Ucluelet</td>
                                    <td>2007/01/11</td>
                                    <td>39%</td>
                                </tr>
                                <tr>
                                    <td>Zelenia Roman</td>
                                    <td>7516</td>
                                    <td>Redwater</td>
                                    <td>2012/03/03</td>
                                    <td>31%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header border border-primary text-primary border-top-0 border-start-0 border-end-0">
                        <h3 class="card-title text-primary d-inline">
                            SVGs
                        </h3>
                        <span class="float-end">
                            <i class="fa fa-chevron-up clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <div id="table17" class="svg-img"></div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header border border-primary text-primary border-top-0 border-start-0 border-end-0">
                        <h3 class="card-title text-primary d-inline">
                            And search
                        </h3>
                        <span class="float-end">
                            <i class="fa fa-chevron-up clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <p>
                            Try to search for "blossom 2014" in the two boxes.
                            The OR-search will give you results that contain "2014" OR "Blossom",
                            while the AND-search will only return results including both "2014" and "Blossom".
                        </p>
                        <br>
                        <p>
                            The search item separator for the extension column is ";" so that searching for "3147;5018" will
                            return
                            no results, but searching for "3147" or "5018" will return the row that contains that value.
                        </p>
                        <table id="table18">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Ext.</th>
                                    <th>City</th>
                                    <th data-type="date" data-format="YYYY/DD/MM">Start Date</th>
                                    <th>Completion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Unity Pugh</td>
                                    <td>9958</td>
                                    <td>Curicó</td>
                                    <td>2005/02/11</td>
                                    <td>37%</td>
                                </tr>
                                <tr>
                                    <td>Theodore Duran</td>
                                    <td>8971</td>
                                    <td>Dhanbad</td>
                                    <td>1999/04/07</td>
                                    <td>97%</td>
                                </tr>
                                <tr>
                                    <td>Kylie Bishop</td>
                                    <td>3147;5018</td>
                                    <td>Norman</td>
                                    <td>2005/09/08</td>
                                    <td>63%</td>
                                </tr>
                                <tr>
                                    <td>Willow Gilliam</td>
                                    <td>3497;4067</td>
                                    <td>Amqui</td>
                                    <td>2009/29/11</td>
                                    <td>30%</td>
                                </tr>
                                <tr>
                                    <td>Blossom Dickerson</td>
                                    <td>5018</td>
                                    <td>Kempten</td>
                                    <td>2007/11/09</td>
                                    <td>17%</td>
                                </tr>
                                <tr>
                                    <td>Elliott Snyder</td>
                                    <td>3925;4050</td>
                                    <td>Enines</td>
                                    <td>2006/03/08</td>
                                    <td>57%</td>
                                </tr>
                                <tr>
                                    <td>Castor Pugh</td>
                                    <td>9488</td>
                                    <td>Neath</td>
                                    <td>2014/23/12</td>
                                    <td>93%</td>
                                </tr>
                                <tr>
                                    <td>Pearl Carlson</td>
                                    <td>6231</td>
                                    <td>Cobourg</td>
                                    <td>2014/31/08</td>
                                    <td>100%</td>
                                </tr>
                                <tr>
                                    <td>Deirdre Bridges</td>
                                    <td>1579</td>
                                    <td>Eberswalde-Finow</td>
                                    <td>2014/26/08</td>
                                    <td>44%</td>
                                </tr>
                                <tr>
                                    <td>Daniel Baldwin</td>
                                    <td>6095</td>
                                    <td>Moircy</td>
                                    <td>2000/11/01</td>
                                    <td>33%</td>
                                </tr>
                                <tr>
                                    <td>Phelan Kane</td>
                                    <td>9519</td>
                                    <td>Germersheim</td>
                                    <td>1999/16/04</td>
                                    <td>77%</td>
                                </tr>
                                <tr>
                                    <td>Quentin Salas</td>
                                    <td>1339</td>
                                    <td>Los Andes</td>
                                    <td>2011/26/01</td>
                                    <td>49%</td>
                                </tr>
                                <tr>
                                    <td>Armand Suarez</td>
                                    <td>6583</td>
                                    <td>Funtua</td>
                                    <td>1999/06/11</td>
                                    <td>9%</td>
                                </tr>
                                <tr>
                                    <td>Gretchen Rogers</td>
                                    <td>5393</td>
                                    <td>Moxhe</td>
                                    <td>1998/26/10</td>
                                    <td>24%</td>
                                </tr>
                                <tr>
                                    <td>Harding Thompson</td>
                                    <td>2824</td>
                                    <td>Abeokuta</td>
                                    <td>2008/06/08</td>
                                    <td>10%</td>
                                </tr>
                                <tr>
                                    <td>Mira Rocha</td>
                                    <td>4393</td>
                                    <td>Port Harcourt</td>
                                    <td>2002/04/10</td>
                                    <td>14%</td>
                                </tr>
                                <tr>
                                    <td>Drew Phillips</td>
                                    <td>2931</td>
                                    <td>Goes</td>
                                    <td>2011/18/10</td>
                                    <td>58%</td>
                                </tr>
                                <tr>
                                    <td>Emerald Warner</td>
                                    <td>6205</td>
                                    <td>Chiavari</td>
                                    <td>2002/08/04</td>
                                    <td>58%</td>
                                </tr>
                                <tr>
                                    <td>Colin Burch</td>
                                    <td>7457</td>
                                    <td>Anamur</td>
                                    <td>2004/02/01</td>
                                    <td>34%</td>
                                </tr>
                                <tr>
                                    <td>Russell Haynes</td>
                                    <td>8916</td>
                                    <td>Frascati</td>
                                    <td>2015/28/04</td>
                                    <td>18%</td>
                                </tr>
                                <tr>
                                    <td>Brennan Brooks</td>
                                    <td>9011;7563</td>
                                    <td>Olmué</td>
                                    <td>2000/18/04</td>
                                    <td>2%</td>
                                </tr>
                                <tr>
                                    <td>Kane Anthony</td>
                                    <td>8075</td>
                                    <td>LaSalle</td>
                                    <td>2006/21/05</td>
                                    <td>93%</td>
                                </tr>
                                <tr>
                                    <td>Scarlett Hurst</td>
                                    <td>1019</td>
                                    <td>Brampton</td>
                                    <td>2015/07/01</td>
                                    <td>94%</td>
                                </tr>
                                <tr>
                                    <td>James Scott</td>
                                    <td>3008</td>
                                    <td>Meux</td>
                                    <td>2007/30/05</td>
                                    <td>55%</td>
                                </tr>
                                <tr>
                                    <td>Desiree Ferguson</td>
                                    <td>9054</td>
                                    <td>Gojra</td>
                                    <td>2009/15/02</td>
                                    <td>81%</td>
                                </tr>
                                <tr>
                                    <td>Elaine Bishop</td>
                                    <td>9160</td>
                                    <td>Petrópolis</td>
                                    <td>2008/23/12</td>
                                    <td>48%</td>
                                </tr>
                                <tr>
                                    <td>Hilda Nelson</td>
                                    <td>6307</td>
                                    <td>Posina</td>
                                    <td>2004/23/05</td>
                                    <td>76%</td>
                                </tr>
                                <tr>
                                    <td>Evangeline Beasley</td>
                                    <td>3820</td>
                                    <td>Caplan</td>
                                    <td>2009/12/03</td>
                                    <td>62%</td>
                                </tr>
                                <tr>
                                    <td>Wyatt Riley</td>
                                    <td>5694</td>
                                    <td>Cavaion Veronese</td>
                                    <td>2012/19/02</td>
                                    <td>67%</td>
                                </tr>
                                <tr>
                                    <td>Blossom Mccarthy</td>
                                    <td>3547</td>
                                    <td>Patan</td>
                                    <td>2014/23/06</td>
                                    <td>9%</td>
                                </tr>
                                <tr>
                                    <td>Cairo Rice</td>
                                    <td>6273</td>
                                    <td>Ostra Vetere</td>
                                    <td>2016/27/02</td>
                                    <td>13%</td>
                                </tr>
                                <tr>
                                    <td>Sylvia Peters</td>
                                    <td>6829</td>
                                    <td>Arrah</td>
                                    <td>2015/03/02</td>
                                    <td>13%</td>
                                </tr>
                                <tr>
                                    <td>Kasper Craig</td>
                                    <td>5515</td>
                                    <td>Firenze</td>
                                    <td>2015/26/04</td>
                                    <td>56%</td>
                                </tr>
                                <tr>
                                    <td>Leigh Ruiz</td>
                                    <td>5112</td>
                                    <td>Lac Ste. Anne</td>
                                    <td>2001/09/02</td>
                                    <td>28%</td>
                                </tr>
                                <tr>
                                    <td>Athena Aguirre</td>
                                    <td>5741</td>
                                    <td>Romeral</td>
                                    <td>2010/24/03</td>
                                    <td>15%</td>
                                </tr>
                                <tr>
                                    <td>Riley Nunez</td>
                                    <td>5533</td>
                                    <td>Sart-Eustache</td>
                                    <td>2003/26/02</td>
                                    <td>30%</td>
                                </tr>
                                <tr>
                                    <td>Lois Talley</td>
                                    <td>9393</td>
                                    <td>Dorchester</td>
                                    <td>2014/05/01</td>
                                    <td>51%</td>
                                </tr>
                                <tr>
                                    <td>Hop Bass</td>
                                    <td>1024</td>
                                    <td>Westerlo</td>
                                    <td>2012/25/09</td>
                                    <td>85%</td>
                                </tr>
                                <tr>
                                    <td>Kalia Diaz</td>
                                    <td>9184</td>
                                    <td>Ichalkaranji</td>
                                    <td>2013/26/06</td>
                                    <td>92%</td>
                                </tr>
                                <tr>
                                    <td>Maia Pate</td>
                                    <td>6682</td>
                                    <td>Louvain-la-Neuve</td>
                                    <td>2011/23/04</td>
                                    <td>50%</td>
                                </tr>
                                <tr>
                                    <td>Macaulay Pruitt</td>
                                    <td>4457</td>
                                    <td>Fraser-Fort George</td>
                                    <td>2015/03/08</td>
                                    <td>92%</td>
                                </tr>
                                <tr>
                                    <td>Danielle Oconnor</td>
                                    <td>9464</td>
                                    <td>Neuwied</td>
                                    <td>2001/05/10</td>
                                    <td>17%</td>
                                </tr>
                                <tr>
                                    <td>Kato Carr</td>
                                    <td>4842</td>
                                    <td>Faridabad</td>
                                    <td>2012/11/05</td>
                                    <td>96%</td>
                                </tr>
                                <tr>
                                    <td>Malachi Mejia</td>
                                    <td>7133</td>
                                    <td>Vorst</td>
                                    <td>2007/25/04</td>
                                    <td>26%</td>
                                </tr>
                                <tr>
                                    <td>Dominic Carver</td>
                                    <td>3476</td>
                                    <td>Pointe-aux-Trembles</td>
                                    <td>2014/14/03</td>
                                    <td>71%</td>
                                </tr>
                                <tr>
                                    <td>Paki Santos</td>
                                    <td>4424;4054</td>
                                    <td>Cache Creek</td>
                                    <td>2001/18/11</td>
                                    <td>82%</td>
                                </tr>
                                <tr>
                                    <td>Ross Hodges</td>
                                    <td>1862</td>
                                    <td>Trazegnies</td>
                                    <td>2010/19/09</td>
                                    <td>87%</td>
                                </tr>
                                <tr>
                                    <td>Hilda Whitley</td>
                                    <td>3514</td>
                                    <td>New Sarepta</td>
                                    <td>2011/05/07</td>
                                    <td>94%</td>
                                </tr>
                                <tr>
                                    <td>Roth Cherry</td>
                                    <td>4006</td>
                                    <td>Flin Flon</td>
                                    <td>2008/02/09</td>
                                    <td>8%</td>
                                </tr>
                                <tr>
                                    <td>Lareina Jones</td>
                                    <td>8642</td>
                                    <td>East Linton</td>
                                    <td>2009/07/08</td>
                                    <td>21%</td>
                                </tr>
                                <tr>
                                    <td>Joshua Weiss</td>
                                    <td>2289</td>
                                    <td>Saint-Léonard</td>
                                    <td>2010/15/01</td>
                                    <td>52%</td>
                                </tr>
                                <tr>
                                    <td>Kiona Lowery</td>
                                    <td>5952</td>
                                    <td>Inuvik</td>
                                    <td>2002/17/12</td>
                                    <td>72%</td>
                                </tr>
                                <tr>
                                    <td>Nina Rush</td>
                                    <td>7567</td>
                                    <td>Bo‘lhe</td>
                                    <td>2008/27/01</td>
                                    <td>6%</td>
                                </tr>
                                <tr>
                                    <td>Palmer Parker</td>
                                    <td>2000</td>
                                    <td>Stade</td>
                                    <td>2012/24/07</td>
                                    <td>58%</td>
                                </tr>
                                <tr>
                                    <td>Vielka Olsen</td>
                                    <td>3745</td>
                                    <td>Vrasene</td>
                                    <td>2016/08/01</td>
                                    <td>70%</td>
                                </tr>
                                <tr>
                                    <td>Meghan Cunningham</td>
                                    <td>8604</td>
                                    <td>Söke</td>
                                    <td>2007/16/02</td>
                                    <td>59%</td>
                                </tr>
                                <tr>
                                    <td>Iola Shaw</td>
                                    <td>6447</td>
                                    <td>Albany</td>
                                    <td>2014/05/03</td>
                                    <td>88%</td>
                                </tr>
                                <tr>
                                    <td>Imelda Cole</td>
                                    <td>4564</td>
                                    <td>Haasdonk</td>
                                    <td>2007/16/11</td>
                                    <td>79%</td>
                                </tr>
                                <tr>
                                    <td>Jerry Beach</td>
                                    <td>6801</td>
                                    <td>Gattatico</td>
                                    <td>1999/07/07</td>
                                    <td>36%</td>
                                </tr>
                                <tr>
                                    <td>Garrett Rocha</td>
                                    <td>3938</td>
                                    <td>Gavorrano</td>
                                    <td>2000/06/08</td>
                                    <td>71%</td>
                                </tr>
                                <tr>
                                    <td>Derek Kerr</td>
                                    <td>1724</td>
                                    <td>Gualdo Cattaneo</td>
                                    <td>2014/21/01</td>
                                    <td>89%</td>
                                </tr>
                                <tr>
                                    <td>Shad Hudson</td>
                                    <td>5944</td>
                                    <td>Salamanca</td>
                                    <td>2014/10/12</td>
                                    <td>98%</td>
                                </tr>
                                <tr>
                                    <td>Daryl Ayers</td>
                                    <td>8276</td>
                                    <td>Barchi</td>
                                    <td>2012/12/11</td>
                                    <td>88%</td>
                                </tr>
                                <tr>
                                    <td>Caleb Livingston</td>
                                    <td>3094</td>
                                    <td>Fatehpur</td>
                                    <td>2014/13/02</td>
                                    <td>8%</td>
                                </tr>
                                <tr>
                                    <td>Sydney Meyer</td>
                                    <td>4576</td>
                                    <td>Neubrandenburg</td>
                                    <td>2015/06/02</td>
                                    <td>22%</td>
                                </tr>
                                <tr>
                                    <td>Lani Lawrence</td>
                                    <td>8501</td>
                                    <td>Turnhout</td>
                                    <td>2008/07/05</td>
                                    <td>16%</td>
                                </tr>
                                <tr>
                                    <td>Allegra Shepherd</td>
                                    <td>2576</td>
                                    <td>Meeuwen-Gruitrode</td>
                                    <td>2004/19/04</td>
                                    <td>41%</td>
                                </tr>
                                <tr>
                                    <td>Fallon Reyes</td>
                                    <td>3178</td>
                                    <td>Monceau-sur-Sambre</td>
                                    <td>2005/15/02</td>
                                    <td>16%</td>
                                </tr>
                                <tr>
                                    <td>Karen Whitley</td>
                                    <td>4357</td>
                                    <td>Sluis</td>
                                    <td>2003/02/05</td>
                                    <td>23%</td>
                                </tr>
                                <tr>
                                    <td>Stewart Stephenson</td>
                                    <td>5350</td>
                                    <td>Villa Faraldi</td>
                                    <td>2003/05/07</td>
                                    <td>65%</td>
                                </tr>
                                <tr>
                                    <td>Ursula Reynolds</td>
                                    <td>7544</td>
                                    <td>Southampton</td>
                                    <td>1999/16/12</td>
                                    <td>61%</td>
                                </tr>
                                <tr>
                                    <td>Adrienne Winters</td>
                                    <td>4425</td>
                                    <td>Laguna Blanca</td>
                                    <td>2014/15/09</td>
                                    <td>24%</td>
                                </tr>
                                <tr>
                                    <td>Francesca Brock</td>
                                    <td>1337</td>
                                    <td>Oban</td>
                                    <td>2000/12/06</td>
                                    <td>90%</td>
                                </tr>
                                <tr>
                                    <td>Ursa Davenport</td>
                                    <td>7629</td>
                                    <td>New Plymouth</td>
                                    <td>2013/27/06</td>
                                    <td>37%</td>
                                </tr>
                                <tr>
                                    <td>Mark Brock</td>
                                    <td>3310</td>
                                    <td>Veenendaal</td>
                                    <td>2006/08/09</td>
                                    <td>41%</td>
                                </tr>
                                <tr>
                                    <td>Dale Rush</td>
                                    <td>5050</td>
                                    <td>Chicoutimi</td>
                                    <td>2000/27/03</td>
                                    <td>2%</td>
                                </tr>
                                <tr>
                                    <td>Shellie Murphy</td>
                                    <td>3845</td>
                                    <td>Marlborough</td>
                                    <td>2013/13/11</td>
                                    <td>72%</td>
                                </tr>
                                <tr>
                                    <td>Porter Nicholson</td>
                                    <td>4539</td>
                                    <td>Bismil</td>
                                    <td>2012/22/10</td>
                                    <td>23%</td>
                                </tr>
                                <tr>
                                    <td>Oliver Huber</td>
                                    <td>1265</td>
                                    <td>Hannche</td>
                                    <td>2002/11/01</td>
                                    <td>94%</td>
                                </tr>
                                <tr>
                                    <td>Calista Maynard</td>
                                    <td>3315</td>
                                    <td>Pozzuolo del Friuli</td>
                                    <td>2006/23/03</td>
                                    <td>5%</td>
                                </tr>
                                <tr>
                                    <td>Lois Vargas</td>
                                    <td>6825</td>
                                    <td>Cumberland</td>
                                    <td>1999/25/04</td>
                                    <td>50%</td>
                                </tr>
                                <tr>
                                    <td>Hermione Dickson</td>
                                    <td>2785</td>
                                    <td>Woodstock</td>
                                    <td>2001/22/03</td>
                                    <td>2%</td>
                                </tr>
                                <tr>
                                    <td>Dalton Jennings</td>
                                    <td>5416</td>
                                    <td>Dudzele</td>
                                    <td>2015/09/02</td>
                                    <td>74%</td>
                                </tr>
                                <tr>
                                    <td>Cathleen Kramer</td>
                                    <td>3380</td>
                                    <td>Crowsnest Pass</td>
                                    <td>2012/27/07</td>
                                    <td>53%</td>
                                </tr>
                                <tr>
                                    <td>Zachery Morgan</td>
                                    <td>6730</td>
                                    <td>Collines-de-l'Outaouais</td>
                                    <td>2006/04/09</td>
                                    <td>51%</td>
                                </tr>
                                <tr>
                                    <td>Yoko Freeman</td>
                                    <td>4077</td>
                                    <td>Lidköping</td>
                                    <td>2002/27/12</td>
                                    <td>48%</td>
                                </tr>
                                <tr>
                                    <td>Chaim Waller</td>
                                    <td>4240</td>
                                    <td>North Shore</td>
                                    <td>2010/25/07</td>
                                    <td>25%</td>
                                </tr>
                                <tr>
                                    <td>Berk Johnston</td>
                                    <td>4532</td>
                                    <td>Vergnies</td>
                                    <td>2016/23/02</td>
                                    <td>93%</td>
                                </tr>
                                <tr>
                                    <td>Tad Munoz</td>
                                    <td>2902</td>
                                    <td>Saint-Nazaire</td>
                                    <td>2010/09/05</td>
                                    <td>65%</td>
                                </tr>
                                <tr>
                                    <td>Vivien Dominguez</td>
                                    <td>5653</td>
                                    <td>Bargagli</td>
                                    <td>2001/09/01</td>
                                    <td>86%</td>
                                </tr>
                                <tr>
                                    <td>Carissa Lara</td>
                                    <td>3241</td>
                                    <td>Sherborne</td>
                                    <td>2015/07/12</td>
                                    <td>72%</td>
                                </tr>
                                <tr>
                                    <td>Hammett Gordon</td>
                                    <td>8101</td>
                                    <td>Wah</td>
                                    <td>1998/06/09</td>
                                    <td>20%</td>
                                </tr>
                                <tr>
                                    <td>Walker Nixon</td>
                                    <td>6901</td>
                                    <td>Metz</td>
                                    <td>2011/12/11</td>
                                    <td>41%</td>
                                </tr>
                                <tr>
                                    <td>Nathan Espinoza</td>
                                    <td>5956</td>
                                    <td>Strathcona County</td>
                                    <td>2002/25/01</td>
                                    <td>47%</td>
                                </tr>
                                <tr>
                                    <td>Blossom Cameron</td>
                                    <td>4836</td>
                                    <td>Fontaine-Valmont</td>
                                    <td>1999/02/07</td>
                                    <td>24%</td>
                                </tr>
                                <tr>
                                    <td>Kyra Moses</td>
                                    <td>3796</td>
                                    <td>Quenast</td>
                                    <td>1998/07/07</td>
                                    <td>68%</td>
                                </tr>
                                <tr>
                                    <td>Grace Bishop</td>
                                    <td>8340</td>
                                    <td>Rodez</td>
                                    <td>2012/02/10</td>
                                    <td>4%</td>
                                </tr>
                                <tr>
                                    <td>Haviva Hernandez</td>
                                    <td>8136</td>
                                    <td>Suwałki</td>
                                    <td>2000/30/01</td>
                                    <td>16%</td>
                                </tr>
                                <tr>
                                    <td>Alisa Horn</td>
                                    <td>9853</td>
                                    <td>Ucluelet</td>
                                    <td>2007/01/11</td>
                                    <td>39%</td>
                                </tr>
                                <tr>
                                    <td>Zelenia Roman</td>
                                    <td>7516</td>
                                    <td>Redwater</td>
                                    <td>2012/03/03</td>
                                    <td>31%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header border border-primary text-primary border-top-0 border-start-0 border-end-0">
                        <h3 class="card-title text-primary d-inline">
                            Column Filter Button
                        </h3>
                        <span class="float-end">
                            <i class="fa fa-chevron-up clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <div id="table19" class="svg-img"></div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header border border-primary text-primary border-top-0 border-start-0 border-end-0">
                        <h3 class="card-title text-primary d-inline">
                            Custom Footer
                        </h3>
                        <span class="float-end">
                            <i class="fa fa-chevron-up clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <table id="table20">
                            <thead>
                                <tr>
                                    <th>Athlete</th>
                                    <th>Nation</th>
                                    <th data-type="number" class="gold-color">Gold</th>
                                    <th data-type="number" class="silver-color">Silver</th>
                                    <th data-type="number" class="bronze-color">Bronze</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Michael Phelps</td>
                                    <td>United States</td>
                                    <td>23</td>
                                    <td>3</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>Larisa Latynina</td>
                                    <td>Soviet Union</td>
                                    <td>9</td>
                                    <td>5</td>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <td>Paavo Nurmi</td>
                                    <td>Finland</td>
                                    <td>9</td>
                                    <td>3</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>Mark Spitz</td>
                                    <td>United States</td>
                                    <td>9</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>Carl Lewis</td>
                                    <td>United States</td>
                                    <td>9</td>
                                    <td>1</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>Marit Bjørgen</td>
                                    <td>Norway</td>
                                    <td>8</td>
                                    <td>4</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td>Ole Einar Bjørndalen</td>
                                    <td>Norway</td>
                                    <td>8</td>
                                    <td>4</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>Bjørn Dæhlie</td>
                                    <td>Norway</td>
                                    <td>8</td>
                                    <td>4</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>Birgit Fischer</td>
                                    <td>Germany</td>
                                    <td>8</td>
                                    <td>4</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>Sawao Kato</td>
                                    <td>Japan</td>
                                    <td>8</td>
                                    <td>3</td>
                                    <td>1</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2">This is a table footer.</td>
                                </tr>
                            </tfoot>
                            <tfoot class="fw-bold">
                                <tr>
                                    <td colspan="2">Total</td>
                                    <td>99</td>
                                    <td>32</td>
                                    <td>12</td>
                                </tr>
                            </tfoot>
                            <caption>This is a table caption.</caption>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header border border-primary text-primary border-top-0 border-start-0 border-end-0">
                        <h3 class="card-title text-primary d-inline">
                            Numeric Sort
                        </h3>
                        <span class="float-end">
                            <i class="fa fa-chevron-up clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <table id="table21">
                            <thead>
                                <tr>
                                    <th>Number</th>
                                    <th>#</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Minus one point five</td>
                                    <td>-1.5</td>
                                </tr>
                                <tr>
                                    <td>Minus one</td>
                                    <td>-1</td>
                                </tr>
                                <tr>
                                    <td>Minus zero point eight</td>
                                    <td>-0.8</td>
                                </tr>
                                <tr>
                                    <td>Minus zero point five</td>
                                    <td>-0.5</td>
                                </tr>
                                <tr>
                                    <td>Minus zero point two</td>
                                    <td>-0.2</td>
                                </tr>
                                <tr>
                                    <td>Zero</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>Zero point five</td>
                                    <td>0.5</td>
                                </tr>
                                <tr>
                                    <td>Zero point eight</td>
                                    <td>0.8</td>
                                </tr>
                                <tr>
                                    <td>One</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>One poiny five</td>
                                    <td>1.5</td>
                                </tr>
                                <tr>
                                    <td>Two</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>Three</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td>Four</td>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <td>Five</td>
                                    <td>5</td>
                                </tr>
                                <tr>
                                    <td>Six</td>
                                    <td>6</td>
                                </tr>
                                <tr>
                                    <td>Seven</td>
                                    <td>7</td>
                                </tr>
                                <tr>
                                    <td>Eight</td>
                                    <td>8</td>
                                </tr>
                                <tr>
                                    <td>Nine</td>
                                    <td>9</td>
                                </tr>
                                <tr>
                                    <td>Ten</td>
                                    <td>10</td>
                                </tr>
                                <tr>
                                    <td>Eleven</td>
                                    <td>11</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header border border-primary text-primary border-top-0 border-start-0 border-end-0">
                        <h3 class="card-title text-primary d-inline">
                            Load JSON
                        </h3>
                        <span class="float-end">
                            <i class="fa fa-chevron-up clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <div id="table22"></div>
                    </div>
                </div>

            </div>


        </div>

    </section>
    <!-- content end-->


@stop
@section('footer_scripts')
    <!--   page level js ----------->
    <script src="{{ asset('vendors/simple-datatables/js/simple-datatables.js') }}"></script>
    <script src="{{ asset('js/pages/simpledatatable.js') }}"></script>
    <script type="module">
        import {
            DataTable,
            exportJSON,
            exportCSV,
            exportTXT,
            exportSQL
        } from "../vendors/simple-datatables/js/module.js"
        const exportCustomCSV = function(dataTable, userOptions = {}) {
            // A modified CSV export that includes a row of minuses at the start and end.
            const clonedUserOptions = {
                ...userOptions
            }
            clonedUserOptions.download = false
            const csv = exportCSV(dataTable, clonedUserOptions)
            // If CSV didn't work, exit.
            if (!csv) {
                return false
            }
            const defaults = {
                download: true,
                lineDelimiter: "\n",
                columnDelimiter: ";"
            }
            const options = {
                ...defaults,
                ...clonedUserOptions
            }
            const separatorRow = Array(dataTable.data.headings.filter((_heading, index) => !dataTable.columns.settings[
                    index]?.hidden).length)
                .fill("-")
                .join(options.columnDelimiter)
            const str = `${separatorRow}${options.lineDelimiter}${csv}${options.lineDelimiter}${separatorRow}`
            if (userOptions.download) {
                // Create a link to trigger the download
                const link = document.createElement("a")
                link.href = encodeURI(`data:text/csv;charset=utf-8,${str}`)
                link.download = `${options.filename || "datatable_export"}.txt`
                // Append the link
                document.body.appendChild(link)
                // Trigger the download
                link.click()
                // Remove the link
                document.body.removeChild(link)
            }
            return str
        }
        const table = new DataTable("#table9")
        document.getElementById("export-csv").addEventListener("click", () => {
            exportCSV(table, {
                download: true,
                lineDelimiter: "\n",
                columnDelimiter: ";"
            })
        })
        document.getElementById("export-sql").addEventListener("click", () => {
            exportSQL(table, {
                download: true,
                tableName: "export_table"
            })
        })
        document.getElementById("export-txt").addEventListener("click", () => {
            exportTXT(table, {
                download: true
            })
        })
        document.getElementById("export-json").addEventListener("click", () => {
            exportJSON(table, {
                download: true,
                space: 3
            })
        })
        document.getElementById("export-custom").addEventListener("click", () => {
            exportCustomCSV(table, {
                download: true
            })
        })
    </script>
    <script type="module">
        import {
            DataTable,
            convertJSON,
            convertCSV,
            exportCSV,
            exportSQL,
            exportJSON
        } from "../vendors/simple-datatables/js/module.js"
        const createElement = (nodeName, attrs) => {
            const dom = document.createElement(nodeName)
            if (attrs && "object" == typeof attrs) {
                for (const attr in attrs) {
                    if ("text" === attr) {
                        const text = document.createTextNode(attrs[attr])
                        dom.appendChild(text)
                    } else if ("html" === attr) {
                        dom.innerHTML = attrs[attr]
                    } else {
                        dom.setAttribute(attr, attrs[attr])
                    }
                }
            }
            return dom
        }
        const checkboxes = document.getElementById("columns")
        const table = document.getElementsByClassName("table6")[0]
        const textarea = document.getElementsByClassName("texts")[0]
        const hidden = []
        const visible = []
        let inputs = []
        const datatable = new DataTable(table, {
            perPage: 5,
            columns: [{
                select: [1, 4, 5],
                type: "html"
            }]
        })
        window.datatable = datatable
        const updateColumns = function() {
            datatable.columns.show(visible)
            datatable.columns.hide(hidden)
        }
        const setCheckboxes = function() {
            inputs = []
            while (visible.length) {
                visible.pop()
            }
            while (hidden.length) {
                hidden.pop()
            }
            checkboxes.innerHTML = ""
            datatable.data.headings.forEach((heading, i) => {
                const checkbox = createElement("div", {
                    class: "checkbox"
                })
                const input = createElement("input", {
                    type: "checkbox",
                    id: `checkbox-${i}`,
                    name: "checkbox"
                })
                const label = createElement("label", {
                    for: `checkbox-${i}`,
                    html: heading.data
                })
                input.idx = i
                if (datatable.columns.visible(i)) {
                    input.checked = true
                    visible.push(i)
                } else {
                    if (hidden.indexOf(i) < 0) {
                        hidden.push(i)
                    }
                }
                checkbox.appendChild(input)
                checkbox.appendChild(label)
                checkboxes.appendChild(checkbox)
                inputs.push(input)
            })
            inputs.forEach(input => {
                input.onchange = function(_event) {
                    if (input.checked) {
                        hidden.splice(hidden.indexOf(input.idx), 1)
                        visible.push(input.idx)
                    } else {
                        visible.splice(visible.indexOf(input.idx), 1)
                        hidden.push(input.idx)
                    }
                    updateColumns()
                }
            })
        }

        datatable.on("datatable.init", () => {
            setCheckboxes()
        })
        window.dt = datatable
        textarea.addEventListener("input", function(_event) {
            if (this.value.length) {
                this.parentNode.classList.remove("error")
            }
        })
        document.querySelectorAll(".export").forEach(el => {
            el.addEventListener("click", _event => {
                const type = el.dataset.type
                const data = {
                    filename: `my-${type}`
                }
                if (type === "csv") {
                    data.columnDelimiter = ","
                }
                if (type === "csv") {
                    exportCSV(datatable, data)
                } else if (type === "json") {
                    exportJSON(datatable, data)
                } else if (type === "sql") {
                    exportSQL(datatable, data)
                }

            })
        })
        document.querySelectorAll(".main").forEach(el => {
            el.addEventListener("click", _event => {
                datatable[el.id]()
                setTimeout(() => {
                    document.getElementById("hide").classList.toggle("hidden", !datatable
                        .initialized)
                    table.classList.toggle("table", !datatable.initialized)
                }, 10)
            })
        })
        document.querySelectorAll(".import").forEach(el => {
            el.addEventListener("click", _event => {
                const type = el.dataset.type
                const data = {
                    data: textarea.value
                }
                textarea.parentNode.classList.remove("error")
                if (!data.data.length) {
                    textarea.parentNode.classList.add("error")
                    return false
                }
                if (type === "csv") {
                    const convertedData = convertCSV(data)
                    datatable.insert(convertedData)
                } else if (type === "json") {
                    const convertedData = convertJSON(data)
                    datatable.insert(convertedData)
                }

            })
        })
    </script>
    <script type="module">
        import {
            DataTable,
            makeEditable
        } from "../vendors/simple-datatables/js/module.js"
        let editor = false
        let inline = true
        let table = false

        const resetTable = function() {
            if (editor) {
                editor.destroy()
            }
            if (table) {
                table.destroy()
            }
            window.table = table = new DataTable("#table13", {
                columns: [{
                    select: 3,
                    type: "date",
                    format: "YYYY/DD/MM"
                }]
            })
            editor = makeEditable(table, {
                contextMenu: true,
                hiddenColumns: true,
                excludeColumns: [1], // make the "Ext." column non-editable
                inline,
                menuItems: [{
                    text: "<span class='mdi mdi-lead-pencil'></span> Edit Cell",
                    action: (editor, _event) => {
                        const td = editor.event.target.closest("td")
                        return editor.editCell(td)
                    }
                }, {
                    text: "<span class='mdi mdi-lead-pencil'></span> Edit Row",
                    action: (editor, _event) => {
                        const tr = editor.event.target.closest("tr")
                        return editor.editRow(tr)
                    }
                }, {
                    separator: true
                }, {
                    text: "<span class='mdi mdi-delete'></span> Remove",
                    action: (editor, _event) => {
                        if (confirm("Are you sure?")) {
                            const tr = editor.event.target.closest("tr")
                            editor.removeRow(tr)
                        }
                    }
                }]
            })
        }
        resetTable()
        document.getElementById("modal").addEventListener("input", _event => {
            inline = !inline
            resetTable()
        })
    </script>
    <script type="module">
        import {
            DataTable,
            addColumnFilter
        } from "../vendors/simple-datatables/js/module.js"
        const machineTypeIcons = [{
                name: "Scaler",
                code: `
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 4096 4096">
                        <g>
                            <circle style="fill: #161719" cx="785.77769" cy="2722.76844" r="268.60136"></circle>
                            <circle style="fill: #161719" cx="2469.10822" cy="2722.76844" r="268.60136"></circle>
                            <path style="fill: #161719" d="M2251.275,2358.344l84.69517,77.49579c-136.81895,69.75272-208.755,238.20138-157.11006,395.45748H1180.32648V2722.77233h-91.47229c2.49973-37.17335,3.04367-125.18807-53.35749-200.184-97.91689-130.204-327.57163-168.06721-463.25416-45.80921-92.39766,83.25849-122.98849,224.3304-77.9341,354.51813H308.30695L3.27986,2722.76844,0,2274.86635l494.30844-99.09364H974.518v-95.27894h274.40873v464.96671l232.47924,110.5216h148.64466V2522.58835a308.51381,308.51381,0,0,1-224.86611-99.08556V1821.3276h-27.71758v-64.78546h823.0398l50.7683,22.86406Z"></path>
                            <path style="fill: #161719" d="M2949.91694,2470.68864v145.80768a835.912,835.912,0,0,1-190.5959,0,354.506,354.506,0,0,0-43.88252-81.4244c-21.93965-30.38957-43.31409-56.57044-72.54389-78.072Z"></path>
                            <polygon style="fill: #161719" points="2635.581 2435.222 2835.198 2442.886 2835.198 2404.221 2578.685 2137.947 2463.69 2086.773 2336.401 2094.239 2445.564 2158.615 2635.581 2435.222"></polygon>
                            <path style="fill: #161719" d="M2336.40142,2072.45269l129.307-7.5333,12.72614-47.93921a2850.738,2850.738,0,0,0,251.41867-256.34977c103.6051-119.85624,195.77594-242.92773,267.05627-355.91076-4.77019-15.12349-8.48382-41.31327-13.254-56.43675-132.769,119.47-276.38433,270.86838-411.2717,427.11074C2486.18549,1875.23859,2407.76179,1974.72761,2336.40142,2072.45269Z"></path>
                            <path style="fill: #161719" d="M2996.90949,1344.37959l13.87872,56.7062a2780.44544,2780.44544,0,0,0,355.75215,39.26512c154.17448,6.80751,289.00705-.92231,402.94342-14.83632q62.79871,39.95907,125.59749,79.91808l35.25475-49.58987-138.61139-97.27266q-197.28083-4.55364-394.29408-8.08Q3197.01272,1346.90292,2996.90949,1344.37959Z"></path>
                            <polygon style="fill: #161719" points="3814.13 1363.759 3935.324 1446.735 3977.721 1408.422 3994.045 1297.423 3918.644 1240.77 3844.751 1307.545 3814.13 1363.759"></polygon>
                            <polygon style="fill: #161719" points="3927.275 1232.971 3997.934 1287.42 4043.917 1186.716 3997.88 1156.774 3927.275 1232.971"></polygon>
                            <polygon style="fill: #161719" points="4008.328 1147.333 4012.091 1150.032 4045.861 1174.256 4096 1068.107 4083.109 1053.842 4008.328 1147.333"></polygon>
                            <polygon style="fill: #161719" points="2615.274 2152.28 2645.826 2182.046 2755.502 1803.042 2729.445 1774.208 2695.638 1814.324 2615.274 2152.28"></polygon>
                            <polygon style="fill: #161719" points="2737.71 1766.74 2763.766 1795.575 3100.321 1551.11 3075.851 1524.031 2762.502 1744.336 2737.71 1766.74"></polygon>
                            <polygon style="fill: #161719" points="3081.911 1518.554 3106.382 1545.634 3113.429 1514.669 3096.191 1423.307 3005.284 1405.058 3081.911 1518.554"></polygon>
                            <polygon style="fill: #161719" points="3120.635 1512.862 3115.064 1545.634 3221.779 1508.31 3779.577 1556.298 3746.014 1516.68 3239.037 1465.385 3224.833 1438.593 3171.163 1437.9 3193.652 1474.969 3120.635 1512.862"></polygon>
                            <polygon style="fill: #161719" points="3695.198 1440.88 3783.984 1552.315 3852.852 1490.082 3822.45 1469.729 3778.142 1508.589 3724.937 1437.9 3695.198 1440.88"></polygon>
                        </g>
                    </svg>
                `
            },
            {
                name: "LHD",
                code: `
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 4096 4096">
                          <g>
                              <path style="fill: #161719" d="M7.6719,1680.55315H1365.62666v-222.4898l464.15914,5.754c17.01138,10.6247,41.00986,26.12614,69.04893,46.03243,33.55695,23.82347,50.335,35.7352,62.33556,48.90928,15.001,16.468,39.66629,51.38742,43.15491,117.958l474.22919,4.795L2602.267,1888.65769c-17.64413-1.64918-311.64551-23.97313-490.53244,211.94071-127.22992,167.78946-144.68018,398.22547-44.59451,589.31l-775.35679,1.43848c97.71715-186.724,89.51123-407.95559-23.97514-573.48646-132.97129-193.95184-349.58589-222.61781-381.68529-226.32565-29.43469-3.4-269.50029-26.94769-448.81533,157.27717C233.53713,2258.16209,297.70809,2541.14431,302.087,2559.00384Q151.04307,2507.93671,0,2456.8696,3.8355,2068.71138,7.6719,1680.55315Z"></path>
                              <circle style="fill: #161719" cx="2539.13189" cy="2427.46008" r="485.41761"></circle>
                              <path style="fill: #161719" d="M4096,1869.12922c-131.35973,110.16474-277.68138,223.66973-439.59751,336.62659-117.89064,82.23985-232.93911,156.44226-343.76194,223.39176a404.0608,404.0608,0,0,1-232.00285,47.41578q2.16358-24.26489,2.18448-49.10259c0-223.05447-134.32007-414.73426-326.48065-498.56825a403.63466,403.63466,0,0,1,45.65341-81.33756c117.88219-92.5295,253.36605-155.19445,371.24825-247.7322l327.61912,169.279Z"></path>
                              <circle style="fill: #161719" cx="818.35284" cy="2423.78388" r="485.41761"></circle>
                              <polygon style="fill: #161719" points="1396.049 1730.479 973.395 1730.479 973.395 1458.063 1365.627 1458.063 1396.049 1730.479"></polygon>
                          </g>
                      </svg>
                `
            }
        ]

        const getMachineTypeIcon = name => {
            const machineType = machineTypeIcons.find(x => x.name === name)
            if (machineType) {
                return machineType.code
            }
            return ""
        }

        const generateTable = columns => {
            const tableData = {
                headings: [],
                data: []
            }

            columns.forEach(colum => tableData.headings.push(colum || ""))

            for (let i = 0; i < 100; i++) {
                const machineType = machineTypeIcons[Math.floor(Math.random() * machineTypeIcons.length)].name
                tableData.data.push([
                    `Machine ${i}`,
                    `${getMachineTypeIcon(machineType)} <span>${machineType}</span>`,
                    `OEM ${i}`,
                    `${new Date(+new Date() - Math.floor(Math.random() * 2592000000)).toISOString().slice(0, 19).replace("T", " ")}`
                ])
            }
            return tableData
        }

        const dataTable = new DataTable("#table19", {
            data: generateTable(["Name", "Type", "OEM", "Last Seen"]),
            searchable: true,
            sortable: true,
            perPage: 10,
            perPageSelect: [5, 10, 25, 50, 100, ["All", -1]],
            columns: [{
                select: [0, 3],
                hidden: true
            }]
        })
        window.dataTable = dataTable
        window.columnFilter = addColumnFilter(
            dataTable, {
                hiddenColumns: [3]
            }
        )
    </script>
@stop
