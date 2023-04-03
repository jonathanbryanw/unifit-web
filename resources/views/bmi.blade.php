@extends('layouts.view')

@section('css')
<link rel="stylesheet" href="{{asset('css/bmi-style.css')}}">
@endsection

@section('js')
<script src="{{asset('js/bmi-script.js')}}"></script>
@endsection

@section('content')
<div class="form">
            <table style="width: max-content" id="input">
                <tr>
                    <th colspan="5"><h3>BMI Form</h3></th>
                </tr>
                <form action="" id="bmiForm">
                    <tbody>
                        <tr>
                            <td colspan="2"><label for="weight">Weight: (kg)</label></td>
                            <td colspan="3"><input type="number" name="weight" id="weight" required></td>
                        </tr>
                        <tr>
                            <td colspan="2"><label for="height">Height: (cm)</label></td>
                            <td colspan="3"><input type="number" name="height" id="height" required></td>
                        </tr>
                        <tr>
                            <td colspan="5"><button type="submit" class="btn btn-secondary">Submit</button></td>
                        </tr>
                        <tr>
                            <td colspan="5"><p id="result"></p></td>
                        </tr>
                    </tbody>
                </form>
            </table>            
        </div>  
@endsection