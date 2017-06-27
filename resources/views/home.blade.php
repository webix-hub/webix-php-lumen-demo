@extends('layouts.app')
@section('content')

<h3>Hi!</h3>

<p>This package shows how Webix can be used with PHP (Lumen | Laravel) backend.</p>
<p>There are 3 major cases:

<ul>
<li>Loading data into data components (list, datatable, chart, etc. )</li>
<li>Loading data in hierarchical components (tree, treetable, etc.)</li>
<li>Working with forms</li>
</ul>

<p>For data loading the server must provide a GET handler which returns a collection of JSON objects (a single JSON object in case of the form )</p>
<p>For data saving, a common REST pattern is used. Rest handlers must return a valid JSON object with optional ID value.</p>

<h4>Check also</h4>

<ul>
<li><a href='//github.com/webix-hub/webix-nodejs-demo'>NodeJs (Express) samples</a></li>
<li><a href='//github.com/webix-hub/webix-netmvc-demo'>.Net MVC samples</a></li>
</ul>

<br><br><hr>
@ XB Software 2017, MIT license.

@endsection