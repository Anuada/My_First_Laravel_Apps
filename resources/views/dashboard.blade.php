@extends('components.layout_dashboard')

@section('content')

<div class="w3-top">
    <div class="w3-bar w3-white w3-wide w3-padding w3-card">
        <a href="#home" class="w3-bar-item w3-button"><b>BR</b> Architects</a>

        <div class="w3-right w3-hide-small">
            <a href="#projects" class="w3-bar-item w3-button">Projects</a>
            <a href="#about" class="w3-bar-item w3-button">About</a>
            <a href="#contact" class="w3-bar-item w3-button">Contact</a>
            <a href="/Anuada" class="w3-bar-item w3-button">Home</a>
        </div>
    </div>
</div>

<br>
<br>
<br>
<br>
<nav class="navbar navbar-inverse visible-xs">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Logo</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Dashboard</a></li>
                <li><a href="#">Age</a></li>
                <li><a href="#">Gender</a></li>
                <li><a href="#">Geo</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row content">
        <div class="col-sm-3 sidenav hidden-xs">
            <h2>Logo</h2>
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#section1">Dashboard</a></li>
                <li><a href="#section2">Age</a></li>
                <li><a href="#section3">Gender</a></li>
                <li><a href="#section3">Geo</a></li>
            </ul><br>
        </div>
        <br>

        <div class="col-sm-9">
            <div class="well">
                <h4>Dashboard</h4>
                <p>Some text..</p>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="well">
                        <h4>Users</h4>
                        <p>1 Million</p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="well">
                        <h4>Pages</h4>
                        <p>100 Million</p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="well">
                        <h4>Sessions</h4>
                        <p>10 Million</p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="well">
                        <h4>Bounce</h4>
                        <p>30%</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="well">
                        <p>Text</p>
                        <p>Text</p>
                        <p>Text</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="well">
                        <p>Text</p>
                        <p>Text</p>
                        <p>Text</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="well">
                        <p>Text</p>
                        <p>Text</p>
                        <p>Text</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <div class="well">
                        <p>Text</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="well">
                        <p>Text</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection